<?php
$correct_password = "197200";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $entered_password = $_POST['cv_password'];

    if ($entered_password === $correct_password) {
        // Path to the CV file
        $file = 'FILES/francis cv.docx';

        if (file_exists($file)) {
            // Set headers to force download
            header('Content-Description: File Transfer');
            header('Content-Type: application/docx');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        } else {
           echo "<script>alert('File not found.')</script>";
            include('about.php');
        }
        $correct_password = '';
    } else {
       echo "<script>alert('Incorrect password. Access denied.')</script>";
        include('about.php');
    }
} else {
    echo "<script>alert('Invalid request.')</script>";
    include('about.php');
}
?>
