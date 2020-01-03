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
            <a href="index.html">Login</a>
            <a href="lisaa.html">Lisää ilmoitus</a>
            <a href="ilmoitukset.html">Ilmoitukset</a>
        </nav>
    </header>
    <div id="table">
        <table style="width:90%">
          <tr>
            <th class="left">Pvm</th>
            <th class="center">Tuote</th> 
            <th class="right">Poista</th>
          </tr>
          <tbody>

<?php
include("listaa_oivallus.php");
?>

              </tbody>
        </table>
      </div>
    <footer>
    </footer>
</body>
</html>
