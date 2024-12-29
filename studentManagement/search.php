<!DOCTYPE html>
<html>
<head>
    <title>Student Information Search Results</title>
</head>
<body>
    <h1>Student Information Search Results</h1>

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
        $reg_no = $_POST["reg_no"];

        // Query to search for student by registration number
        $sql = "SELECT * FROM students WHERE reg_no = '$reg_no'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<form method='post' action='update.php'>";
            echo "<table style='border: 2px solid #333;'>";
            echo "<tr>";
            echo "<th style='border: 1px solid #333;'>Name</th>";
            echo "<th style='border: 1px solid #333;'>Register NO</th>";
            echo "<th style='border: 1px solid #333;'>Branch</th>";
            echo "<th style='border: 1px solid #333;'>Email</th>";
            echo "</tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td style='border: 1px solid #333;'><input name='name' value='".$row["name"]."'</td>";
                echo "<td style='border: 1px solid #333;'><input name='reg_no' value='".$row["reg_no"]."'</td>";
                echo "<td style='border: 1px solid #333;'><input name='branch' value='".$row["branch"]."'</td>";
                echo "<td style='border: 1px solid #333;'><input name='email' value='".$row["email"]."'</td>";
                echo "</tr>";
            }

            echo "</table></br>";
            echo "<input type='submit' value='Update'>";
            echo "</form>";
        } else {
            echo "No student found with registration number: $reg_no";
        }
    }

    mysqli_close($conn);
    ?>
</body>
</html>
