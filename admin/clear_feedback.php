<?php
include '../database/db.php';
mysqli_query($conn, "DELETE FROM feedback");
header("Location: dashboard.php");
exit;
