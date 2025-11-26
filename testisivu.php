<?php
//Tuo tietokantayhteyden (+ luo muuttujan $yhdista)
include 'tietokanta.php';

//SQL lause jolla haetaan kaikki rivit asiakkaat-taulusta
$sql = "SELECT * FROM asiakkaat";
//Suorittaa SQL-kyselyn
$tulos = $yhdista->query($sql);

//Tarkistaa löytyykö rivejä
if ($tulos->num_rows > 0) {
    //Käy läpi rivit yksi kerrallaan
    while($row = $tulos->fetch_assoc()) {
        //tulostaa rivin tiedot
        echo "ID: " . $row["as_id"] . " - " . $row["etunimi"] . "<br>";
    }
} else {
    //Palauttaa tiedon mikäli taulu on tyhjä
    echo "Ei tuloksia.";
}
?>
