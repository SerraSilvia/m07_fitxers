<?php

$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT not_id, not_titular, not_cos, not_data, not_seccio FROM noticies WHERE not_data >='2025-02-02' AND not_data<= '2025-02-29'");

while ($fila = $resultats->fetchArray(SQLITE3_ASSOC)){
    echo "entra";
    echo "ID: ". $fila['not_id'] . "<br>".  
    " - TITULAR: " . $fila['not_titular'] . "<br>" .
    " - COS: " . $fila['not_cos']  . "<br>" .
    " - DATA: " . $fila['not_data']  . "<br>" .
    " - SECCIO: " . $fila['not_seccio']  . "<br>" .
    "<br><br>";
}

$db -> close();
?>                                                                                                                                                                                                                                                 