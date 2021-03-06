<?php
if (!defined('FLUX_ROOT')) exit;

$title     = Flux::message('WoeTitle');
$dayNames  = array("Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота");
$woeTimes  = array();

foreach ($session->loginAthenaGroup->athenaServers as $athenaServer) {
	$times = $athenaServer->woeDayTimes;
	if ($times) {
		$woeTimes[$athenaServer->serverName] = array();
		foreach ($times as $time) {
			$woeTimes[$athenaServer->serverName][] = array(
				'startingDay'  => $dayNames[$time['startingDay']],
				'startingHour' => $time['startingTime'],
				'endingDay'    => $dayNames[$time['endingDay']],
				'endingHour'   => $time['endingTime']
			);
		}
	}
}
?>
