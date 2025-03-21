<?php

$db = new SQLite3('diariLocal.db');

$resultats = $db->query("SELECT count(not_id) FROM noticies WHERE not_data >= '2025-02-02' AND not_data <= '2025-02-29'");
$qNoticies = $resultats->fetchArray(SQLITE3_ASSOC);


echo $qNoticies['count(not_id)'];  


$db->close();

?>
