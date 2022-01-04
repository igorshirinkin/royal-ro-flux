<?php if (!defined('FLUX_ROOT')) exit; ?>
<h2>Рейтинг персонажей</h2>
<h3>
	Топ <?php echo number_format($limit = (int)Flux::config('CharRankingLimit')) ?> персонажей
	<?php if (!is_null($jobClass)) : ?>
		(<?php echo htmlspecialchars($className = $this->jobClassText($jobClass)) ?>)
	<?php endif ?>
	на сервере <?php echo htmlspecialchars($server->serverName) ?>
</h3>
<?php if ($chars) : ?>
	<form action="" method="get" class="search-form2">
		<?php echo $this->moduleActionFormInputs('ranking', 'character') ?>
		<p>
			<label for="jobclass">Отфильтровать по профессии:</label>
			<select name="jobclass" id="jobclass">
				<option value="" <?php if (is_null($jobClass)) echo 'selected="selected"' ?>>Все</option>
				<?php foreach ($classes as $jobClassIndex => $jobClassName) : ?>
					<option value="<?php echo $jobClassIndex ?>" <?php if (!is_null($jobClass) && $jobClass == $jobClassIndex) echo ' selected="selected"' ?>>
						<?php echo htmlspecialchars($jobClassName) ?>
					</option>
				<?php endforeach ?>
			</select>

			<input type="submit" value="Отфильтровать" />
			<input type="button" value="Сброс" onclick="reload()" />
		</p>
	</form>
	<table class="horizontal-table">
		<tr>
			<th>Позиция</th>
			<th>Никнейм</th>
			<th>Профессия</th>
			<th colspan="2">Гильдия</th>
			<th>Базовый уровень</th>
			<th>Профессиональный уровень</th>
			<th>Базовый опыт</th>
			<th>Профессиональный опыт</th>
		</tr>
		<?php $topRankType = !is_null($jobClass) ? $className : 'character' ?>
		<?php for ($i = 0; $i < $limit; ++$i) : ?>
			<tr<?php if (!isset($chars[$i])) echo ' class="empty-row"';
				if ($i === 0) echo ' class="top-ranked" title="<strong>' . htmlspecialchars($chars[$i]->char_name) . '</strong> первое место в топе!"' ?>>
				<td align="right"><?php echo number_format($i + 1) ?></td>
				<?php if (isset($chars[$i])) : ?>
					<td><strong>
							<?php if ($auth->actionAllowed('character', 'view') && $auth->allowedToViewCharacter) : ?>
								<?php echo $this->linkToCharacter($chars[$i]->char_id, $chars[$i]->char_name) ?>
							<?php else : ?>
								<?php echo htmlspecialchars($chars[$i]->char_name) ?>
							<?php endif ?>
						</strong></td>
					<td><?php echo $this->jobClassText($chars[$i]->char_class) ?></td>
					<?php if ($chars[$i]->guild_name) : ?>
						<?php if ($chars[$i]->guild_emblem_len) : ?>
							<td width="24"><img src="<?php echo $this->emblem($chars[$i]->guild_id) ?>" /></td>
						<?php endif ?>
						<td<?php if (!$chars[$i]->guild_emblem_len) echo ' colspan="2"' ?>>
							<?php if ($auth->actionAllowed('guild', 'view') && $auth->allowedToViewGuild) : ?>
								<?php echo $this->linkToGuild($chars[$i]->guild_id, $chars[$i]->guild_name) ?>
							<?php else : ?>
								<?php echo htmlspecialchars($chars[$i]->guild_name) ?>
							<?php endif ?>
							</td>
						<?php else : ?>
							<td colspan="2"><span class="not-applicable">Нет</span></td>
						<?php endif ?>
						<td><?php echo number_format($chars[$i]->base_level) ?></td>
						<td><?php echo number_format($chars[$i]->job_level) ?></td>
						<td><?php echo number_format($chars[$i]->base_exp) ?></td>
						<td><?php echo number_format($chars[$i]->job_exp) ?></td>
					<?php else : ?>
						<td colspan="8"></td>
					<?php endif ?>
					</tr>
				<?php endfor ?>
	</table>
<?php else : ?>
	<p>Персонажи в рейтинге отсутствуют. <a href="javascript:history.go(-1)">Назад</a>.</p>
<?php endif ?>