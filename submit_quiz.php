<?php
session_start();
$conn = new mysqli("localhost", "root", "", "quiz_platform");
if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

// Assume student is logged in
$student_number = $_SESSION['student_number'];

// Fetch correct answers
$question_ids = implode(",", array_keys($_POST['answer']));
$sql = "SELECT id, correct_option, topic FROM questions WHERE id IN ($question_ids)";
$result = $conn->query($sql);

$score = 0;
$total = 0;
$topics = [];

while ($row = $result->fetch_assoc()) {
    $total++;
    $topics[$row['id']] = $row['topic'];
    if ($_POST['answer'][$row['id']] == $row['correct_option']) $score++;
}

$percentage = ($score/$total)*100;
$topic = implode(", ", array_unique($topics));

// Save results
$stmt = $conn->prepare("INSERT INTO quiz_results (student_number, topic, score, total_questions, percentage) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("isidd", $student_number, $topic, $score, $total, $percentage);
$stmt->execute();
$stmt->close();
$conn->close();

// Redirect to results page
$_SESSION['score'] = $score;
$_SESSION['total'] = $total;
$_SESSION['percentage'] = $percentage;
header("Location: results.php");
exit;
?>