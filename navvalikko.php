<!-- Yksinkertainen ja selkeä navigaatiopalkki -->
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .navbar {
        background-color: #333;
        padding: 10px 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: white;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        margin: 0 5px;
        border-radius: 5px;
        transition: background-color 0.2s ease-in-out;
    }

    .navbar a:hover {
        background-color: #555;
    }

    .nav-links {
        display: flex;
        gap: 10px;
    }
</style>

<div class="navbar">
    <div class="logo">
        <strong>Tietokanta harjoitus</strong>
    </div>

    <div class="nav-links">
        <a href="index.php">Etusivu</a>
        <a href="lisaa_tuote.php">Lisää tuote</a>
        <a href="tuotteet.php">Tuotteet</a>
        <a href="lisaa_asiakas.php">Lisää asiakas</a>
        <a href="asiakkaat.php">Asiakkaat</a>
    </div>
</div>
