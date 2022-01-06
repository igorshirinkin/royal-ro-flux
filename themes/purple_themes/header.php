<?php if (!defined('FLUX_ROOT')) exit; ?>
<?php require_once (FLUX_THEME_DIR."/purple_themes/skyzone_config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?></title>
        <!-- favicons -->
		<link rel="shortcut icon" href="<?php echo $this->themePath('favicon.ico') ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo $this->themePath('favicon.ico') ?>" type="image/x-icon">
		
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php if (Flux::config('EnableReCaptcha')): ?>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		<?php endif ?>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- CSS -->
		<link rel="stylesheet" href="<?php echo $this->themePath('css/base.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/vendor.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/main.css') ?>">
		<link rel="stylesheet" href="<?php echo $this->themePath('css/choco_main.css') ?>">

		<!-- script -->
		<script src="<?php echo $this->themePath('js/modernizr.js') ?>"></script>
		<script src="<?php echo $this->themePath('js/pace.min.js') ?>"></script>
			
	</head>
	
	<body id="top">
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_EN/sdk.js#xfbml=1&version=v3.3"></script>
	
    <!-- Fixed navbar -->
	<?php //include $this->themePath('main/navbar.php', true) ?>
	
	<!-- header -->
   <header id="header" class="row" style=""> 
   		<div class="header-logo">
			<!--<img src="img/logo.png" alt="" title="" />-->
			<a href="<?php echo $this->url('main'); ?>"><?php echo $config['server_name'];?></a> 
	    </div>

	   	<nav id="header-nav-wrap">
			<ul class="header-main-nav"> 
				<?php foreach($config['nav_index'] as $navi): ?>
				<li class="<?php echo $navi[0]; ?>">
					<a class="<?php echo $navi[1]; ?>" href="<?php echo $navi[2]; ?>"> <?php echo $navi[3]; ?> </a>
				</li>
				<?php endforeach; ?>
			</ul>

			<div class="btn-group text-left">
				<a type="button" class="button button-primary cta dropdown-toggle" data-toggle = "dropdown">
				 Control Panel
				 <span class = "caret"></span>
				</a>				  
				<ul class="dropdown-menu pull-right">
					<?php foreach($config['nav_panel'] as $cp): ?>
					<li>
						<a href="<?php echo $cp[2]; ?>" title="<?php echo $cp[0]; ?>" class="text-primary"><?php echo $cp[0]; ?></a>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			    
			<?php $adminMenuItems = $this->getAdminMenuItems(); ?>
			<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>
			<div class="btn-group text-left">
			  <a type="button" class="button button-primary cta dropdown-toggle" data-toggle = "dropdown">
				 Admin Panel
				 <span class = "caret"></span>
			  </a>				  
			  <ul class="dropdown-menu pull-right">
					<?php foreach ($adminMenuItems as $menuItem): ?>
					<li>
						<a href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>"><?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?></a>
					</li>
					<?php endforeach; ?>
			  </ul>
		   </div>		   
		   <?php endif ?>			  
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a> 	
   	
   </header> 
   <!-- /header -->
		
		<?php  if(!($params->get('module') == 'main' && $params->get('action') == 'index')){ ?>
		<section id="home" style="padding-top:100px; padding-button:100px;"  data-parallax="scroll" data-image-src="<?php echo $this->themePath('images/hero-bg.jpg') ?>" data-natural-width=3000 data-natural-height=2000>
			<div class="container" style="background-color:#FFF; border-radius:10px; padding:10px;">	
				<?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '127.0.0.1'): ?>
					<p class="notice">Please change your <strong>ServerAddress</strong> directive in your application config to your server's real address (e.g., myserver.com).</p>
				<?php endif ?> 
					<!-- Messages -->
					<?php if ($message=$session->getMessage()): ?>
						<p class="message"><?php echo htmlspecialchars($message) ?></p>
					<?php endif ?>
					
					<!-- Sub menu -->
					<?php include $this->themePath('main/submenu.php', true) ?>
					
					<!-- Page menu -->
					<?php include $this->themePath('main/pagemenu.php', true) ?>
						
					
					<!-- Credit balance -->
					<?php //if (in_array($params->get('module'), array('donate', 'purchase'))) include 'main/balance.php' ?>

		<?php } ?>
