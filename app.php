<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['full_name'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $passportType = $_POST['passport_type'];
    $aadhar_no = $_POST['aadhar_no'];

    // Connect to the database
    $con = new mysqli("localhost", "root", "", "passport");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Insert into 'user' table
    $stmt = $con->prepare("INSERT INTO user (full_name, dob, nationality, address, passport_type, aadhar_no) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $fullName, $dob, $nationality, $address, $passportType, $aadhar_no);

    if ($stmt->execute()) {
        echo "<h2>Application Submitted Successfully!</h2>";
        echo '<a href="dashboard.php"><button>Go to Dashboard</button></a>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
