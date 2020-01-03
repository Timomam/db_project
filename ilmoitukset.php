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
    <div id="table">
        <table style="width:90%">
          <tr>
            <th class="column1">id</th>
            <th class="column2">aika</th> 
            <th class="column3">osastoID</th>
            <th class="column4">tyontekijaID</th>
            <th class="column5">laatu</th>
            <th class="column6">selite</th>
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
