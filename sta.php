<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aadhar_no = trim($_POST['aadhar_no']); // whitespace remove

    // DB connection
    $con = new mysqli("localhost", "root", "", "passport");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare statement
    $stmt = $con->prepare("SELECT * FROM user WHERE aadhar_no = ?");
    $stmt->bind_param("s", $aadhar_no);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if found
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h2>Application Found</h2>";
        echo "<p><strong>Name:</strong> " . $row['full_name'] . "</p>";
        echo "<p><strong>DOB:</strong> " . $row['dob'] . "</p>";
        echo "<p><strong>Nationality:</strong> " . $row['nationality'] . "</p>";
        echo "<p><strong>Address:</strong> " . $row['address'] . "</p>";
        echo "<p><strong>Passport Type:</strong> " . $row['passport_type'] . "</p>";
        echo "<p><strong>Status:</strong> In Process</p>";
        echo '<a href="dashboard.php"><button>Go to Dashboard</button></a>';
    } else {
        echo "<h3 style='color:red;'>Invalid Aadhar Number</h3>";
        echo "<p>No application found with this Aadhar number.</p>";
        
    }

    $stmt->close();
    $con->close();
}
?>
