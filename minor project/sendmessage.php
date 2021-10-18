<?php


$fname = $_POST['fname'];
$email = $_POST['email'];
$message=$_POST['message'];

$subject = "FeedBack";

if (strlen($fname) > 50) {
    echo 'fname_long';

} elseif (strlen($fname) < 2) {
    echo 'fname_short';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_short';

} else {
	
	 //MAILER

    require 'PHPMailer-s/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->isSMTP();
    
    $mail->Debugoutput = 'html';

    $mail->Host = "smtp.gmail.com";

    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';    
    $mail->Username = "xxxx@gmail.com";
    $mail->Password = "xxxxxx";

    $mail->setFrom($email,$fname);

    $mail->addReplyTo($email,$fname);
    $mail->addAddress('xxxxx@gmail.com', 'xxxxxxx');
    $mail->Subject = "FeedBack";
    $mail->Body = $message;
    $mail->AltBody = 'FeedBack From users';


    if (!$mail->send()) {
        echo "false";
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }


}
?>