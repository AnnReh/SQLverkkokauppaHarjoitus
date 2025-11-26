<?php
//Tiedosto yhdistää PHP sovellukseen MySQL-tietokantaan (XAMPPia käyttäen)
$serverinimi = "localhost";
$kayttajanimi = "root";
$salasana = ""; 
$tietokanta = "sqlkertausharjoitus"; // korvaa omalla tietokantasi nimellä

$yhdista = new mysqli($serverinimi, $kayttajanimi, $salasana, $tietokanta);

if ($yhdista->connect_error) {
    die("Yhteys epäonnistui: " . $yhdista->connect_error);
}
?>