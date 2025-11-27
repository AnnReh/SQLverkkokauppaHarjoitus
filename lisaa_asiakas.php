<?php 
// Sisällytetään navigointivalikko sivun yläreunaan
include 'navvalikko.php'; 
?> 

<h2>Lisää asiakas</h2>

<!-- Lomake, joka lähettää tiedot sivulle tallenna_asiakas.php -->
<form action="tallenna_asiakas.php" method="POST" style="max-width:400px; margin:20px;">

    <!-- Etunimi-kenttä -->
    <label>Etunimi:</label><br>
    <input type="text" name="etunimi" required><br><br>

    <!-- Sukunimi-kenttä -->
    <label>Sukunimi:</label><br>
    <input type="text" name="sukunimi" required><br><br>

    <!-- Email-kenttä, HTML5 tarkistaa automaattisesti oikean email-muodon -->
    <label>Sähköposti:</label><br>
    <input type="email" name="email" required><br><br>

    <!-- Lähetä-painike, joka käynnistää POST-lähetyksen -->
    <button type="submit">Tallenna asiakas</button>

</form>
<!-- Huom! Testivaiheessa lopullisessa versiossa HTML5 ei vastaa lomakkeen turvallisesta täytöstä-->