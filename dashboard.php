<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard | Passport Automation System</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f6f8;
    background-image: url("a.png");
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
    header {
      background-color: #003366;
      color: white;
      padding: 20px;
      text-align: center;
    }

    h1 {
      font-size: 28px;
    }

    .container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 40px;
      max-width: 1200px;
      margin: auto;
    }

    .card {
      background: white;
      border-radius: 12px;
      padding: 30px 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card i {
      font-size: 40px;
      color: #007bff;
      margin-bottom: 15px;
    }

    .card h3 {
      margin-bottom: 10px;
      color: #003366;
    }

    .card p {
      margin-bottom: 20px;
      color: #555;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 500;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    footer {
      text-align: center;
      padding: 15px;
      background-color: #003366;
      color: white;
      margin-top: 40px;
    }
  </style>
</head>
<body>

<header>
  <h1>Welcome to Passport Automation System</h1>
</header>

<div class="container">
  <!-- Card 1 -->
  <div class="card">
    <i class="fas fa-passport"></i>
    <h3>Apply for Passport</h3>
    <p>Start your passport application here.</p>
    <a href="apply.php" class="btn">Apply Now</a>
  </div>

  <!-- Card 2 -->
  <div class="card">
    <i class="fas fa-search"></i>
    <h3>Application Status</h3>
    <p>Track your passport application status.</p>
    <a href="status.php" class="btn">Check Status</a>
  </div>

  <!-- Card 3 -->
  <div class="card">
    <i class="fas fa-calendar-alt"></i>
    <h3>Appointment Schedule</h3>
    <p>Book an appointment at the passport office.</p>
    <a href="schedule.php" class="btn">Schedule</a>
  </div>

  <!-- Card 4 -->
  <div class="card">
    <i class="fas fa-headset"></i>
    <h3>Support</h3>
    <p>Need help? Contact our support team.</p>
    <a href="support.php" class="btn">Get Support</a>
  </div>
</div>

<footer>
  &copy; 2025 Passport Automation System. All rights reserved.
</footer>

<script>
  // Optional: Simple greeting log
  console.log("Dashboard ready. All links active.");
</script>

</body>
</html>