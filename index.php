<?php

if ( ! isset( $_POST['name'] ) ||
		! isset( $_POST['email'] ) ||
		! isset( $_POST['subject'] ) ||
		! isset( $_POST['message'] ) ) {
	echo '0';
	die();
}

$name = $_POST['name'];
$email = $_POST['email'];

if ( ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
	echo '0';
	die();
}

$subject = $_POST['subject'];
$message = $_POST['message'];

$success = mail( 'desiradaniel2007@gmail.com', $subject, $message, 'From: ' . $name . '<' .  $email . '>' );

if ( $success ) {
	echo '1';
} else {
	echo '0';
}