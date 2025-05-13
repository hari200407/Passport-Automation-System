<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Passport Automation</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Create a New Account</h2>
            <form action="reg.php" method="POST" id="registerForm">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="registerUsername" name="username" required placeholder="Enter a username">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="registerEmail" name="email" required placeholder="Enter your email">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="registerPassword" name="password" required placeholder="Create a password">
                </div>
                <div class="input-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="Confirm your password">
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="error-message" id="registerErrorMessage"></div>
            </form>
            <p class="switch-form">Already have an account? <a href="login.html">Login here</a></p>
        </div>
    </div>
</body>
</html>
