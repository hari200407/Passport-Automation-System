<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Support - Passport Automation System</title>
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
    input, textarea {
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
  <h2>Contact Support</h2>
  <form action="sup.php" method="POST">
    <label>User Name</label>
    <input type="text" name="userName" required>

    <label>Email Address</label>
    <input type="email" name="userEmail" required>

    <label>Message</label>
    <textarea name="userMessage" rows="5" required></textarea>

    <button type="submit">Submit</button>
  </form>
</div>

</body>
</html>
