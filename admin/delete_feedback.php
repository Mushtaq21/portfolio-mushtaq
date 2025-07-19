<?php
include '../database/db.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); // sanitize the input
    $delete = mysqli_query($conn, "DELETE FROM feedback WHERE id = $id");

    if (!$delete) {
        // Optional: show or log the error for debugging
        echo "Error deleting feedback: " . mysqli_error($conn);
        exit;
    }
}

// Redirect back to the dashboard in all cases
header("Location: dashboard.php");
exit;
