<?php
require_once "../config/db.php";

$username = "admin";
$plainPassword = "admin123";
$fullName = "System Administrator";
$email = "admin@school.edu";

$check = $conn->prepare("SELECT user_id FROM users WHERE username = ? OR email = ? LIMIT 1");
$check->bind_param("ss", $username, $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    die("An account with this username or email already exists.");
}

$hash = password_hash($plainPassword, PASSWORD_DEFAULT);
$role = "admin";

$stmt = $conn->prepare(
    "INSERT INTO users (username, password, full_name, email, role)
     VALUES (?, ?, ?, ?, ?)"
);
$stmt->bind_param("sssss", $username, $hash, $fullName, $email, $role);

if ($stmt->execute()) {
    echo "<h2>Admin account created.</h2>";
    echo "<p>Username: <strong>admin</strong></p>";
    echo "<p>Password: <strong>admin123</strong></p>";
    echo "<p>Delete <strong>create_admin.php</strong> immediately after this.</p>";
} else {
    echo "Error: " . e($stmt->error);
}
?>
