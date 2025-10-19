<?php
session_start();
$conn = new mysqli("localhost", "root", "", "quiz_platform");
if ($conn->connect_error) die("Connection failed: ".$conn->connect_error);

$limit = 5; // Number of random questions
$sql = "SELECT * FROM questions ORDER BY RAND() LIMIT ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $limit);
$stmt->execute();
$result = $stmt->get_result();

$questions = [];
while ($row = $result->fetch_assoc()) $questions[] = $row;

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Quiz</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-box">
    <h2>Quiz</h2>
    <form method="POST" action="submit_quiz.php">
      <?php foreach($questions as $i => $q): ?>
        <div class="question-block">
          <p><strong>Q<?php echo $i+1; ?>:</strong> <?php echo $q['question_text']; ?></p>
          <label><input type="radio" name="answer[<?php echo $q['id']; ?>]" value="A"> <?php echo $q['option_a']; ?></label><br>
          <label><input type="radio" name="answer[<?php echo $q['id']; ?>]" value="B"> <?php echo $q['option_b']; ?></label><br>
          <label><input type="radio" name="answer[<?php echo $q['id']; ?>]" value="C"> <?php echo $q['option_c']; ?></label>
        </div><hr>
      <?php endforeach; ?>
      <button type="submit" class="login-btn">Submit Quiz</button>
    </form>
    <p><a href="index.php">← Back to Home</a></p>
  </div>
</body>
</html>

