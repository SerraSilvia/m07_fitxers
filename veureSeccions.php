<?php

$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT DISTINCT not_seccio FROM noticies");

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
    echo " - Secció: " . $fila['not_seccio']  . "<br>";
}

$db -> close();
?>