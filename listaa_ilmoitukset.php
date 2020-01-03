<?php

require_once("mysqlConnection.php");
$sql = "SELECT * FROM ilmoitukset";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row["pvm"]. "</td>
            <td>" . $row["aika"]. "</td>
            <td>" . $row["osastoID"]. "</td>
            <td>" . $row["tyontekijaID"]. "</td>
            <td>" . $row["laatu"]. "</td>
            <td>" . $row["selite"]. "</td>
            <td><a href='poista_ilmoitus.php?id=" . $row["id"]. "'>X</a></td>
        </tr>";
    }
} else {
    //Ei ilmoituksia
}
$conn->close();
?>
