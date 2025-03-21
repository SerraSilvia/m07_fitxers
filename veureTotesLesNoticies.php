<?php
$db = new SQLite('diariLocal.db');

$resultats = $db -> query("SELECT * FROM noticies ")

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: ". $fila['usu_id'] ." - Nom: ". $fila['usu_nom'] ." - Email: ". $fila['usu_email'] ."<br>";
}



$db -> close();
?>