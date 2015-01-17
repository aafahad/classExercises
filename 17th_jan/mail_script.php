<?php
if (isset($_POST['send'])) {
// validate the email address first

    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// process the form only if the email is valid

    if ($email) {
        $to = 'me@example.com'; // where you want to send the mail
        $from = 'webmaster@example.com'; // a valid address on your domain
        $subject = 'Comment form';
        $message = 'From: ' . $_POST['name'] . "\r\n\r\n";
        $message .= 'Comments: ' . $_POST['comments'];
        $headers = "From: $from\r\n Reply-to: $email";
        $sent = mail($to, $subject, $message, $headers);

    if ($sent) {
        $result = 'Your message has been sent.';
    }
}
else
{
    $result = 'Sorry, there was a problem.';
    }
}

?>
