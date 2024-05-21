<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Send email to website owner
    $to = 'lovediamondsnz@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = 'From: ' . $email;
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for contacting us! We will get back to you soon.';
    } else {
        echo 'There was an error submitting your message. Please try again later.';
    }
?>