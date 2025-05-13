<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Passport Automation</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            background: url('a.png') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .form-container {
            width: 300px;
            padding: 20px 25px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
            color: #555;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }

        .switch-form {
            margin-top: 20px;
            font-size: 14px;
        }

        .switch-form a {
            color: #007BFF;
            text-decoration: none;
        }

        .switch-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Login</h2>
            <form action="login.php" method="POST" onsubmit="return validateUsername();">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="loginUsername" name="username" required placeholder="Enter your username">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" required placeholder="Enter your password">
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="error-message" id="loginErrorMessage"></div>
            </form>
            <p class="switch-form">Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>

    <script>
        function validateUsername() {
            var username = document.getElementById("loginUsername").value;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var passportRegex = /^[A-Za-z0-9\-\/\.]+$/;

            if (emailRegex.test(username) || passportRegex.test(username)) {
                return true;
            } else {
                document.getElementById("loginErrorMessage").textContent =
                    "Username must be a valid email or passport number.";
                return false;
            }
        }
    </script>
</body>
</html>
