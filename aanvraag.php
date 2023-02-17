<!DOCTYPE html>
<html>
<head>
	<title>Aanvraagformulier</title>
	<link rel="stylesheet" type="text/css" href="aanvraag.css">
	<script type="text/javascript">
function toggleFields() {
  var postnl = document.getElementById("postnl");
  var ophalen = document.getElementById("ophalen");
  var afgeven = document.getElementById("afgeven");
  var postnlFields = document.getElementById("postnlFields");
  var ophalenFields = document.getElementById("ophalenFields");
  var afgevenFields = document.getElementById("afgevenFields");

  if (postnl.checked) {
    postnlFields.style.display = "block";
    ophalenFields.style.display = "none";
    afgevenFields.style.display = "none";
  } else if (ophalen.checked) {
    postnlFields.style.display = "none";
    ophalenFields.style.display = "block";
    afgevenFields.style.display = "none";
  } else if (afgeven.checked) {
    postnlFields.style.display = "none";
    ophalenFields.style.display = "none";
    afgevenFields.style.display = "block";
  } else {
    postnlFields.style.display = "none";
    ophalenFields.style.display = "none";
    afgevenFields.style.display = "none";
  }
}
	
	</script>
	
</head>
<body>
	
	<h1>Aanvraagformulier</h1>
	<form action="formulier.php" method="post">

		<h2>Videobanden</h2>
		<div class="videobanden">
			<div class="videoband">
				<img src="vhs.png" alt="VHS">
				<label for="vhs">VHS</label>
				<input type="number" id="vhs" name="vhs" min="0" max="500">
			</div>
			<div class="videoband">
				<img src="vhs-c.png" alt="VHS-C">
				<label for="vhs-c">VHS-C</label>
				<input type="number" id="vhs-c" name="vhs-c" min="0" max="500">
			</div>
			<div class="videoband">
				<img src="mini-dv.png" alt="Mini DV">
				<label for="mini-dv">Mini DV</label>
				<input type="number" id="mini-dv" name="mini-dv" min="0" max="500">
			</div>
			<div class="videoband">
				<img src="hi-8.png" alt="Hi-8">
				<label for="hi-8">Hi-8</label>
				<input type="number" id="hi-8" name="hi-8" min="0" max="500">
			</div>
		</div>
		<h2>Media</h2>
		<div class="media">
			<div class="medium">
				<img src="usb-64gb.png" alt="USB stick 64GB">
				<label for="usb-64gb">USB stick 64GB</label>
				<input type="number" id="usb-64gb" name="usb-64gb" min="0" max="10">
			</div>
			<div class="medium">
				<img src="usb-128gb.png" alt="USB stick 128GB">
				<label for="usb-128gb">USB stick 128GB</label>
				<input type="number" id="usb-128gb" name="usb-128gb" min="0" max="10">
        </div>
			<div class="medium">
				<img src="harde-schijf.png" alt="harde-schijf">
				<label for="harde-schijf">Harde schijf</label>
				<input type="number" id="harde schijf" name="harde schijf" min="0" max="10">
			</div>
		</div>
		<h2>Verzendmethode</h2>
		<div class="verzendmethode">
			<input type="radio" id="postnl" name="verzendmethode" value="postnl" onclick="toggleFields()">
			<label for="postnl">PostNL verzending</label><br>
			<input type="radio" id="ophalen" name="verzendmethode" value="ophalen" onclick="toggleFields()">
			<label for="ophalen">Ophaal- en brengservice</label><br>
      <input type="radio" id="afgeven" name="verzendmethode" value="afgeven" onclick="toggleFields()">
			<label for="afgeven">Afgeven in Someren-Heide</label><br>
		</div>
		<div class="postnlFields" id="postnlFields">
			<h2>Uw gegevens</h2>
			<label for="naam">Naam:</label>
			<input type="text" id="naam" name="naam" required><br>
      <label for="telefoonnummer">telefoonnummer:</label>
			<input type="tel" id="telefoonnummer" name="telefoonnummer" required><br>
			<label for="mail">email:</label>
			<input type="email" id="mail" name="mail" required><br>
			<label for="adres">Adres:</label>
			<input type="text" id="adres" name="adres" required><br>
			<label for="postcode">Postcode:</label>
			<input type="text" id="postcode" name="postcode" required><br>
			<label for="woonplaats">Woonplaats:</label>
			<input type="text" id="woonplaats" name="woonplaats" required><br>
		</div>
		<div class="ophalenFields" id="ophalenFields">
			<h2>Adresgegevens</h2>
			<label for="naam">Naam:</label>
			<input type="text" id="naam" name="naam" required><br>
      <label for="telefoonnummer">telefoonnummer:</label>
			<input type="tel" id="telefoonnummer" name="telefoonnummer" required><br>
			<label for="mail">email:</label>
			<input type="email" id="mail" name="mail" required><br>
			<label for="adres">Adres:</label>
			<input type="text" id="adres" name="adres" required><br>
			<label for="postcode">Postcode:</label>
			<input type="text" id="postcode" name="postcode" required><br>
			<label for="woonplaats">Woonplaats:</label>
			<input type="text" id="woonplaats" name="woonplaats" required><br>
      <label for="Datum">Datum:</label>
			<input type="date" id="datum" name="datum" required><br>
      <label for="tijd">tijd:</label>
			<input type="time" id="tijd" name="tijd" required><br>
		</div>
    <div class="afgevenFields" id="afgevenFields">
			<h2>Uw gegevens</h2>
			<label for="naam">Naam:</label>
			<input type="text" id="naam" name="naam" required><br>
			<label for="telefoonnummer">telefoonnummer:</label>
			<input type="tel" id="telefoonnummer" name="telefoonnummer" required><br>
			<label for="mail">email:</label>
			<input type="email" id="mail" name="mail" required><br>
      <label for="Datum">Datum:</label>
			<input type="date" id="datum" name="datum" required><br>
      <label for="tijd">tijd:</label>
			<input type="time" id="tijd" name="tijd" required><br>
			
		</div>
    <input type="submit" value="Verzenden" />
    </form>
