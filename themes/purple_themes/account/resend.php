<?php if (!defined('FLUX_ROOT')) exit; ?>
<h3><?php echo htmlspecialchars(Flux::message('ResendHeading')) ?></h3>

<?php if (!empty($errorMessage)): ?>
<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
<?php endif ?>
<p><?php echo htmlspecialchars(Flux::message('ResendInfo')) ?></p>

<form action="<?php echo $this->urlWithQs ?>" method="post" class="generic-form">
	<?php if (count($serverNames) > 1): ?>
	<div class="form-group">
		<label for="login"><?php echo htmlspecialchars(Flux::message('ResendServerLabel')) ?></label>
		<select name="login" id="login"<?php if (count($serverNames) === 1) echo ' disabled="disabled"' ?>>
		<?php foreach ($serverNames as $serverName): ?>
			<option value="<?php echo htmlspecialchars($serverName) ?>"<?php if ($params->get('server') == $serverName) echo ' selected="selected"' ?>><?php echo htmlspecialchars($serverName) ?></option>
		<?php endforeach ?>
		</select>
		<p><?php echo htmlspecialchars(Flux::message('ResendServerInfo')) ?></p>
	</div> 
	<?php endif ?>
	<div class="form-group">
		<label for="userid"><?php echo htmlspecialchars(Flux::message('ResendAccountLabel')) ?></label>
		<input class="form-control text-white" type="text" name="userid" id="userid" />
		<p><?php echo htmlspecialchars(Flux::message('ResendAccountInfo')) ?></p>
	</div> 
	
	<div class="form-group">
		<label for="email"><?php echo htmlspecialchars(Flux::message('ResendEmailLabel')) ?></label>
		<input class="form-control text-white" type="text" name="email" id="email" />
		<p><?php echo htmlspecialchars(Flux::message('ResendEmailInfo')) ?></p>
	</div> 
	
	<div class="form-group"> 
		<button class="btn btn-secondary btn-block" type="submit">
			<strong><?php echo htmlspecialchars(Flux::message('ResendButton')) ?></strong>
		</button>
	</div> 
</form>
	