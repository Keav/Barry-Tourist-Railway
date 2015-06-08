<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//gather variables from contactform
    $cf_first_name = htmlentities($_POST['cf_first_name']);
    $cf_last_name = htmlentities($_POST['cf_last_name']);
    $cf_email = htmlentities($_POST['cf_email']);
    $cf_phone = htmlentities($_POST['cf_phone']);
    $cf_comments = htmlentities($_POST['cf_comments']);

    $check = 1;

//check content
    if (strlen($cf_first_name) < 1) {
        $check = 0;
        $cf_first_name_error = "Please enter a first name";
    }
    if (strlen($cf_last_name) < 1) {
        $check = 0;
        $cf_last_name_error = "Please enter a surname";
    }
    if (strlen($cf_email) < 1) {
        $check = 0;
        $cf_email_error = "Please enter an email address";
    } else if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $cf_email)) {
        //also check for .mobi
        if (substr($cf_email, -4) != "mobi") {
            $check = -1;
            $cf_email_error = "Please enter a valid email address";
        }
    }
    if (strlen($cf_phone) < 1) {
        $check = 0;
        $cf_phone_error = "Please enter a phone number";
    }
    if (strlen($cf_comments) < 1) {
        $check = 0;
        $cf_comments_error = "Please enter a message";
    }

    if ($check == 1) {

        //send  email
        $ToEmail = "enquiries@barrytouristrailway.co.uk";
        $EmailSubject = "Barry Tourist Railway - Contact Form Enquiry";
        $mailheader = "From: $cf_email\n";
        $mailheader .= "Reply-To: $cf_email \n";
        $message .= "A visitor to your website has posted a contact form - these are the details they entered:\n\n";
        $message .= "Name:\n $cf_first_name\n\n";
        $message .= "Email:\n $cf_email\n\n";
        $message .= "Phone:\n $cf_phone\n\n";
        $message .= "Query:\n $cf_comments\n\n";
        $message .= "Contact Form powered by blue stag studio ltd";

        mail("contact-forms@bluestagstudio.co.uk", $EmailSubject, $message, $mailheader);
        if (mail($ToEmail, $EmailSubject, $message, $mailheader) or die("Failure")) {
            header('location:contact-success.php');
        }
    }
}
?>