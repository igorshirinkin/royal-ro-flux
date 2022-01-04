<?php
if (!defined('FLUX_ROOT')) exit;
include $this->themePath('config/hurtsky_settings.php', true);
$adminMenuItems = $this->getAdminMenuItems();
$menuItems = $this->getMenuItems();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<!--- basic page needs
    ================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Сервер Ragnarok Online с третьими профессиями. Онлайн сервер Ragnarok Online - лоурейт.">
	<meta name="keywords" content="сервер ragnarok online, лоурейт, хайрейт, третьи профессии">
	<meta name="author" content="Ragnarok Royal">
	<?php if (isset($metaRefresh)) : ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
	<?php endif ?>
	<title>
		<?php
		echo Flux::config('SiteTitle');
		if (isset($title)) echo ": $title"
		?>
	</title>

	<!--- JSON-LD
    ================================================== -->
    <!-- <script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "WebSite",
        "name": "Synthetica web-studio",
        "url": "https://webstudio-synthetica.ru/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://webstudio-synthetica.ru/{search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script> -->

    <!--- Facebook and Twitter integration
    ================================================== -->
    <!-- <meta name="og:title" content="SYNTHETICA — интегратор digital‑решений" />
    <meta name="og:type" content="website" />
    <meta name="og:site_name" content="SYNTHETICA web-studio" />
    <meta property="og:image" content="https://webstudio-synthetica.ru/images/OGsmall.jpg"/>
    <meta property="og:image:alt" content="Green beautiful bush" />
	<meta property="og:url" content="https://webstudio-synthetica.ru/"/>
    <meta property="og:description" content="Разработка и продвижение сайтов, профессиональная настройка рекламных кампаний."/>
    <meta name="twitter:title" content="SYNTHETICA — интегратор digital‑решений" />
    <meta name="twitter:image" content="https://webstudio-synthetica.ru/images/OGsmall.jpg" />
	<meta name="twitter:url" content="https://webstudio-synthetica.ru/" />
	<meta name="twitter:card" content="summary" /> -->

	<!-- CSS and Fonts
    ================================================== -->
	<link rel="shortcut icon" href="<?php echo $this->themePath('favicon.ico') ?>" />
	<link rel="stylesheet" href="<?php echo $this->themePath('css/flux.css') ?>" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/unitip.css') ?>" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo $this->themePath('css/bulma.min.css') ?>" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo $this->themePath('css/extensions.css') ?>" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo $this->themePath('css/jquery-ui.min.css') ?>" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo $this->themePath('css/fontawesome-5-11-2/all.css') ?>" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="<?php echo $this->themePath('css/main.css') ?>?v<?php echo time(); ?>" type="text/css" media="screen" title="" charset="utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tammudu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">



	<!-- Google Recaptcha
    ================================================== -->
	<?php if (Flux::config('EnableReCaptcha')) : ?>
		<script src='https://www.google.com/recaptcha/api.js' async defer></script>
		<script>
			function onSubmit(token) {
				document.getElementById("login-form").submit();
			}
		</script>
	<?php endif ?>
</head>

<body>
	<section class="hero is-fullheight is-black is-bold">
		<div class="hero-head">
			<?php include $this->themePath('main/navbar.php', true) ?>
		</div>
		<div class="hero-body">

			<div class="container">

				<div class="columns">
					<div class="column">
						<nav class="level is-transparent">
							<div class="level-item ">
								<img src="<?php echo $this->themePath('img/ragnarok.png', true) ?>" alt="Logo">
							</div>
							<nav>
					</div>
				</div>

				<div class="columns is-multiline has-background-custom2">

					<?php if (!in_array($params->get('action'), array('account', 'login'))) : ?>
						<div class="column is-12">
							<div class="columns">
								<div id="stats" class="column has-background-custom1 box">
									<?php include $this->themePath('main/status.php', true) ?>
								</div>
							</div>
						</div>
					<?php endif ?>

					<div class="column is-12">
						<div class="box is-semi-transparent">
							<?php if (Flux::config('DebugMode') && @gethostbyname(Flux::config('ServerAddress')) == '213.189.220.117') : ?>
								<div id="serverNoti" class="notification is-danger">
									<button id="deleteServerNoti" class="delete"></button>
									Please change your ServerAddress directive in your application config to your server's real address (e.g., myserver.com).
								</div>
							<?php endif ?>

							<!-- Messages -->
							<?php if ($message = $session->getMessage()) : ?>
								<div id="serverSuccess" class="notification is-success">
									<button id="deleteServerSuccess" class="delete"></button>
									<?php echo htmlspecialchars($message) ?>
								</div>
							<?php endif ?>

							<!-- Sub menu -->
							<?php include $this->themePath('main/submenu.php', true) ?>

							<!-- Page menu -->
							<?php include $this->themePath('main/pagemenu.php', true) ?>