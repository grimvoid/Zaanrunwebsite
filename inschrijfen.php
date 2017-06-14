<!DOCTYPE html>
<html>
<head>
		<title>ZaanRun</title>
		<link href="websiteStyle.css" rel="stylesheet" type="text/css" />
</head>
<Marquee>hier kunt u inschrijfen</Marquee>
<body>
<a href="thuispagina.php">thuispagina</a>
<a href="sponsor.php">sponsor</a>
<a href="activiteiten.php">activiteiten</a>
<a href="inschrijfen.php">inschrijfen</a>
<a href="Contact.php">Contact</a>
<hr>
<h1> Inschrijfen </h1>
<hr> 
<form method="post" action="10078708@edu.regiocollege.nl">
		<table>
			<tr>
					<td>	<strong>	Persoons gegevens:	</strong>	</td>
			</tr>
			<tr>
					<td>	Naam:	</td>
					<td>	<input type="text" name="Naam" required>		</td>
			</tr>
            <tr>
					<td>	Tussenvoegsel:	</td>
					<td>	<input type="text" name="Tussenvoegsel" required>		</td>
			</tr>
            <tr>
					<td>	Achteraam:	</td>
					<td>	<input type="text" name="Achteraam" required>		</td>
			</tr>
			<tr>
					<td>	Adress:		</td>
					<td>	<input type="text" name="Adress" required>	</td>
			</tr>
			<tr>
					<td>	Geboortedatum:	</td>
					<td>	<input type="text" name="Woonplaats" required>	</td>
			</tr>
           //deze moet je nog even toevoegen aan je database
            <tr>
					<td>	E-mailadres:	</td>
					<td>	<input type="email" name="E-mailadres" required>	</td>
			</tr>
            <tr>
					<td>	Groep:	</td>
					<td>	<input type="text" name="Groep">	</td>
			</tr>
			<tr>
			        <td colspan = "2">	<hr>	</td>
			</tr>
			<tr>
					<td>	<strong>	<em>	Heeft u nog vragen?	</em>	</strong>	</td>
			</tr>
			<tr>
                <td>	<textarea name="opmerkingen" cols="40" rows="10"></textarea>	<INPUT type="Reset"></INPUT> <INPUT type="Submit"></INPUT></td>
			</tr>
		</table>
</form>
<?php
    //formulier gegevens
    $Naam = $_POST["Naam"];
    $Tussenvoegsel = $_POST["Tussenvoegsel"];
    $Achteraam = $_POST["Achteraam"];
    $Adress = $_POST["Adress"];
    $Geboortedatum = $_POST["Geboortedatum"];
    $Mail = $_POST["E-mailadres"];
    $Groep = $_POST["Groep"];
    //database inloggegevens 
    $servername = "localhost";
    $username = "username";
    $password = "password";
    //                                  dit moet je even zelf invullen
    $dbname = "???";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "INSERT INTO Loper
    VALUES ($Naam.$Achteraam.$Tussenvoegsel.$Adress.$Geboortedatum.$Mail.$Groep)";
?>
<br>
<img src="sneeuw.jpg" alt="sneeuw" width="230" height="240">
</body>
</html>