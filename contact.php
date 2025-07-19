<?php
// Enable error reporting for debugging (REMOVE OR COMMENT OUT IN PRODUCTION!)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Initialize message variables
$form_message = '';
$form_message_type = ''; // 'success' or 'error'

// Initialize input variables to retain values on error
$name = '';
$email = '';
$message = '';

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include your database connection file
    // Ensure 'database/db.php' path is correct relative to this file
    include 'database/db.php'; 

    // Sanitize and validate user inputs
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Basic server-side validation
    if (empty($name) || empty($email) || empty($message)) {
        $form_message = "Please fill in all required fields.";
        $form_message_type = "error";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_message = "Invalid email format.";
        $form_message_type = "error";
    } else {
        // --- SECURE DATABASE INSERTION USING PREPARED STATEMENTS ---
        $sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind parameters (s = string, i = integer, d = double, b = blob)
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $form_message = "Message sent successfully!";
                $form_message_type = "success";
                // Clear form fields on success for better UX
                $name = ''; // Reset name input
                $email = ''; // Reset email input
                $message = ''; // Reset message textarea
            } else {
                $form_message = "Error: " . mysqli_error($conn);
                $form_message_type = "error";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            $form_message = "Database statement preparation failed: " . mysqli_error($conn);
            $form_message_type = "error";
        }
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="contact.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    <div class="container">
        <header class="contact-header">
            <div class="header-content">
                <h1>Contact me</h1>
                <p>Feel free to reach out for any inquiries or feedback.</p>
                <ul class="social-links">
                    <li>
                        <a href="https://github.com/Mushtaq21" class="social-link github">
                            <i class="fab fa-github icon"></i> Follow me on GitHub
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/mushtaq-ahmed-20a2bb239" class="social-link linkedin">
                            <i class="fab fa-linkedin-in icon"></i> Connect with me on LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header-image">
                <img src="Mushtaq.png" alt="Mushtaq Ahmed">
            </div>
        </header>
        <hr class="divider">

        <section class="contact-form-section" id="contact-form-section"> 
            <h3>Send me a message</h3>

            <form class="contact-form" id="contactForm" method="POST" action="contact.php#contact-form-section">
                <div class="form-group">
                    <label for="name">Your name:</label>
                    <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($name ?? ''); ?>">
                </div>

                <div class="form-group full-width">
                    <label for="email">Your email:</label>
                    <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($email ?? ''); ?>">
                </div>

                <div class="form-group message-group">
                    <label for="message">Your message:</label>
                    <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                </div>
                
                <button type="submit" class="send-button">Send Message</button>
            </form>

            <?php 
            // Display the message if set
            if (isset($form_message)):
            ?>
                <div class="message-confirmation <?php echo htmlspecialchars($form_message_type); ?>">
                    <p><?php echo htmlspecialchars($form_message); ?></p>
                </div>
            <?php endif; ?>

        </section>
    </div>
</body>
</html>