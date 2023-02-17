
<?php

if (isset($_POST['submit'])) {
  
  $naam = $_POST['naam'];
  $email = $_POST['email'];
  $bericht = $_POST['bericht'];

  if (empty($naam) || empty($email) || empty($bericht)) {
    echo "Alle velden zijn verplicht.";
  } else {
    $mailTo = "contact@analoogvideonaardigitaal.nl";
    $subject = "Nieuw bericht van " . $naam;
    $message = "Naam: " . $naam . "\nEmail: " . $email . "\nBericht: " . $bericht;
    mail($to, $subject, $message);
    echo "Bedankt voor uw bericht!";
  }
}
?>