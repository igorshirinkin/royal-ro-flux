<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>War of Emperium Hours</h2>
<?php if ($woeTimes) : ?>
	<table class="woe-table">
		<tr>
			<th>Servers</th>
			<th colspan="3">War of Emperium Times</th>
		</tr>
		<?php foreach ($woeTimes as $serverName => $times) : ?>
			<tr>
				<td class="server" rowspan="<?php echo count($times) ?>">
					<?php echo htmlspecialchars($serverName)  ?>
				</td>
				<?php foreach ($times as $time) : ?>
					<td class="time">
						<?php echo htmlspecialchars($time['startingDay']) ?>
						@ <?php echo htmlspecialchars($time['startingHour']) ?>
					</td>
					<td>~</td>
					<td class="time">
						<?php echo htmlspecialchars($time['endingDay']) ?>
						@ <?php echo htmlspecialchars($time['endingHour']) ?>
					</td>
			</tr>
			<tr>
			<?php endforeach ?>
			</tr>
		<?php endforeach ?>
	</table>
<?php else : ?>
	<p>There are no scheduled WoE hours.</p>
<?php endif ?>