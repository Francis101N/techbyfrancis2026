<?php
require_once('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index");
    exit;
}

/*
|--------------------------------------------------------------------------
| Google reCAPTCHA Secret Key
|--------------------------------------------------------------------------
*/
$secretKey = "6Ldv_u4sAAAAADIcQm62A49alo6ezq8uejCJBTNX";

/*
|--------------------------------------------------------------------------
| Honeypot (Add this hidden field to your form)
|--------------------------------------------------------------------------
| <input type="text" name="website" style="display:none;">
*/
if (!empty($_POST['website'])) {
    exit("Spam detected.");
}

/*
|--------------------------------------------------------------------------
| Verify Google reCAPTCHA
|--------------------------------------------------------------------------
*/

if (!isset($_POST['g-recaptcha-response'])) {
    exit("Captcha verification failed.");
}

$response = $_POST['g-recaptcha-response'];

$verify = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$response}"
);

$captcha = json_decode($verify);

if (!$captcha->success) {
    echo "<script>
            alert('Captcha verification failed.');
            window.history.back();
          </script>";
    exit;
}

/*
|--------------------------------------------------------------------------
| Collect Data
|--------------------------------------------------------------------------
*/

$full_name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email_address'] ?? '');
$number = trim($_POST['number'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$subject_other = trim($_POST['subject_other'] ?? '');
$date = trim($_POST['date'] ?? '');
$time = trim($_POST['time'] ?? '');
$message = trim($_POST['message'] ?? '');

/*
|--------------------------------------------------------------------------
| Required Validation
|--------------------------------------------------------------------------
*/

if (
    empty($full_name) ||
    empty($email) ||
    empty($number) ||
    empty($subject) ||
    empty($date) ||
    empty($time) ||
    empty($message)
) {
    echo "<script>
            alert('Please fill all required fields.');
            window.history.back();
          </script>";
    exit;
}

/*
|--------------------------------------------------------------------------
| Full Name Validation
|--------------------------------------------------------------------------
*/

if (!preg_match("/^[a-zA-Z\s.'-]{2,60}$/", $full_name)) {

    echo "<script>
            alert('Please enter a valid full name.');
            window.history.back();
          </script>";
    exit;
}

/*
|--------------------------------------------------------------------------
| Email Validation
|--------------------------------------------------------------------------
*/

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo "<script>
            alert('Invalid email address.');
            window.history.back();
          </script>";
    exit;
}

/*
|--------------------------------------------------------------------------
| Phone Validation
|--------------------------------------------------------------------------
*/

if (!preg_match('/^[0-9+\-\s]{7,20}$/', $number)) {

    echo "<script>
            alert('Invalid phone number.');
            window.history.back();
          </script>";
    exit;
}

/*
|--------------------------------------------------------------------------
| Subject Validation
|--------------------------------------------------------------------------
*/

if ($subject === "Other") {

    if (empty($subject_other)) {

        echo "<script>
                alert('Please specify your subject.');
                window.history.back();
              </script>";
        exit;
    }

    $subject = substr($subject_other, 0, 100);
}

/*
|--------------------------------------------------------------------------
| Length Validation
|--------------------------------------------------------------------------
*/

if (strlen($message) > 3000) {

    echo "<script>
            alert('Message is too long.');
            window.history.back();
          </script>";
    exit;
}

/*
|--------------------------------------------------------------------------
| Escape Output
|--------------------------------------------------------------------------
*/

$full_name_html = htmlspecialchars($full_name, ENT_QUOTES, 'UTF-8');
$email_html = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$number_html = htmlspecialchars($number, ENT_QUOTES, 'UTF-8');
$subject_html = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$date_html = htmlspecialchars($date, ENT_QUOTES, 'UTF-8');
$time_html = htmlspecialchars($time, ENT_QUOTES, 'UTF-8');
$message_html = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

/*
|--------------------------------------------------------------------------
| Email Content
|--------------------------------------------------------------------------
*/

$adminSubject = "New Appointment Request - {$full_name_html}";

$adminBody = "
<h2>New Appointment Request</h2>

<p><strong>Full Name:</strong> {$full_name_html}</p>

<p><strong>Email:</strong> {$email_html}</p>

<p><strong>Phone:</strong> {$number_html}</p>

<p><strong>Subject:</strong> {$subject_html}</p>

<p><strong>Date:</strong> {$date_html}</p>

<p><strong>Time:</strong> {$time_html}</p>

<p><strong>Message:</strong><br>{$message_html}</p>

<hr>

<p>Submitted from TechByFrancis Portfolio.</p>
";

$applicantSubject = "Appointment Request Received";

$applicantBody = "

<h3>Hello {$full_name_html},</h3>

<p>Thank you for booking an appointment.</p>

<p>I have received your request and will get back to you as soon as possible.</p>

<ul>

<li><strong>Subject:</strong> {$subject_html}</li>

<li><strong>Date:</strong> {$date_html}</li>

<li><strong>Time:</strong> {$time_html}</li>

</ul>

<p><strong>Your Message</strong></p>

<p>{$message_html}</p>

<br>

<p>Kind Regards,</p>

<p><strong>Francis</strong></p>

<p>TechByFrancis</p>

";

/*
|--------------------------------------------------------------------------
| Send Mail
|--------------------------------------------------------------------------
*/

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = 'mail.techbyfrancis.com';

$mail->SMTPAuth = true;

$mail->Username = 'portfolio@techbyfrancis.com';

$mail->Password = 'TECHbyfrancis101$$';

$mail->SMTPSecure = 'ssl';

$mail->Port = 465;

$mail->CharSet = 'UTF-8';

$mail->isHTML(true);

$mail->setFrom('portfolio@techbyfrancis.com', 'TechByFrancis');

/*
|--------------------------------------------------------------------------
| Admin Email
|--------------------------------------------------------------------------
*/

$mail->addAddress('francisnwankwo1972@gmail.com');

$mail->Subject = $adminSubject;

$mail->Body = $adminBody;

$adminSent = $mail->send();

/*
|--------------------------------------------------------------------------
| Applicant Email
|--------------------------------------------------------------------------
*/

$mail->clearAddresses();

$mail->Subject = $applicantSubject;

$mail->Body = $applicantBody;

$mail->addAddress($email);

$applicantSent = $mail->send();

/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
*/

if ($adminSent && $applicantSent) {

    echo "<script>

            alert('Appointment booked successfully. Please check your email.');

            window.location='index';

          </script>";
} else {

    echo "<script>

            alert('Unable to send email. Please try again later.');

            window.history.back();

          </script>";
}
