<?php
include_once 'helpers.php';

// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "feedback_system";

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch feedback
$sql = "SELECT * FROM event_feedback ORDER BY submission_time DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Feedback Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef2f5;
      padding: 20px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
    }
    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }
    th {
      background: #4CAF50;
      color: white;
    }
    tr:nth-child(even) {
      background: #f9f9f9;
    }
    .star {
      color: gold;
    }
  </style>
</head>
<body>
  <h2>Event Feedback (Admin Panel)</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>User</th>
      <th>Email</th>
      <th>User Type</th>
      <th>Overall</th>
      <th>Project 1</th>
      <th>Project 2</th>
      <th>Project 3</th>
      <th>Project 4</th>
      <th>Liked Most</th>
      <th>Suggestions</th>
      <th>Attend Again</th>
      <th>Time</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['name']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['user_type']}</td>";
        echo "<td><span class='star'>" . stars($row['rating_overall']) . "</span></td>";
        echo "<td><span class='star'>" . stars($row['rating_project1']) . "</span></td>";
        echo "<td><span class='star'>" . stars($row['rating_project2']) . "</span></td>";
        echo "<td><span class='star'>" . stars($row['rating_project3']) . "</span></td>";
        echo "<td><span class='star'>" . stars($row['rating_project4']) . "</span></td>";
        echo "<td>{$row['liked_most']}</td>";
        echo "<td>{$row['improvement_suggestions']}</td>";
        echo "<td>{$row['attend_again']}</td>";
        echo "<td>{$row['submission_time']}</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='13'>No feedback submitted yet.</td></tr>";
    }
    $conn->close();
    ?>
  </table>
</body>
</html>
