<?php if (!defined('FLUX_ROOT')) exit;
include $this->themePath('src/status.php', true);
?>

<!-- home -->
<section id="home" data-parallax="scroll" data-image-src="<?php echo $this->themePath('images/hero-bg.jpg') ?>" data-natural-width=3000 data-natural-height=2000>

	<div class="overlay"></div>
	<div class="home-content">

		<?php foreach ($serverStatus as $privServerName => $gameServers) : ?>
			<?php foreach ($gameServers as $serverName => $gameServer) : ?>

				<div class="row contents">
					<div class="home-content-left">

						<h3 data-aos="fade-up" class=" text-center">
							<?php echo $config['server_sub_intro']; ?> |
							<?php if ($gameServer['playersOnline'] > 0) : ?>
								<span class="counter_online">Online Player: <?php echo $gameServer['playersOnline']; ?></span>
							<?php else : ?>
								<span class="counter_offline">Online Player: <?php echo $gameServer['playersOnline']; ?></span>
							<?php endif; ?>
						</h3>

						<nav class="level" data-aos="fade-up">
							<div class="level-item">
								<?php
								if ($loginServerUp) {
									$loginServer 	   = "Login Server работает!";
									$loginIcon 		   = "img/check.png";
									$loginText 		   = "has-text-success";
								} else {
									$loginServer     = "Login Server не работает!";
									$loginIcon = "img/close.png";
									$loginText = "has-text-danger";
								}
								?>

								<span id="icon-status" data-position="bottom" data-delay="50" data-tooltip="<?php echo $loginServer ?>">
									<span class="<?php echo $loginText ?>"><img src="<?php echo $this->themePath($loginIcon); ?>" alt="status" height="20px" width="20px"></span>
									<span class="<?php echo $loginText ?>">
										LOGIN SERVER
									</span>
								</span>
							</div>
							<div class="level-item">
								<?php
								if ($loginServerUp) {
									$charServer     = "Char Server работает!";
									$charIcon 	    = "img/check.png";
									$charText 	    = "has-text-success";
								} else {
									$charServer     = "Char Server не работает!";
									$charIcon 	    = "img/close.png";
									$charText 	    = "has-text-danger";
								}
								?>
								<span id="icon-status" data-position="bottom" data-delay="50">
									<span class="<?php echo $charText ?>"><img src="<?php echo $this->themePath($charIcon); ?>" alt="status" height="20px" width="20px"></span>
									<span class="<?php echo $charText ?>">
										CHAR SERVER
									</span>
								</span>
							</div>
							<div class="level-item">
								<?php
								if ($loginServerUp) {
									$mapServer     = "Map Server работает!";
									$mapIcon 	   = "img/check.png";
									$mapText 	   = "has-text-success";
								} else {
									$mapServer     = "Map Server не работает!";
									$mapIcon 	   = "img/close.png";
									$mapText 	   = "has-text-danger";
								}
								?>
								<span id="icon-status" data-position="bottom" data-delay="50">
									<span class="<?php echo $mapText ?>"><img src="<?php echo $this->themePath($mapIcon); ?>" alt="status" height="20px" width="20px"></span>
									<span class="<?php echo $mapText ?>">
										MAP SERVER
									</span>
								</span>
							</div>
							<!-- woe -->
							<div class="level-item">
								<?php
								if ($gameServer['woeStatus'] == 1) {
									$woe     = "ПРИСОЕДИНЯЙТЕСЬ К БИТВЕ!!!";
									$woeIcon = "img/woeon.png";
									$woeText = "has-text-success";
								} else {
									$woe     = "Война за Империум сейчас недоступна!";
									$woeIcon = "img/woeoff.png";
									$woeText = "has-text-danger";
								}
								?>
								<div id="icon-status" data-position="bottom" data-delay="50">
									<span class="<?php echo $woeText ?>"><img src="<?php echo $this->themePath($woeIcon); ?>" alt="status" height="20px" width="20px"></span>
									<span class="<?php echo $woeText ?>">
										WoE
									</span>
								</div>
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
						</nav>
					<?php endforeach ?>
				<?php endforeach ?>

				<h1 data-aos="fade-up">
					<?php echo $config['server_introduction']; ?>
				</h1>
				<div class="buttons" data-aos="fade-up">
					<a href="<?php echo $this->url('account', 'create'); ?>" class="button stroke">
						<span class="icon-users" aria-hidden="true"></span>
						Register Account
					</a>
				</div>

					</div>

					<div class="home-image-right">
						<img src="<?php echo $this->themePath('images/iphone-app-470.png'); ?>" srcset="<?php echo $this->themePath('images/iphone-app-470.png'); ?> 1x, <?php echo $this->themePath('images/iphone-app-940.png'); ?> 2x" data-aos="fade-up">
					</div>
				</div>

	</div> <!-- end home-content -->

	<ul class="home-social-list">
		<li>
			<a href="#"><i class="fa fa-facebook-square"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-twitter"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-instagram"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-youtube-play"></i></a>
		</li>
	</ul>
	<!-- end home-social-list -->

	<div class="home-scrolldown">
		<a href="#information" class="scroll-icon smoothscroll">
			<span>О сервере</span>
			<i class="icon-arrow-right" aria-hidden="true"></i>
		</a>
	</div>

