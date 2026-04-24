<?php
session_start();
require('connect.php');

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if (empty($username) || empty($password)) {
    $error = 'All inputs are required';
    include('index.php');
    exit;
}

$stmt = $conn->prepare("SELECT email, username, password FROM admin WHERE email = ? OR username = ?");
$stmt->bind_param("ss", $username, $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['admin_user'] = $row['username'];
        $_SESSION['admin_email'] = $row['email'];

         $adminQuery = $conn->query("SELECT email FROM admin");
            while ($adminRow = $adminQuery->fetch_assoc()) {
                require_once('PHPMailer/PHPMailerAutoload.php');
                
                $adminMail = new PHPMailer();
                $adminMail->IsSMTP();
                $adminMail->Host = 'mail.cliprivateac.com';
                $adminMail->SMTPAuth = true;
                $adminMail->Port = 587;
                $adminMail->SMTPSecure = 'tls';
                $adminMail->Username = 'officenotification@cliprivateac.com';
                $adminMail->Password = 'au7r%p0D#+2D';
                $adminMail->From = 'officenotification@cliprivateac.com';
                $adminMail->FromName = 'TechByFrancis';
                $adminMail->AddAddress($adminRow['email']);
                $adminMail->IsHTML(true);
                $adminMail->Subject = 'Admin Panel Access Alert';
                $adminMail->Body = '<p>Hello <strong>Admin</strong>,</p>
    <p>This is to notify you that your admin account was just accessed on the <strong>techbyfrancis</strong> website.</p>
    <p><strong>Access Time:</strong> ' . date("l, F j, Y - g:i A") . '</p>
    <p>If this was you, no action is needed. However, if you did not initiate this login, please secure your account immediately by changing your password or contacting support.</p>
    <br>
    <p>Best regards,<br><strong>techbyfrancis Security Team</strong></p>';
                $adminMail->Send();
                 header("Location: dashboard");
                 exit;
            }
    } else {
        $error = 'Wrong login information'; 
        include('index.php');
        exit;
    }
} else {
    $error = 'No User Found'; 
    include('index.php');
    exit;
}
?>