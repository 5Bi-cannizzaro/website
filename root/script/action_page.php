<html>
<body>
<?php
if(isset($_POST['email'])) {

    $email_to = "hightechifs@gmail.com";
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

<script>
setTimeout(function(){
  window.location = "http://hightech-ifs.000webhostapp.com/HTML/home.html";
}, 2100);
</script>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../CSS/style.css">
  <title>HighTech Informatica</title>
</head>
<div id="root">
  <header>
       <img style="cursor : pointer;" src="../documenti/ifs_LOG_1.png" onclick="window.location.href = 'home.html';">
        <nav>
          <ul id="menu">
            <li class="meunu-item"><a href="home.html">Home</a></li>
            <li class="meunu-item"><a href="catalogo.html">Catalogo</a></li>
            <li class="meunu-item"><a href="chi-siamo.html">Chi Siamo</a></li>
            <li class="meunu-item"><a href="staff.html">Staff</a></li>
            <li class="meunu-item"><a href="contatti.html">Contattaci</a></li>
          </ul>
        </nav>
    </header>
    <main>

    </main>
  </div>
<center>
  <rigth>

  <img src="../documenti/download.jpg" alt="Paris" width="300" height="300">
</rigth>

  <p class = "ff">Ti ringraziamo per aver scelto HighTech, verrai contattato il prima possibile. </p>
</center>


</body>
</html>
