<?php
require_once("mysqlConnection.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta lang="en" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <title>Riskiseuranta</title>
    </head>
<body>
    <header>
        <div class="logo">
            <h1>Riskiseuranta</h1>
        </div>
        <nav>
            <a href="index.php">Login</a>
            <a href="lisaa.php">Lisää ilmoitus</a>
            <a href="ilmoitukset.php">Ilmoitukset</a>
        </nav>
    </header>
    <div id="input-window">
         <form action="lisaa_ilmoitus.php" method="post">
            <input type="date" name="pvm">
            <input type="time" name="aika">
            <input type="number" name="osastoID" placeholder="osastoID">
            <input type="number" name="tyontekijaID" placeholder="työntekijäID">
            <select name="laatu">
                <option value="" disabled selected hidden>Valitse riskin laatu</option>
                <option value="minor">Lievä</option>
                <option value="serious">Vakava</option>
                <option value="very serious">Erittäin vakava</option>
            </select>
            <input type="text" name="selite" placeholder="Selitä tilanne tähän lyhyesti (max 150 kirjainta)" maxlength="150">
            <input type="submit" value="Lähetä">
        </form>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
