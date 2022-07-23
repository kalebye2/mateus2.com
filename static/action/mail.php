<?php

$ errors = [];

if (!empty($_POST) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if (empty($name) || empty($email) || empty($message)) $errors[] = 'erro';

	if (empty($errors)) {
		$to_mail = 'kalebye2@protonmail.com';
		$headers = [
			'From' => $email,
			'Reply-To' => $email,
			'Content-type' => 'text/html; charset=utf-8'
		];
		$body = $message;

		if (mail($to_mail, $subject, $body, $headers)) {
			echo "nice";
		} else {
			echo "oops";
		}
	}
}


?>
