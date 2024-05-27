<?php
ob_start();
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

// Retrieve email and recipient's name from POST data
$email = htmlentities($_POST['email']);
$recipientName = htmlentities($_POST['recipient_name']);

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Set up SMTP
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; 
$mail->Username = "noreply.lalainvoice@gmail.com";
$mail->Password = "kxuhyslxkyiexzvf";

// Add recipient's email and name
$mail->AddAddress("invoicefree.in@gmail.com", $recipientName);

// Set sender's email
$mail->SetFrom($email);
   
// Set email as HTML
$mail->isHTML(true);

// Set email subject and body
$mail->Subject = "Welcome to LaLa Invoice";
$mail->Body = "Dear $recipientName, <br/> I am reaching out concerning invoice. There's confusion. <br/> Your prompt response is greatly appreciated. Thank you.<br/> Best regards<br/> [LaLa Invoice] ";

// Set word wrap
$mail->WordWrap = 50;

// Send email
if(!$mail->Send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
    echo '<script>alert("Your message sent successfully!!")</script>';
}
?>
