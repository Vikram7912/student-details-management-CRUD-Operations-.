<?php
    // Database connection
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "student_db";

    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $reg_no = $_POST["reg_no"];
        $branch = $_POST["branch"];
        $email = $_POST["email"];
        // Query to update student information
        $sql = "UPDATE students SET name='$name', branch='$branch', email='$email' WHERE reg_no='$reg_no'";
        if (mysqli_query($conn, $sql)) {
            echo "Student information updated successfully!";
        } else {
            echo "Error updating student information: " . mysqli_error($conn);
        }
    }

mysqli_close($conn);
?>

