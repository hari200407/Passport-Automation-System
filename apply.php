<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Apply for Passport</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      padding: 40px;
    }

    .container {
      max-width: 700px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
      color: #003366;
      text-align: center;
      margin-bottom: 30px;
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
      font-size: 16px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .success-message {
      background-color: #28a745;
      color: white;
      padding: 20px;
      text-align: center;
      margin-top: 20px;
      border-radius: 5px;
    }


    /* Corner Button Style */
    #cornerButton {
      position: fixed;
      bottom: 20px;
      right: 20px;
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      display: none; /* Initially hidden */
    }

    #cornerButton:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

<div class="container">
  <h2><i class="fas fa-passport"></i> Apply for Passport</h2>

  <form action="app.php" method="POST">
  <label>Full Name</label>
  <input type="text" name="full_name" required>

  <label>Date of Birth</label>
  <input type="date" name="dob" required>

  <label>Nationality</label>
  <input type="text" name="nationality" required>

  <label>Address</label>
  <input type="text" name="address" required>

  
  <label>Aadhar Number</label>
  <input type="text" name="aadhar_no" id="aadharNo" maxlength="12" required pattern="\d{12}" title="Enter 12-digit Aadhar number">


  <label>Passport Type</label>
  <select name="passport_type" required>
    <option value="">-- Select Type --</option>
    <option>Ordinary</option>
    <option>Diplomatic</option>
    <option>Official</option>
  </select>

  <button type="submit">Submit Application</button>
</form>

  <div class="success-message" id="successMessage" style="display: none;">
    <h3>Application Submitted Successfully!</h3>
    <p>Thank you for applying. You can click the button below to go to the dashboard.</p>
  </div>
</div>

<!-- Corner Button for Dashboard Redirection -->
<button id="cornerButton" onclick="goToDashboard()">Go to Dashboard</button>

<script>
  // Handle form submission
  document.getElementById("passportForm").addEventListener("submit", function(event) {
    event.preventDefault();  // Prevent the form from submitting traditionally
    
    // Collect form data
    var fullName = document.getElementById("fullName").value;
    var dob = document.getElementById("dob").value;
    var nationality = document.getElementById("nationality").value;
    var address = document.getElementById("address").value;
    var passportType = document.getElementById("passportType").value;

    // Simple form validation (although required is already in HTML)
    if (!fullName || !dob || !nationality || !address || !passportType) {
      alert("Please fill out all fields.");
      return;
    }

    // Hide form and show success message
    document.querySelector("form").style.display = "none";
    document.getElementById("successMessage").style.display = "block";
    
    // Show the corner button after 1 second
    setTimeout(function() {
      document.getElementById("cornerButton").style.display = "block";
    }, 1000);  // Delay before showing the button
  });

  // Redirect to dashboard page when the corner button is clicked
  function goToDashboard() {
    window.location.href = "dashboard.html"; // Redirect to the dashboard page
  }
</script>

</body>
</html>
