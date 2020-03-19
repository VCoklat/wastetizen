<?php
/**
  Template Name: send mail contact
 * The template for displaying all pages
 */
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: no-reply@wastetizen.com" . "\r\n" .
"Reply-To: no-reply@wastetizen.com" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

$to = 'info@wastetizen.com';
$subject = 'Contact US';
$message = '';
$message = '<label>Contact Detail</label>';
$message .= '<div style="width:100%;margin:0 auto;">';
$message .= '<label style="float:left;width:100%;font-weight:bold;">Name : '.$_REQUEST['name'].'</label><br>';
$message .= '<label style="float:left;width:100%;font-weight:bold;">Email : '.$_REQUEST['email'].' </label><br>';
$message .= '<label style="float:left;width:100%;font-weight:bold;">Subject : '.$_REQUEST['subject'].' </label><br>';
$message .= '<label style="float:left;width:100%;font-weight:bold;">Phone : '.$_REQUEST['tel'].' </label><br>';
$message .= '<label style="float:left;width:100%;font-weight:bold;">Message : '.$_REQUEST['message'].' </label><br>';
$message .= '</div>';
$message = wordwrap($message, 70);
echo mail($to, $subject, $message, $headers);

?>