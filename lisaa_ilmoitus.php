<?php

require_once("mysqlConnection.php");
$sql = "INSERT INTO ilmoitukset (pvm, aika, osastoID, tyontekijaID, laatu, selite) 
        VALUES ('" . pvm . "', '" . aika . "', '" . osastoID . "', '" . tyontekijaID . "', '" . mysqli_real_escape_string($conn, $_POST['laatu'] . "', '" . mysqli_real_escape_string($conn, $_POST['selite']) . "')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}
$conn->close();

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
