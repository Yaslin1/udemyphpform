<?php
    $error = "";

    $successMessage ="";

    if ($_POST) {
        if(!$_POST["email"]) {
            $error .= "An email address is required<br>";
        }

        if(!$_POST["subject"]) {
            $error .= "The subject field is required.<br>";
        }
            if(!$_POST["content"]) {
                $error .= "The content field is required.<br>";
        }

        if($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email addres is invalid.<br>";
        }

        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><p>There was error(s) in your form:</p>' . $error . '</div>';
        
        } else {
            $emailTo = "yaslin123@.com";
            $subject = $_POST ['subject'];
            $content = $_POST ['content'];
            $hearders = "From: " . $_POST['email'];
            if(mail($mailTo, $subject, $content, $headers)) {
                $successMessage = '<div class= "alert alert-success" role="alert">Yourmessage was sent,' .
                    'we\'ll get back to you ASAP!</div>';
            } else {
                $error = '<div class="alert alert-danger" role="alert">Your message couldn\'t be sent - try again later </div>';
            }

    }
}
        
?>



