<?php 

//Define constants
define("RECIPIENT_NAME", "Tatiana Kerick");
define("RECIPIENT_EMAIL", "KerickTatiana@gmail.com");
define("Email_Subject", "Visitor Message");

//Read form values
$success = false;
$senderNAme = isset( $_POST['senderName'] ) ? preg_replace( "/[^\.\-\' a-zA-Z0-9]/", "", $_POST['senderName'] ) : "";
$senderEmail = isset( $_POST['senderEmail'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['senderEmail'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";


//If all values exist, send the email
if( $senderName && $senderEmail && $message ) {
	$recipient = RECIPIENT_EMAIL . " <" . RECIPIENT_EMAIL . ">";
	$headers = "From: " . $senderName . " <" . $senderEmail . ">";
	$success = mail( $recipient, Email_Subject, $message, $headers );
}


//Return an appropriate response to the browser
// if( isset($_GET["ajax"]) ) {
// 	echo $success ? "success" : "error";
// } else {
	
// }

?>