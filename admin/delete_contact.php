<?php
include '../database/db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // sanitize input
    $delete = mysqli_query($conn, "DELETE FROM contact_messages WHERE id = $id");

    if (!$delete) {
        // Optional: log error or display debug info in development
        echo "Error deleting record: " . mysqli_error($conn);
        exit;
    }
}

// Redirect to dashboard in all cases
header("Location: dashboard.php");
exit;
