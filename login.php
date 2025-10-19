<?php
session_start();
$login_error = "";

// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $student_number = $_POST['student_number'];
    $password = $_POST['password'];

    // Connect to DB
    $conn = new mysqli("localhost", "root", "", "quiz_platform");
    if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

    // Check credentials
    $stmt = $conn->prepare("SELECT * FROM students WHERE student_number = ? AND password = ?");
    $stmt->bind_param("is", $student_number, $password); // plain text for now
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Login successful
        $_SESSION['student_number'] = $student_number;
        header("Location: lessons.php"); // redirect to lessons page
        exit();
    } else {
        $login_error = "Invalid student number or password.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container-box">
    <h2>Student Login</h2>

    <?php if ($login_error != ""): ?>
      <p style="color:red; text-align:center;"><?php echo $login_error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
      <label>Student Number:</label><br>
      <input type="text" name="student_number" required><br><br>

      <label>Password:</label><br>
      <input type="password" name="password" required><br><br>

      <button type="submit" class="login-btn">Login</button>
    </form>

    <p><a href="index.php">← Back to Home</a></p>
  </div>
</body>
</html>