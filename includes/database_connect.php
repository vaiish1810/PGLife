<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "pglife";
$conn = mysqli_connect($servername, $username, $password, $db);

if (mysqli_connect_errno()) {
    // Throw error message based on ajax or not
    echo "Failed to connect to MySQL! Please contact the admin.";
    return;
}
