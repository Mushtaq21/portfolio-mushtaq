<?php
session_start(); // Start the session at the very beginning

// Enable error reporting for debugging (REMOVE OR COMMENT OUT IN PRODUCTION!)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize variables for input values and messages
$username_input = '';
$password_input = '';
$login_message = '';
$login_message_type = ''; // 'success' or 'error'

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    $username_input = trim($_POST['username'] ?? '');
    $password_input = trim($_POST['password'] ?? '');

    // Basic validation (e.g., check if fields are empty)
    if (empty($username_input) || empty($password_input)) {
        $login_message = "Please enter both username and password.";
        $login_message_type = "error";
    } else {
        // --- Hardcoded Authentication Logic (FOR DEVELOPMENT/TESTING ONLY - NOT SECURE FOR PRODUCTION!) ---
        $valid_username = "Mushtaq";
        $valid_password = "Mushtaq@2002"; // In a real application, this would be a hashed password

        if ($username_input === $valid_username && $password_input === $valid_password) {
            // Set session variable on successful login
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['username'] = $username_input; // Optionally store username in session

            // Redirect to the dashboard
            header("Location: dashboard.php");
            exit(); // Always call exit() after header redirects
        } else {
            $login_message = "Invalid username or password.";
            $login_message_type = "error";
        }

        // --- End Hardcoded Authentication Logic ---
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
</head>
<body>
    <div class="login-page">
        <div class="background-pattern"></div> <div class="login-container">
            <div class="login-illustration">
                <img src="admin.jpg" alt="admin logo">
                </div>
            <div class="login-form-area">
                <h2 class="login-title">Login as a Admin User</h2>
                <form class="login-form" action="login.php" method="POST">
                    <div class="form-group-login">
                        <div class="input-icon">
                            <input type="text" id="username" name="username" placeholder="Username" required value="<?php echo htmlspecialchars($username_input); ?>">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                    <div class="form-group-login">
                        <div class="input-icon">
                            <input type="password" id="password" name="password" placeholder="Password" required value="<?php echo htmlspecialchars($password_input); ?>">
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <button type="submit" class="login-button">LOGIN</button>
                </form>

                <?php
                // Display the login message if set
                if (!empty($login_message)):
                ?>
                    <p class="login-message <?php echo htmlspecialchars($login_message_type); ?>">
                        <?php echo htmlspecialchars($login_message); ?>
                    </p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</body>
</html> 