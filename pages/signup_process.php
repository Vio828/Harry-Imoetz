<?php
session_start();

// Connect to database
$conn = new mysqli("localhost", "root", "", "dbkizuna");

// If error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

// Check password confirmation
if ($password !== $confirm) {
    echo "<script>alert('Passwords do not match'); window.history.back();</script>";
    exit();
}

// Hash the password (NEVER store plain text)
$hashed = password_hash($password, PASSWORD_DEFAULT);

// Check if email already exists
$check = $conn->prepare("SELECT * FROM tbusers WHERE email = ?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Email already registered'); window.history.back();</script>";
    exit();
}

// Insert new user
$stmt = $conn->prepare("INSERT INTO tbusers (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashed);
$stmt->execute();

// Set session (log them in)
$_SESSION['user'] = [
    'name' => $name,
    'email' => $email
];

// Redirect to home page
header("Location: logged.php");
exit();
?>