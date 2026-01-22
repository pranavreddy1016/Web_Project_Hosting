<?php
include 'config.php';

// Get data from form safely
$name = $conn->real_escape_string($_POST['name']);
$rollno = $conn->real_escape_string($_POST['rollno']);
$city = $conn->real_escape_string($_POST['city']);
$class = $conn->real_escape_string($_POST['class']);
$branch = $conn->real_escape_string($_POST['branch']);
$sub_branch = $conn->real_escape_string($_POST['sub_branch']);

// Insert into database
$sql = "INSERT INTO students (name, rollno, city, class, branch, sub_branch) 
        VALUES ('$name', '$rollno', '$city', '$class', '$branch', '$sub_branch')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Student registered successfully!</h3>";
    echo "<a href='index.php'>Go back to form</a> | <a href='admin.php'>View Submissions</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
