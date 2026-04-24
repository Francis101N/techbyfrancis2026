<?php
require_once('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect and sanitize input data
    $full_name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email_address']);
    $number = htmlspecialchars($_POST['number']);
    $subject = htmlspecialchars($_POST['subject']);
    $subject_other = isset($_POST['subject_other']) ? htmlspecialchars($_POST['subject_other']) : '';
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $message = htmlspecialchars($_POST['message']);

    // If subject is "Other", use the additional input
    if ($subject === 'Other' && !empty($subject_other)) {
        $subject = $subject_other;
    }

    // Validate required fields
    if (!$full_name || !$email || !$number || !$subject || !$date || !$time || !$message) {
        echo "<script>alert('Please fill in all required fields.'); window.location='index';</script>";
        exit;
    }

    // Prepare email content for admin
    $adminSubject = "New Appointment Request from $full_name .";
    $adminBody = "
        <h2>New Appointment Submission</h2>
        <p><strong>Full Name:</strong> $full_name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $number</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Date:</strong> $date</p>
        <p><strong>Time:</strong> $time</p>
        <p><strong>Message:</strong><br>$message</p>
        <hr>
        <p>This request was submitted via the TechByFrancis portfolio website.</p>
    ";

    // Prepare confirmation email for user
    $applicantSubject = "Your Appointment Request Has Been Received";
    $applicantBody = "
        <h3>Dear $full_name,</h3>
        <p>Thank you for reaching out.</p>
        <p>We have received your appointment request and will respond shortly.</p>
        <p><strong>Appointment Details:</strong></p>
        <ul>
            <li><strong>Subject:</strong> $subject</li>
            <li><strong>Date:</strong> $date</li>
            <li><strong>Time:</strong> $time</li>
            <li><strong>Message:</strong> $message</li>
        </ul>
        <p>Best regards,<br><strong>Francis</strong><br>TechByFrancis Team</p>
    ";

    // Set up PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'mail.techbyfrancis.com';
    $mail->SMTPAuth = true;
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'portfolio@techbyfrancis.com';
    $mail->Password = 'TECHbyfrancis101$$';
    $mail->From = 'portfolio@techbyfrancis.com';
    $mail->FromName = 'TechByFrancis';

    // Send to admin
    $mail->addAddress('francisnwankwo1972@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = $adminSubject;
    $mail->Body = $adminBody;
    $adminSent = $mail->send();

    // Send confirmation to applicant
    $mail->clearAddresses();
    $mail->addAddress($email);
    $mail->Subject = $applicantSubject;
    $mail->Body = $applicantBody;
    $applicantSent = $mail->send();

    // Final response
    if ($adminSent && $applicantSent) {
        echo "<script>alert('Appointment submitted successfully. Confirmation sent to your email.'); window.location='home';</script>";
    } else {
        echo "<script>alert('Sorry, something went wrong while sending emails. Please try again.'); window.history.back();</script>";
    }
}
?>