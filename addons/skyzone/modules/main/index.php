<?php
if (!defined('FLUX_ROOT')) exit;
error_reporting(0);

//ONLINE
$sql = "SELECT COUNT(char_id) AS players_online FROM {$server->charMapDatabase}.char WHERE `online` > '0'";
$stmt = $server->connection->getStatement($sql);
$stmt->execute();
$info['players_online'] = $stmt->fetch()->players_online;

?>
 
