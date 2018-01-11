<?php
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Create the email and send the message
    $to = 'sales@myfenceguys.com'; // 
        $email_subject = "My Fence Guys Contact Form:  $name";

    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:
    \n\nName: $name
    \n\nEmail: $email_address
    \n\nPhone: $phone
    \n\nAddress: $address
    \n\nMessage:\n$message";
    $headers = "From: noreply@myfenceguys.com\n"; // 
    $headers .= "Reply-To: $email_address"; 
    if(mail($to,$email_subject,$email_body,$headers)) {
        return 'true';
    } else {
        return 'false';
    }
?>