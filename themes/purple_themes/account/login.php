<?php if (!defined('FLUX_ROOT')) exit; ?>
<div class="row">
	<div class="col-lg-3 col-md-3 single-blog">
	</div>
	<div class="col-lg-6 col-md-6 single-blog">
		<h3><?php echo htmlspecialchars(Flux::message('LoginHeading')) ?></h3>

			<?php if (isset($errorMessage)): ?>
			<p class="red"><?php echo htmlspecialchars($errorMessage) ?></p>
			<?php endif ?>

			<?php if ($auth->actionAllowed('account', 'create')): ?>
				<p><?php printf(Flux::message('LoginPageMakeAccount'), $this->url('account', 'create')); ?></p>
			<?php endif ?>
			
			<form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post" class="generic-forms">
				<?php if (count($serverNames) === 1): ?>
				<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
				<?php endif ?>
				
				<div class="form-group"> 
					<input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($params->get('username')) ?>" placeholder="Username.."/>
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="password" placeholder="Password..">
				</div>
				<div class="form-group">
					<?php if (count($serverNames) > 1): ?>
					<select class="form-control" name="server" id="login_server"<?php if (count($serverNames) === 1) echo ' disabled="disabled"' ?>>
						<?php foreach ($serverNames as $serverName): ?>
						<option value="<?php echo htmlspecialchars($serverName) ?>"><?php echo htmlspecialchars($serverName) ?></option>
						<?php endforeach ?>
					</select>
					<?php endif ?>
					<?php if (Flux::config('UseLoginCaptcha')): ?>
						<?php if (Flux::config('EnableReCaptcha')): ?>
							<label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label><br>
							<div class="g-recaptcha" data-theme = "<?php echo $theme;?>" data-sitekey="<?php echo $recaptcha ?>"></div>
						<?php else: ?>
						<label for="register_security_code"><?php echo htmlspecialchars(Flux::message('AccountSecurityLabel')) ?></label><br>
						<div class="security-code">
							<img src="<?php echo $this->url('captcha') ?>" />
						</div>
						<input type="text" name="security_code" id="register_security_code" />
						<div style="font-size: smaller;" class="action">
							<strong><a href="javascript:refreshSecurityCode('.security-code img')"><?php echo htmlspecialchars(Flux::message('RefreshSecurityCode')) ?></a></strong>
						</div>
					<?php endif ?>
				 <?php endif ?>
				</div>
				<button class="button button-primary large btn-block" type="submit" name="submit"><strong>Login</strong></button>
				
				<div style="padding-top:10px; text-align:center;">
					Don’t have an account?<br>
					<a style="color:#ffd500 !important;" href="<?php echo $this->url('account', 'create') ?>">Register now!</a>
				</div>		
			</form>
		</div>
	</div>
</div>