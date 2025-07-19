<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

include '../database/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
</head>

<body>
    <div class="dashboard-container">
        <header class="dashboard-header">
            <h1 class="welcome-title">Welcome, Admin!</h1>
            <a href="logout.php" class="logout-button">Logout</a>
        </header>

        <!-- Contact Messages Section -->
        <section class="dashboard-section">
            <h3 class="section-title">Contact Messages</h3>
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM contact_messages");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>" . (isset($row['ID']) ? $row['ID'] : 'N/A') . "</td>
                                    <td>" . (isset($row['name']) ? $row['name'] : '') . "</td>
                                    <td>" . (isset($row['email']) ? $row['email'] : '') . "</td>
                                    <td>" . (isset($row['message']) ? $row['message'] : '') . "</td>
                                    <td>
                                        <a href='delete_contact.php?id=" . (isset($row['ID']) ? $row['ID'] : '') . "' class='action-link delete-link' onclick='return confirm(\"Delete this message?\")'>Delete</a>
                                    </td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <form action="clear_contacts.php" method="POST" onsubmit="return confirm('Clear all contact messages?')">
                <button type="submit" class="clear-button">Clear All Contacts</button>
            </form>
        </section>

        <!-- Feedback Section -->
        <section class="dashboard-section">
            <h3 class="section-title">Feedbacks</h3>
            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Feedback</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM feedback");
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>" . (isset($row['id']) ? $row['id'] : 'N/A') . "</td>
                                    <td>" . (isset($row['name']) ? $row['name'] : '') . "</td>
                                    <td>" . (isset($row['feedback']) ? $row['feedback'] : '') . "</td>
                                    <td>
                                        <a href='delete_feedback.php?id=" . (isset($row['id']) ? $row['id'] : '') . "' class='action-link delete-link' onclick='return confirm(\"Delete this feedback?\")'>Delete</a>
                                    </td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <form action="clear_feedback.php" method="POST" onsubmit="return confirm('Clear all feedback entries?')">
                <button type="submit" class="clear-button">Clear All Feedback</button>
            </form>
        </section>

    </div>
</body>
</html>
