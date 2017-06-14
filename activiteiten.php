<!DOCTYPE html>
<html>
<head>
		<title>ZaanRun</title>
		<link href="websiteStyle.css" rel="stylesheet" type="text/css" />
</head>

<Marquee>hier vindt u de activiteiten</Marquee>

<body>

<a href="thuispagina.php">thuispagina</a>
<a href="sponsor.php">sponsor</a>
<a href="activiteiten.php">activiteiten</a>
<a href="inschrijfen.php">inschrijfen</a>
<a href="Contact.php">Contact</a>

<hr>

<h1> activiteiten </h1>

<hr> 

<h2>
hier kunt u de activiteiten zien
</h2>

<center><table cellpanding="15" border="4">
    <caption align="bottom"></caption>
<?php
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
    //selecteren en nakijken
    $sql = "SELECT * FROM Activiteit";
    $result = $conn->query($sql);
?>
    //dit is de table
    <tr>
        <strong><th colspan="7">activiteiten</th>
        <th colspan="7">Naam        </th>
        <th colspan="7">locatie     </th>
        <th colspan="7">stadium     </th>
        <th colspan="7">einddatum  </th></strong>
    </tr>
<?php
    //data laten zien
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["ID"] . "<br>";
    }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
    <tr>
        <strong><th colspan="7">Training</th>
        <th colspan="7">Naam        </th>
        <th colspan="7">locatie     </th>
        <th colspan="7">datum     </th></strong>
    </tr>
<?php
    //selecteren en nakijken
    $sql = "SELECT * FROM Training";
    $result = $conn->query($sql);
    //data laten zien
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["ID"] . "<br>";
    }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
</table></center>
</body>
</html>