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
    <div id="login">
        <p>Login</p>
        <div id="login-input">
            <input type="text" name="username" placeholder="Käyttäjänimi">
            <input type="text" name="password" placeholder="Salasana">
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>
