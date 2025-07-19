<?php
// Enable error reporting for debugging (REMOVE OR COMMENT OUT IN PRODUCTION!)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include your database connection file FIRST, so $conn is always available
// Ensure 'database/db.php' path is correct relative to this file (portfolio/feedback.php -> portfolio/database/db.php)
include 'database/db.php';

// Check if $conn was successfully created (from db.php)
// If db.php has a 'die' statement, this might be redundant, but it's good for clarity.
if (!isset($conn) || !$conn) {
    // Ideally, you'd log this error and show a user-friendly message
    die("Database connection failed. Please check your db.php file.");
}

// Initialize input variables to retain values on error
$name = '';
$feedback = '';

// Initialize message variables
$feedback_message = '';
$feedback_message_type = ''; // 'success' or 'error'

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user inputs
    // Using htmlspecialchars for output safety, trim for whitespace
    $name = trim(htmlspecialchars($_POST['name'] ?? ''));
    $feedback = trim(htmlspecialchars($_POST['feedback'] ?? ''));

    // Basic server-side validation
    if (empty($name) || empty($feedback)) {
        $feedback_message = "Please fill in all required fields.";
        $feedback_message_type = "error";
    } else {
        // --- SECURE DATABASE INSERTION USING PREPARED STATEMENTS ---
        // Using 'feedback' column name as per your existing database table structure
        // Assuming your 'feedback' table has 'id', 'name', 'feedback', 'created_at' columns.
        // The 'created_at' column (TIMESTAMP) will likely auto-populate if set up with CURRENT_TIMESTAMP in DB.
        $sql = "INSERT INTO feedback (name, feedback) VALUES (?, ?)";

        // Prepare the statement
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind parameters (s = string) - only name and feedback now
            mysqli_stmt_bind_param($stmt, "ss", $name, $feedback);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $feedback_message = "Thank you for your feedback!";
                $feedback_message_type = "success";
                // Clear form fields on success for better UX
                $name = '';
                $feedback = '';
            } else {
                // If there's an error during execution, it will be caught here
                $feedback_message = "Error submitting feedback: " . mysqli_stmt_error($stmt); // Use mysqli_stmt_error for prepared statements
                $feedback_message_type = "error";
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            // This block catches errors in the mysqli_prepare function itself
            $feedback_message = "Database statement preparation failed: " . mysqli_error($conn);
            $feedback_message_type = "error";
        }
    }
}

// Close the database connection if it was opened
if (isset($conn) && $conn) {
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="feedback.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="feedback-container">
        <h2 class="feedback-title">Feedback Form</h2>
        <form method="POST" action="feedback.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($name); ?>">
            </div>

            <div class="form-group">
                <label for="feedback">Your Feedback:</label>
                <textarea id="feedback" name="feedback" rows="5" required><?php echo htmlspecialchars($feedback); ?></textarea>
            </div>
            <button type="submit" name="submit" class="submit-button">Submit Feedback</button>
        </form>

        <?php
        // Display the feedback message if set
        if (!empty($feedback_message)): // Use !empty() instead of isset() for messages
        ?>
            <p class="feedback-message <?php echo htmlspecialchars($feedback_message_type); ?>">
                <?php echo htmlspecialchars($feedback_message); ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>