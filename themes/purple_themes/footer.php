<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php  if(!($params->get('module') == 'main' && $params->get('action') == 'index')){ ?>
		</div>
	</section>
<?php } ?>

	  <!-- footer -->
    <footer>
        <div class="footer-main">
            <div class="row">  

                <div class="col-three md-1-3 tab-full footer-info">            

                    <div class="footer-logo"></div>

                    <p>
						The time has come once again to experience the legendary MMORPG Ragnarok Online.
                    </p>

                    <ul class="footer-social-list">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    
                    
                </div> <!-- end footer-info -->

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">
					<img src="<?php echo $this->themePath('images/sedora.png') ?>"/>                  
                </div> <!-- end footer-contact -->  

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">
                    <h4>Usefull Links</h4>
                    <ul class="list-links">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#about">Information</a></li>
                        <li><a href="#donation">Donation</a></li>
                        <li><a href="#shop">Shop</a></li>
                        <li><a href="#download">Downloads</a></li>
                        <li>
							<?php if (count(Flux::$appConfig->get('ThemeName', false)) > 1): ?>				
							<a>Themes Design:
								<select name="preferred_theme" onchange="updatePreferredTheme(this)" style="color:#555555;">
								<?php foreach (Flux::$appConfig->get('ThemeName', false) as $themeName): ?>
									<option value="<?php echo htmlspecialchars($themeName) ?>"<?php if ($session->theme == $themeName) echo ' selected="selected"' ?>><?php echo htmlspecialchars($themeName) ?></option>
								<?php endforeach ?>
								</select>
							</a>
							<?php endif ?>
						</li>
                    </ul>	      		
                            
                </div> <!-- end footer-site-links --> 

                <div class="col-four md-1-2 tab-full footer-subscribe">
                    <div class="fb-page" data-href="https://www.facebook.com/<?php echo $config['community']['facebook']; ?>/" data-tabs="timeline" data-width="400" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/<?php echo $config['community']['facebook']; ?>/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/<?php echo $config['community']['facebook']; ?>/"><?php echo $config['community']['facebook']; ?></a></blockquote></div>	      		
                </div> <!-- end footer-subscribe -->         

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


		<div class="footer-bottom">
			<div class="row">
				<div class="col-twelve">
					<div class="copyright">
						<span>Copyright <script>document.write(new Date().getFullYear());</script> &copy; Gravity Co., Ltd. & Lee Myoungjin (Studio DTDS) All Rights Reserved.</span> 
						<span>Design By <a href="https://forum.cronus-emulator.com/profile/78797-mihael/">Mihael</a></span>	         	
						<span>Coded by <a href="https://skyzonehosting.net" target="_blank">Skyzone</a></span><br>	
						<p class="text-muted">
							<?php if (Flux::config('ShowCopyright')): ?>
							Powered by <a href="https://github.com/rathena/FluxCP" target="_blank">FluxCP</a>
							<?php endif ?>
							<?php if (Flux::config('ShowRenderDetails')): ?>
							
								Page Refresh Rate <strong><?php echo round(microtime(true) - __START__, 5) ?></strong> second(s).
								Viewer: <strong><?php echo (int)Flux::$numberOfQueries ?></strong>.
								<?php if (Flux::config('GzipCompressOutput')): ?>Gzip Compression: <strong>Enabled</strong>.<?php endif ?>
							
							<?php endif ?> 
						</p>
						<form action="<?php echo $this->urlWithQs ?>" method="post" name="preferred_theme_form" style="display: none">
							<input type="hidden" name="preferred_theme" value="" />
						</form>
					 </div>
					 <div id="go-top">
						<a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
					 </div>         
				</div>
			</div> <!-- end footer-bottom -->
		</div>
    </footer>

    <div id="preloader"> 
    	<div id="loader"></div>
    </div>  

 
	<script type="text/javascript">
		function updatePreferredServer(sel){
			var preferred = sel.options[sel.selectedIndex].value;
			document.preferred_server_form.preferred_server.value = preferred;
			document.preferred_server_form.submit();
		}
		
		function updatePreferredTheme(sel){
			var preferred = sel.options[sel.selectedIndex].value;
			document.preferred_theme_form.preferred_theme.value = preferred;
			document.preferred_theme_form.submit();
		}

		function updatePreferredLanguage(sel){
			var preferred = sel.options[sel.selectedIndex].value;
			setCookie('language', preferred);
			reload();
		}

		// Preload spinner image.
		var spinner = new Image();
		spinner.src = '<?php echo $this->themePath('img/spinner.gif') ?>';
		
		function refreshSecurityCode(imgSelector){
			$(imgSelector).attr('src', spinner.src);
			
			// Load image, spinner will be active until loading is complete.
			var clean = <?php echo Flux::config('UseCleanUrls') ? 'true' : 'false' ?>;
			var image = new Image();
			image.src = "<?php echo $this->url('captcha') ?>"+(clean ? '?nocache=' : '&nocache=')+Math.random();
			
			$(imgSelector).attr('src', image.src);
		}
		function toggleSearchForm()
		{
			//$('.search-form').toggle();
			$('.search-form').slideToggle('fast');
		}

		function setCookie(key, value) {
			var expires = new Date();
			expires.setTime(expires.getTime() + expires.getTime()); // never expires
			document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
		}
	</script>
	
	
		
		<?php if (Flux::config('EnableReCaptcha') && Flux::config('ReCaptchaTheme')): ?>
			<script type="text/javascript">
				 var RecaptchaOptions = {
					theme : '<?php echo Flux::config('ReCaptchaTheme') ?>'
				 };
			</script>
		<?php endif ?>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var inputs = 'input[type=text],input[type=password],input[type=file]';
				$(inputs).focus(function(){
					$(this).css({
						'background-color': '#f9f5e7',
						'border-color': '#dcd7c7',
						'color': '#726c58'
					});
				});
				$(inputs).blur(function(){
					$(this).css({
						'backgroundColor': '#ffffff',
						'borderColor': '#dddddd',
						'color': '#444444'
					}, 500);
				});
				$('.menuitem a').hover(
					function(){
						$(this).fadeTo(200, 0.85);
						$(this).css('cursor', 'pointer');
					},
					function(){
						$(this).fadeTo(150, 1.00);
						$(this).css('cursor', 'normal');
					}
				);
				$('.money-input').keyup(function() {
					var creditValue = parseInt($(this).val() / <?php echo Flux::config('CreditExchangeRate') ?>, 10);
					if (isNaN(creditValue))
						$('.credit-input').val('?');
					else
						$('.credit-input').val(creditValue);
				}).keyup();
				$('.credit-input').keyup(function() {
					var moneyValue = parseFloat($(this).val() * <?php echo Flux::config('CreditExchangeRate') ?>);
					if (isNaN(moneyValue))
						$('.money-input').val('?');
					else
						$('.money-input').val(moneyValue.toFixed(2));
				}).keyup();
				
				// In: js/flux.datefields.js
				processDateFields();
			});
			
			function reload(){
				window.location.href = '<?php echo $this->url ?>';
			}
		</script>

		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.datefields.js') ?>"></script>
		<script type="text/javascript" src="<?php echo $this->themePath('js/flux.unitip.js') ?>"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		 <!-- Java Script -->
		<script src="<?php echo $this->themePath('js/jquery-2.1.3.min.js') ?>"></script>
		<script src="<?php echo $this->themePath('js/plugins.js') ?>"></script>
		<script src="<?php echo $this->themePath('js/main.js') ?>"></script>
		
	</body>
</html>