</section>
<!-- end home -->


<!-- about -->
<section id="information">

	<div class="row about-intro">
		<div class="col-four">
			<h1 class="intro-header" data-aos="fade-up"><img src="<?php echo $this->themePath('images/girl-bg.png'); ?>" /></h1>
		</div>
		<div class="col-eight">
			<h1>Сервер, который удовлетворит Ваше желание играть.</h1>
			<p class="lead" data-aos="fade-up">
				Пришло время вновь испытать легендарную MMORPG Ragnarok Online. Продолжите легенду и переживите славное прошлое, которое никогда не погаснет!
			</p>
			<p class="lead" data-aos="fade-up">
				Сервер настроен по классической механике Pre-Renewal и работает под управлением Ep. 13.3+ - El Dicastes.

				Royal Ragnarok - это бесплатный сервер, ориентированный на классический стиль игры. Мы работаем с самым быстрым оборудованием, чтобы обеспечить Вам наилучшие игровые впечатления во время путешествия по Мидгарду. Подробнее о нашей игровой механике смотрите в таблице ниже.
			</p>
		</div>
	</div>

	<div class="row about-features">
		<div class="features-list block-1-3 block-m-1-2 block-mob-full group">
			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/rok.png'); ?>" /> </span></center>
				<div class="service-content">
					<h3 class="text-center text-uppercase">рейты сервера:</h3>
					<h5 class="text-uppercase"> - рейты в будни : 7x/7x/5x</h5>
					<h5 class="text-uppercase"> - рейты в выходные : 10x/10x/10x</h5>
					<h3 class="text-center text-uppercase">статические рейты:</h3>
					<h5 class="text-uppercase"> - дроп рейты эквип : 10x</h5>
					<h5 class="text-uppercase"> - дроп рейты карты : 10x (0.10%)</h5>
					<h5 class="text-uppercase"> - MVP и Минибосс карты : 1x (0.01%)</h5>
					<h5 class="text-uppercase"> - кормление питомцев и гомункулов: 10x</h5>
					<h5 class="text-uppercase"> - квесты: 20x</h5>
					<h5 class="text-uppercase"> - тип сервера : PRE-RENEWAL</h5>
				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/nid.png'); ?>" /> </span></center>
				<div class="service-content">
					<h3 class="text-center text-uppercase">Серверные настройки:</h3>
					<h5 class="text-uppercase"> - Эпизод: 13.3+ - El Dicastes</h5>
					<h5 class="text-uppercase"> - Механика : Pre-Renewal</h5>
					<h5 class="text-uppercase"> - Эмулятор : rAthena</h5>
					<h5 class="text-uppercase"> - Максимальный уровень : 99/70</h5>
					<h5 class="text-uppercase"> - Максимальные статы : 99</h5>
					<h5 class="text-uppercase"> - Максимальный ASPD : 190</h5>
					<h5 class="text-uppercase"> - Инстант каст : 150 dex</h5>
					<h5 class="text-uppercase"> - Серверное время : Europe/Moscow</h5>
					<h5 class="text-uppercase"> - Автолут для Гомункулов/Наёмников отключен</h5>
					<h5 class="text-uppercase"> - Использование автокликеров автожора - разрешено</h5>
				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/fad.png'); ?>" /> </span></center>
				<div class="service-content">
					<h3 class="text-center text-uppercase">Защита на сервере:</h3>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
					<h5 class="text-uppercase"> - guard : </h5>
				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/emp.png'); ?>" /> </span></center>
				<div class="service-content">
					<h3 class="text-center text-uppercase">Информация о WoE:</h3>
					<h5 class="text-uppercase"> - woe : </h5>
					<h5 class="text-uppercase"> - woe : </h5>
					<h5 class="text-uppercase"> - woe : </h5>

				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/shu.png'); ?>" /> </span></center>
				<div class="service-content">
					<h3 class="text-center text-uppercase">Информация:</h3>
					<h5 class="text-uppercase"> - info : </h5>
					<h5 class="text-uppercase"> - info : </h5>
					<h5 class="text-uppercase"> - info : </h5>
				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/vot.png'); ?>" /> </span></center>
				<div class="service-content">
					<h3 class="text-center text-uppercase">Информация:</h3>
					<h5 class="text-uppercase"> - info : </h5>
					<h5 class="text-uppercase"> - info : </h5>
					<h5 class="text-uppercase"> - info : </h5>
				</div>
			</div> <!-- /bgrid -->

		</div> <!-- end features-list -->
	</div> <!-- end about-features -->
