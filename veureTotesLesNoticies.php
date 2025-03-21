<?php

$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT * FROM noticies");

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
    echo "ID: ". $fila['not_id'] . "<br>".  
    " - TITULAR: " . $fila['not_titular'] . "<br>" .
    " - COS: " . $fila['not_cos']  . "<br>" .
    " - DATA: " . $fila['not_data']  . "<br>" .
    " - SECCIO: " . $fila['not_seccio']  . "<br>" .
    "<br><br>";
}


$db -> close();
?>