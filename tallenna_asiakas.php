<?php
// Tuodaan tietokantayhteys tiedostosta tietokanta.php
include 'tietokanta.php';

// Otetaan lomakkeen kautta tulleet tiedot
// $_POST hakee lomakkeen kenttien arvot
$etunimi = $_POST['etunimi'];
$sukunimi = $_POST['sukunimi'];
$email   = $_POST['email'];

// SQL-lauseke, joka lisää asiakkaan tietokantaan
// HUOM: Turvallisuuteen palaan myöhemmin. Tällä hetkellä tärkeintä että yhteys tietokantaan toimiin
$sql = "INSERT INTO asiakkaat (etunimi, sukunimi, email)
        VALUES ('$etunimi', '$sukunimi', '$email')";

// Suoritetaan SQL-lauseke
if ($yhdista->query($sql) === TRUE) {

    // Jos tallennus onnistui, näytetään viesti ja linkit takaisin sivuille
    echo "Asiakas lisätty onnistuneesti!<br>";

    // Linkki uuteen lomakkeeseen
    echo "<a href='lisaa_asiakas.php'>Lisää uusi asiakas</a><br>";

    // Linkki asiakaslistaan
    echo "<a href='asiakkaat.php'>Siirry asiakaslistaan</a>";

} else {
    // Jos tallennus epäonnistuu, näytetään virheviesti
    echo "Virhe tallennuksessa: " . $yhdista->error;
}
?>