</section>
<!-- end about -->

<?php /*
<!-- pricing -->
<section id="donation">
	<div class="row pricing-content">

		<div class="col-four pricing-intro">
			<h1 class="intro-header" data-aos="fade-up">DONATION INFORMATION:</h1>
			<h5 data-aos="fade-up">
				Apesar de nossa proposta ser de manter um servidor sem pay-to-win, temos grandes gastos mensais com o servidor. Com isso em mente optamos por esse sistema de doações integrados dentro do jogo. Doando qualquer valor você receberá uma quantidade de Créditos que poderão ser trocados por alguns itens visuais, tickets vip, stuffs entre outros itens cosméticos.
			</h5>
		</div>

		<div class="col-eight pricing-table">
			<div class="row">

				<div class="col-six plan-wrap">
					<div class="plan-block" data-aos="fade-up">
						<div class="plan-top-part">
							<h3 class="plan-block-title">TOPUP #1</h3>
							<p class="plan-block-per">Valor Minímo:</p>
							<p class="plan-block-price"><sup>R$</sup>10</p>
						</div>
						<div class="plan-bottom-part">
							<ul class="plan-block-features">
								<li><span>Bonus No# 1</span> ITEM 1</li>
								<li><span>Bonus No# 2</span> ITEM 2</li>
								<li><span>Bonus No# 3</span> ITEM 3</li>
								<li><span>Bonus No# 4</span> ITEM 4</li>
							</ul>
							<a class="button button-primary large" href="<?php echo $this->url('donate'); ?>">Buy Now</a>
						</div>
					</div>
				</div> <!-- end plan-wrap -->

				<div class="col-six plan-wrap">
					<div class="plan-block primary" data-aos="fade-up">

						<div class="plan-top-part">
							<h3 class="plan-block-title">TOPUP #1</h3>
							<p class="plan-block-per">Valor Minímo:</p>
							<p class="plan-block-price"><sup>R$</sup>20</p>
						</div>

						<div class="plan-bottom-part">
							<ul class="plan-block-features">
								<li><span>Bonus No# 1</span> ITEM 1</li>
								<li><span>Bonus No# 2</span> ITEM 2</li>
								<li><span>Bonus No# 3</span> ITEM 3</li>
								<li><span>Bonus No# 4</span> ITEM 4</li>
							</ul>
							<a class="button button-primary large" href="<?php echo $this->url('donate'); ?>">Buy Now</a>
						</div>

					</div>
				</div> <!-- end plan-wrap -->

			</div>
		</div> <!-- end pricing-table -->

	</div> <!-- end pricing-content -->
</section> <!-- end pricing -->

<!-- shops Section  -->
<section id="shop" class="">
	<div class="row" style="padding-top:20px;">
		<div class="col-twelve text-center pt-5">
			<h1 class="intro-header" data-aos="fade-up">CASH SHOP</h1>
		</div>
	</div>

	<div class="row owl-wrap">
		<div id="shop-slider" data-aos="fade-up">
			<div class="slides owl-carousel text-center">

				<?php foreach ($config['shops'] as $items) : ?>
					<div>
						<div class="shop-item">
							<img src="<?php echo $this->themePath('images/shop/' . $items[0]); ?>" alt="item image">
							<div class="item-info text-center">
								PRICE: <?php echo $items[1]; ?>
								<span class="position">
									<?php echo $items[2]; ?>
								</span>
							</div>
							<a class="button button-primary cta" href="<?php echo $this->url('donate'); ?>">Purchase</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div> <!-- end slides -->
		</div> <!-- end shop-slider -->
	</div> <!-- end flex-container -->
</section>
<!-- end shops -->
*/ ?>

<!-- download -->
<section id="download">
	<div class="row">
		<div class="col-full">
			<h1 class="intro-header" data-aos="fade-up">ЗАГРУЗИТЬ ИГРОВОЙ КЛИЕНТ</h1>

			<h5 class="lead" data-aos="fade-up">
				CLICK ON THE LINKS BELOW TO PLAY ON OUR SERVER.
			</h5>

			<p>
			</p>

			<ul class="download-badges" data-os="fade-up">
				<div class="plan-bottom-part">
					<a href="<?php echo $config['downloads']['lite_client']; ?>" target="_BLANK">
						<img src="<?php echo $this->themePath('images/button1s.png'); ?>" alt="Lite Client" />
					</a>
					<a href="<?php echo $config['downloads']['full_client']; ?>" target="_BLANK">
						<img src="<?php echo $this->themePath('images/button2s.png'); ?>" alt="Full Client" />
					</a>
				</div>
				<h5 class="lead" data-aos="fade-up">
					What bug or problem is found, please report it to staff immediately.
				</h5>
			</ul>

		</div>
	</div>
</section> <!-- end download -->