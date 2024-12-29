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
	else
	{
	echo "connected succcessfully";
	}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $reg_no = $_POST["reg_no"];
        $branch = $_POST["branch"];
        $email = $_POST["email"];

        $sql = "INSERT INTO students (name, reg_no, branch, email) VALUES ('$name', '$reg_no', '$branch', '$email')";

        if (mysqli_query($conn, $sql)) {
            echo "Student added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
