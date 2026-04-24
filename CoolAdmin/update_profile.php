<?php
session_start();
require_once 'connect.php';

// Redirect to login page if not logged in
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

$username  = trim(htmlspecialchars($_POST['username']));
$email     = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$password  = trim($_POST['password']);

// Basic field validation
if (empty($username) || empty($email)) {
    $error = "Username, and Email are required.";
    include('profile_update.php');
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Please enter a valid email address.";
    include('profile_update.php');
    exit;
}

// Initialize profile photo variable
$profile_photo = null;

// Handle file upload if a new photo is provided
if (isset($_FILES['profile_photo']) && $_FILES['profile_photo']['error'] === UPLOAD_ERR_OK) {
    $allowed_types = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
    $file_tmp = $_FILES['profile_photo']['tmp_name'];
    $file_type = mime_content_type($file_tmp);

    if (!in_array($file_type, $allowed_types)) {
        $error = "Only JPG, PNG, and WEBP formats are allowed.";
        include('profile_update.php');
        exit;
    }

    $ext = pathinfo($_FILES['profile_photo']['name'], PATHINFO_EXTENSION);
    $new_filename = 'admin_' . time() . '.' . $ext;
    $destination = 'uploads/' . $new_filename;

    if (!move_uploaded_file($file_tmp, $destination)) {
        $error = "Failed to upload the profile photo.";
        include('profile_update.php');
        exit;
    }

    $profile_photo = $new_filename;
}

$admin_id = $_SESSION['admin_user']; 

$sql = "UPDATE admin SET username = ?, email = ?";
$params = [$username, $email];
$types = "ss";

if (!empty($password)) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql .= ", password = ?";
    $params[] = $hashed_password;
    $types .= "s";
}

if ($profile_photo) {
    $sql .= ", profile_photo = ?";
    $params[] = $profile_photo;
    $types .= "s";
}

$sql .= " WHERE username = ?";
$params[] = $admin_id;
$types .= "s";

// Prepare and execute the statement
$stmt = $conn->prepare($sql);
$stmt->bind_param($types, ...$params);

if ($stmt->execute()) {
    echo "<script>alert('Admin profile updated successfully...'); window.location.href='dashboard';</script>";
} else {
    echo "Error updating profile: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
