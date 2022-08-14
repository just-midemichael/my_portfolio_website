
<?php
// Get data from form 
$email= $_POST['email'];
$message= $_POST['tx-msg'];
 
$to = "olumide.m.ojo@gmail.com";
$subject = "This is the subject line";
 
// The following text will be sent
// Email = user entered email
// Message = user entered message
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: hojoholumidey@gmail.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("contact.html");
?>