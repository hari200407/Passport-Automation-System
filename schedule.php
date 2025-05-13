<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Schedule Appointment</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      padding: 40px;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #003366;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      color: #333;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      margin-top: 25px;
      background-color: #007bff;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      width: 100%;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Schedule Appointment</h2>

  <form action="sche.php" method="POST">
    <label>Select Date</label>
    <input type="date" name="appointment_date" required>

    <label>Select Time Slot</label>
    <select name="time_slot" required>
      <option value="">-- Select Time --</option>
      <option>10:00 AM - 11:00 AM</option>
      <option>11:00 AM - 12:00 PM</option>
      <option>02:00 PM - 03:00 PM</option>
      <option>03:00 PM - 04:00 PM</option>
    </select>

    <button type="submit">Confirm Appointment</button>
  </form>
</div>

</body>
</html>
