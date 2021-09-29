<!-- <?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'jiveoh@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name./n"
                    "User Email: $vistor_email./n"/
                        "User Message: $message./n"

    $to = "jiveoh@gmail.com"

    $headers = "From: $email_from /r/n";

    $headers .=  "Reply-To": $visitor_email /r/n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");



?> -->

<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "emailaddress@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
