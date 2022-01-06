<?php if (!defined('FLUX_ROOT')) exit; ?>

<!-- home -->
<section id="home" data-parallax="scroll" data-image-src="<?php echo $this->themePath('images/hero-bg.jpg') ?>" data-natural-width=3000 data-natural-height=2000>

	<div class="overlay"></div>
	<div class="home-content">        

		<div class="row contents">                     
			<div class="home-content-left">

				<h3 data-aos="fade-up" class=" text-center">
					<?php echo $config['server_sub_intro']; ?> |
					<span>Online Player: <?php echo number_format($config['online'][0]);?></span>
				</h3>
				<h1 data-aos="fade-up">
					<?php echo $config['server_introduction']; ?>
				</h1>
				<div class="buttons" data-aos="fade-up">
					<a href="<?php echo $this->url('account','create'); ?>" class="button stroke">
						<span class="icon-users" aria-hidden="true"></span>
						Register Account
					</a>
					<a href="https://www.youtube.com/watch?v=<?php echo $config['social_api']['youtube']; ?>" data-lity class="button stroke">
						<span class="icon-play" aria-hidden="true"></span>
						Youtube Video
					</a>
				</div>                                         

			</div>

			<div class="home-image-right">
				<img src="<?php echo $this->themePath('images/iphone-app-470.png'); ?>" 
					srcset="<?php echo $this->themePath('images/iphone-app-470.png'); ?> 1x, <?php echo $this->themePath('images/iphone-app-940.png'); ?> 2x"  
					data-aos="fade-up">
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
			<span>View More</span>
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
			<h1>A server to cater your Intense desire for gaming.</h1>
			<p class="lead" data-aos="fade-up">
				The time has come once again to experience the legendary MMORPG Ragnarok Online. Continue the legend and relive the glorious past that can never be extinguished!
			</p>
			<p class="lead" data-aos="fade-up">	
				On the edge of Midgard’s trends
				Ragnarok Online is set on 999x/999x MID experience rates, 99/70 base-job levels for Classic Gaming. The server is running under Ep. 5.0 Yuno.

				A Gamers’ Haven
				The server provides showcase features to give its players their best gaming experience. Automated and Hosted events are lined-up with exciting and inimitable concepts. 
				Battle grounds for Player versus Player combats are set on per level category.
			</p>
		</div>  
	</div>

	<div class="row about-features">
		<div class="features-list block-1-3 block-m-1-2 block-mob-full group">
			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/rok.png'); ?>" /> </span></center>            
				<div class="service-content">
					<center><h3>SERVER RATES:</h3></center>
					<h5>- <font color="46305e">Max Level/Job</font> : xxx
					<h5>- <font color="46305e">Max Status</font> : xxx
					<h5>- <font color="46305e">Max ASPD</font> : xxx
					<h5>- <font color="46305e">Rates</font> : xxk/xxk/xxxx
					<h5>- <font color="46305e">Drops Equips Normais</font> : xx%
					<h5>- <font color="46305e">Drops Equips MVP</font> : xx%
					<h5>- <font color="46305e">Drops Cartas Normais</font> : xx%
					<h5>- <font color="46305e">Drops Cartas MVP</font> : xx%
					<h5>- <font color="46305e">Server Type</font> : Revo Classic
					</h5>					
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">	
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/nid.png'); ?>" /> </span></center>                        
				<div class="service-content">	
					<center><h3>EPISODE RELEASE:</h3></center>  
					<h5>- <font color="46305e">EPISODE 4</font> : Incluindo uma que permite fabricar um Chapéu Visual inédito.
					<h5>- <font color="46305e">EPISODE 5</font> : Transforme alguns dos chapéus clássicos em Itens Visuais.
					<h5>- <font color="46305e">EPISODE 6</font> : Aprimore alguns dos equipamentos clássicos e torne-os ainda mais poderosos.
					<h5>- <font color="46305e">EPISODE 7</font> : Monstros de Nv 146+ para maior desafio.
					</h5>
				</div>	 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/fad.png'); ?>" /> </span></center>		            
				<div class="service-content">
					<center><h3>SERVER PROTECTION:</h3></center>
					<h5>- <font color="46305e">Guepard Shield 3.0</font> : Utilizamos o que tem de melhor no mercado com relação a Proteções Internas e Externas em nosso servidor, para que você jogador possa desfrutar de sua jogatina sem medo ou problemas.
					<h5>- <font color="46305e">@LGP</font> : A Addon Lite Graphics Plugin também está ativa e atualizada dentro do jogo.
					</h5>						
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/emp.png'); ?>" /> </span></center>	
				<div class="service-content">
					<center><h3>WAR OF EMPERIUM</h3></center>
					<h5>- <font color="46305e">Horários</font> : Segunda, Quarta, Sexta, Domingo das 19:00 às 20:00 horas.
					<h5>- <font color="46305e">Premiações</font> : Ao clã vencedor da Guerra do Emperium será enviado 1 Baú da Woe contendo grandes prêmiações.
					</h5>
				</div> 
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"><img src="<?php echo $this->themePath('images/icons/shu.png'); ?>" /> </span></center>		            
				<div class="service-content">	
					<center><h3>GVG & PVP EVENT</h3></center>
					<h5>- <font color="46305e">@irbg</font> : Comando @irbg ativo no servidor, mais dinâmismo na campal.
					<h5>- <font color="46305e">Emblemas</font> : Troque seus emblemas por stuffs, visuais, vip entre outras prêmiações.
					</h5>
				</div>
			</div> <!-- /bgrid -->

			<div class="bgrid feature" data-aos="fade-up">
				<center><span class="icon"> <img src="<?php echo $this->themePath('images/icons/vot.png'); ?>" /> </span></center>	   	           
				<div class="service-content">
					<center><h3>VOTE FOR POINTS</h3></center>
					<h5>- <font color="46305e">Vote</font> : Ganhe pontos votando diariamente em nosso servidor, e troque por itens visuais, vip, pontos de cash entre outras prêmiações.
					</h5>						
				</div>
			</div> <!-- /bgrid -->
			
		</div> <!-- end features-list -->
	</div> <!-- end about-features -->	
</section> 
<!-- end about -->  

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
				
				<?php foreach($config['shops'] as $items): ?>
				<div>
					<div class="shop-item">
							<img src="<?php echo $this->themePath('images/shop/'.$items[0]); ?>" alt="item image">
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

<!-- download -->
<section id="download">
	<div class="row">
		<div class="col-full">
			<h1 class="intro-header"  data-aos="fade-up">DOWNLOAD GAME CLIENT</h1>
			
			<h5 class="lead" data-aos="fade-up">
			   CLICK ON THE LINKS BELOW TO PLAY ON OUR SERVER.
			</h5>
			
			<p>
			</p>

			<ul class="download-badges" data-os="fade-up">
				<div class="plan-bottom-part">
					<a href="<?php echo $config['downloads']['lite_client'];?>" target="_BLANK">
						<img src="<?php echo $this->themePath('images/button1s.png'); ?>" alt="Lite Client" />
					</a>
					<a href="<?php echo $config['downloads']['full_client'];?>" target="_BLANK">
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
