<?php
// DB connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback_system"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection success
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from POST
$event_id = $_POST['event_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$user_type = $_POST['user_type'];
$rating_overall = $_POST['rating_overall'];
$rating_project1 = $_POST['rating_project1'] ?? null;
$rating_project2 = $_POST['rating_project2'] ?? null;
$rating_project3 = $_POST['rating_project3'] ?? null;
$rating_project4 = $_POST['rating_project4'] ?? null;
$liked_most = $_POST['liked_most'];
$improvement_suggestions = $_POST['improvement_suggestions'];
$attend_again = $_POST['attend_again'];

// Prepare SQL
$sql = "INSERT INTO event_feedback (
  event_id, name, email, user_type, rating_overall, 
  rating_project1, rating_project2, rating_project3, rating_project4,
  liked_most, improvement_suggestions, attend_again
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssiiiiisss", $event_id, $name, $email, $user_type, $rating_overall,
  $rating_project1, $rating_project2, $rating_project3, $rating_project4,
  $liked_most, $improvement_suggestions, $attend_again);

if ($stmt->execute()) {
  echo "<h2>Thank you for your feedback!</h2>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
