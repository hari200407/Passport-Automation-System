<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['appointment_date'];
    $timeSlot = $_POST['time_slot'];

    // Connect to the database
    $con = new mysqli("localhost", "root", "", "passport");
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Insert appointment
    $stmt = $con->prepare("INSERT INTO schedule (appointment_date, time_slot) VALUES (?, ?)");
    $stmt->bind_param("ss", $date, $timeSlot);

    if ($stmt->execute()) {
        echo "<h2 style='text-align:center;color:green;'>Appointment Scheduled Successfully!</h2>";
        echo "<p style='text-align:center;'>Redirecting to dashboard...</p>";
        echo "<script>
                setTimeout(function() {
                    window.location.href = 'dashboard.php';
                }, 5000);
              </script>";
         echo '<center><a href="dashboard.php"><button>Go to Dashboard</button></a></center>';
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
}
?>
