<?php
$servername = "localhost";
$username = "root";
$password = ""; // your MySQL password
$dbname = "quiz_platform";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "SELECT id, question, option1, option2, option3, option4, answer FROM questions ORDER BY RAND() LIMIT 10";
$result = $conn->query($sql);

$questions = [];
while($row = $result->fetch_assoc()) {
    $questions[] = [
        "question" => $row['question'],
        "options" => [$row['option1'],$row['option2'],$row['option3'],$row['option4']],
        "answer" => intval($row['answer'])
    ];
}

echo json_encode($questions);
$conn->close();
?>
