<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['text'];

//send email
    mail("lisa.wolfson.myers@gmail.com", "Portfolio Site Contact Form from" .$email, $message);
}
?>


<!-- 
<?php

/* These are the variable that tell the subject of the email and where the email will be sent.*/

// $emailSubject = 'Contact Form from www.lisawolfsonmyers.com';
// $mailto = 'lisawolfsonmyers@gmail.com';

/* These will gather what the user has typed into the fieled. */

// $nameField = $_POST['name'];
// $emailField = $_POST['email'];
// $messageField = $_POST['message'];

/* This takes the information and lines it up the way you want it to be sent in the email. */

// $body = <<<EOD
// <br><hr><br>
// Name: $name <br>
// Email: $email <br>
// Message: $message <br>
// EOD;

// $headers = "From: $email\r\n"; // This takes the email and displays it as who this email is from.
// $headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
// $success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.

 ?> -->
