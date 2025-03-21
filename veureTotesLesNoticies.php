<?php
echo "hola";

$db = new SQLite('diariLocal.db');

$resultats = $db->query("SELECT * FROM noticies");

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
    echo "dins";
    /*echo "ID: ". $fila['not_id'] .
    " - TITULAR: ". $fila['not_titular'] .
    " - COS: ". $fila['not_cos'] .
    " - DATA: ". $fila['not_data'] .
    " - SECCIO: ". $fila['not_seccio'] .
    "<br>";*/
}


$db -> close();
?>