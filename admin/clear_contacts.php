<?php
include '../database/db.php';
mysqli_query($conn, "DELETE FROM contact_messages");
header("Location: dashboard.php");
exit;
