<html>
<body>
<?php
if(isset($_POST['email'])) {

    $email_to = "davidecavallo1@hotmail.it";
    $email_subject = "Your email subject line";

    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }






    $firstname = $_POST['firstname']; // required
    $lastname = $_POST['lastname']; // required
    $country = $_POST['country']; // not required
    $subject = $_POST['subject']; // required

    $error_message = "";


    $email_message = "Form details below.\n\n";

    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
    $email_message .= "Country: ".clean_string($country)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";

// create email headers

'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message);
}
?>

<!-- include your own success html here -->

Thank you for contacting us. We will be in touch with you very soon.




</body>
</html>
