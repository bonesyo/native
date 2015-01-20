<?php

    $name = $_POST['name'];
    $email = strtolower($_POST['email']);
    $message = $_POST['message'];

    $header = "From: ". $name . " <" . $email . ">\r\n";
    $subject = 'Native Roots - Form Submission';

    mail('info@nativeroots303.com', $subject, $message, $header);
