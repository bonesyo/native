<?php

    $name = $_POST['name'];
    $email = strtolower($_POST['email']);
    $message = $_POST['message'];

    $header = "From: ". $name . " <" . $email . ">\r\n";
    $subject = 'Native Roots - Submission Form';

    mail('nparsons08@gmail.com', $subject, $message, $header);
