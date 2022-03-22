<?php


$db = new mysqli("localhost", "root", "", "med");

$q = $db->prepare("SELECT * FROM staff");


if($q->execute()) {
    // wykona jeśli kwerenda jest poprawnie przetworzona przez serwer
    $result = $q->get_result();
    while($row = $result->fetch_assoc()) {
        $firstname = $row['FirstName'];
        $lastname = $row['Lastname'];
        echo "Lekarz $firstname $lastname<br>";
    }
} else {
    echo "Błąd podczas wyszukiwania w bazie danych";   
}


?>