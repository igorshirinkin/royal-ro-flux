<?php
if (!defined('FLUX_ROOT')) exit;
include $this->themePath('src/status.php', true);
?>

<?php foreach ($serverStatus as $privServerName => $gameServers) : ?>
	<?php foreach ($gameServers as $serverName => $gameServer) : ?>
		<nav class="level">
			<div class="level-item">
				<?php
				if ($loginServerUp) {
					$hurtLogin 	   = "Login Server работает!";
					$hurtLoginIcon = "img/check.png";
					$hurtLoginText = "has-text-success";
				} else {
					$hurtLogin     = "Login Server не работает!";
					$hurtLoginIcon = "img/close.png";
					$hurtLoginText = "has-text-danger";
				}
				?>

				<span id="icon-status" class="tooltip" data-position="bottom" data-delay="50" data-tooltip="<?php echo $hurtLogin ?>">
					<span class="<?php echo $hurtLoginText ?>"><img src="<?php echo $this->themePath($hurtLoginIcon); ?>" alt="status" height="20px" width="20px"></span>
					<span class="<?php echo $hurtLoginText ?>">
						LOGIN SERVER
					</span>
				</span>
			</div>
			<div class="level-item">
				<?php
				if ($loginServerUp) {
					$hurtChar     = "Char Server работает!";
					$hurtCharIcon = "img/check.png";
					$hurtCharText = "has-text-success";
				} else {
					$hurtChar     = "Char Server не работает!";
					$hurtCharIcon = "img/close.png";
					$hurtCharText = "has-text-danger";
				}
				?>
				<span id="icon-status" class="tooltip" data-position="bottom" data-delay="50" data-tooltip="<?php echo $hurtChar ?>">
					<span class="<?php echo $hurtCharText ?>"><img src="<?php echo $this->themePath($hurtCharIcon); ?>" alt="status" height="20px" width="20px"></span>
					<span class="<?php echo $hurtCharText ?>">
						CHAR SERVER
					</span>
				</span>
			</div>
			<div class="level-item">
				<?php
				if ($loginServerUp) {
					$hurtMap     = "Map Server работает!";
					$hurtMapIcon = "img/check.png";
					$hurtMapText = "has-text-success";
				} else {
					$hurtMap     = "Map Server не работает!";
					$hurtMapIcon = "img/close.png";
					$hurtMapText = "has-text-danger";
				}
				?>
				<span id="icon-status" class="tooltip" data-position="bottom" data-delay="50" data-tooltip="<?php echo $hurtMap ?>">
					<span class="<?php echo $hurtMapText ?>"><img src="<?php echo $this->themePath($hurtMapIcon); ?>" alt="status" height="20px" width="20px"></span>
					<span class="<?php echo $hurtMapText ?>">
						MAP SERVER
					</span>
				</span>
			</div>
			<!-- woe -->
			<div class="level-item">
				<?php
				if ($gameServer['woeStatus'] == 1) {
					$hurtWoe     = "ПРИСОЕДИНЯЙТЕСЬ К БИТВЕ!!!";
					$hurtWoeIcon = "img/woeon.png";
					$hurtWoeText = "has-text-success";
				} else {
					$hurtWoe     = "Война за Империум сейчас недоступна!";
					$hurtWoeIcon = "img/woeoff.png";
					$hurtWoeText = "has-text-danger";
				}
				?>
				<div id="icon-status" class="tooltip" data-position="bottom" data-delay="50" data-tooltip="<?php echo $hurtWoe ?>">
					<span class="<?php echo $hurtWoeText ?>"><img src="<?php echo $this->themePath($hurtWoeIcon); ?>" alt="status" height="20px" width="20px"></span>
					<span class="<?php echo $hurtWoeText ?>">
						Война за Империум
					</span>
				</div>
			</div>
			<!-- online -->
			<div class="level-item">
				<span class="has-text-white">
					<?php if ($gameServer['playersOnline'] > 0) : ?>
						Игроков в сети:
						<span class="counter_online"><?php echo $gameServer['playersOnline'] ?></span>
					<?php else : ?>
						Игроков в сети:
						<span class="counter_offline"><?php echo $gameServer['playersOnline'] ?></span>
					<?php endif; ?>
				</span>
			</div>

			<?php if (Flux::config('EnablePeakDisplay')) : ?>
				<!-- peak -->
				<div class="level-item">
					<span class="has-text-white">
						Максимальный онлайн:
						<span class="counter_max"><?php echo $gameServer['playersPeak'] ?></span>
					</span>
				</div>
			<?php endif ?>
			<div class="level-item">
				<span class="has-text-white">
					Всего аккаунтов:
					<span class="counter_acc"><?php echo number_format($infoStats['accountsStats']) ?></span>
				</span>
			</div>
		</nav>

	<?php endforeach ?>
<?php endforeach ?>