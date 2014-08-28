<html>
<body>
<?php
function spamcheck($field) {
  // Sanitize e-mail address
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}
?>
<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
<?php
// display form if user has not clicked submit
if (!isset($_POST["submit"])) {
  ?>
  <div class="title">FALE CONOSCO<br></div>
  <div class="formulario">
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
  <input type="text" name="from" placeholder="Digite seu email"><br>
  <input type="text" name="subject" placeholder="Assunto"><br>
  <textarea rows="10" cols="40" name="message" placeholder="Mensagem"></textarea><br>
  <input type="submit" name="submit" value="Submit Feedback">
  </form>
  </div>
  <?php 
} else {  // the user has submitted the form
  // Check if the "from" input field is filled out
  if (isset($_POST["from"])) {
    // Check if "from" email address is valid
    $mailcheck = spamcheck($_POST["from"]);
    if ($mailcheck==FALSE) {
      echo "Invalid input";
    } else {
      $from = $_POST["from"]; // sender
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      // message lines should not exceed 70 characters (PHP rule), so wrap it
      $message = wordwrap($message, 70);
      // send mail
      mail("contato@xvsenq.com",$subject,$message,"From: $from\n");
      echo '<a class="text">Mensagem enviada.</a>';
    }
  }
}
?>
</body>
</html>