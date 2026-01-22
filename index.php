<?php
<!DOCTYPE html>
<head>
    <title>Student Registration</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 500px; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        input, select, textarea { width: 100%; padding: 8px; margin: 5px 0 15px 0; }
        button { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer; }
        button:hover { background-color: #45a049; }
    </style>
</head>
<body>

    <h2>Student Registration Form</h2>

    <form action="submit.php" method="POST">
        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter full name" required>

        <label>Roll No:</label>
        <input type="text" name="rollno" placeholder="Enter roll number" required>

        <label>City:</label>
        <input type="text" name="city" placeholder="Enter city" required>

        <label>Class:</label>
        <select name="class" required>
            <option value="" disabled selected>Select class</option>
            <option value="FY">FY</option>
            <option value="SY">SY</option>
            <option value="TY">TY</option>
        </select>

        <label>Branch:</label>
        <select name="branch" required>
            <option value="" disabled selected>Select branch</option>
            <option value="Arts">Arts</option>
            <option value="Science">Science</option>
        </select>

        <label>Sub-Branch:</label>
        <select name="sub_branch" required>
            <option value="" disabled selected>Select sub-branch</option>
            <option value="CS">CS</option>
            <option value="IT">IT</option>
            <option value="Data Science">Data Science</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Math">Math</option>
            <option value="Electronics">Electronics</option>
        </select>

        <button type="submit">Submit</button>
    </form>

</body>
</html>

include 'config.php';

// Get data from form
$name = $_POST['name'];
$rollno = $_POST['rollno'];
$city = $_POST['city'];
$class = $_POST['class'];
$branch = $_POST['branch'];
$sub_branch = $_POST['sub_branch'];

// Insert into database
$sql = "INSERT INTO students (name, rollno, city, class, branch, sub_branch)
        VALUES ('$name', '$rollno', '$city', '$class', '$branch', '$sub_branch')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully! <a href='index.php'>Go back</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

