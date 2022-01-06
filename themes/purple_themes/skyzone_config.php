<?php require_once(FLUX_ADDON_DIR . "/skyzone/modules/main/index.php"); #Skyzone Configure

# define the source of navbar data source
# 0 = as defined in flux's config/application.php
# 1 = use this config file.
$config['navbar_source'] = 1;

//error_reporting(0);
$config['server_name'] = "Royal Ragnarok";
$config['server_introduction'] = "Welcome to Ragnarok Online Experience the Legendary Game. ";
$config['server_sub_intro'] = "MMORPG Ragnarok Online.";


$ONLINE = $info['players_online'];

if ($ONLINE == 0) {
	$config['status_online'] = array('./img/7427.png');
	$config['online'] = array($ONLINE);
} else {
	$config['status_online'] = array('./img/7429.png');
	$config['online'] = array($ONLINE);
}


#define custom navigation instead of using flux
if ($session->isLoggedIn()) {
	#display to user already login
	$config['nav_panel'] = array(
		array(
			'MY ACCOUNT', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account', 'view'), //URL LINK
		),
		array(
			'LOGOUT', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account', 'logout'), //URL LINK
		),

	);
} else {
	$config['nav_panel'] = array(
		array(
			'LOGIN PANEL', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account', 'login'), //URL LINK
		),
		array(
			'REGISTER', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account', 'create'), //URL LINK
		),

	);
}

#display to user who not login
if (!($params->get('module') == 'main' && $params->get('action') == 'index')) {
	//Display kabag nasa ibang page
	$config['div_class'] = array(
		'div_value' => 'mymain2',
	);
} else {
	//Walang Display kapag nasa Main/Index Page
	$config['div_class'] = array(
		'div_value' => '',
	);
}


if (!($params->get('module') == 'main' && $params->get('action') == 'index')) {
	$config['nav_index'] = array(
		array(
			'',
			'',
			$this->url('main'),
			'Home',
		),
		array(
			'',
			' ',
			$this->url('donate'),
			'Donation',
		),
		array(
			'',
			'',
			$this->url('pages', 'staff'),
			'Staff',
		),
		array(
			'',
			'',
			$this->url('pages', 'information'),
			'SERVER INFORMATION',
		),
	);
} else {
	$config['nav_index'] = array(
		array(
			'current',
			'smoothscroll',
			'#home',
			'Home',
		),
		array(
			'',
			'smoothscroll',
			'#information',
			'Information',
		),
		array(
			'',
			'smoothscroll',
			'#donation',
			'Donation',
		),
		array(
			'',
			'smoothscroll',
			'#shop',
			'Shop',
		),
		array(
			'',
			'smoothscroll',
			'#download',
			'Download',
		),
	);
}

//SOCIAL LINKS
$config['social_links'] = array(
	'youtube' => 'Yeoxq3v73Qw', #API CALLS
);

$config['social_api'] = array(
	'youtube' => 'Yeoxq3v73Qw', #API CALLS
);

//SHOP
$config['shops'] = array(
	array(
		'2358.gif',
		'20$',
		'A winged dress that is said to have been worn by an angel. It makes you feel very lucky when you wear it. LUK + 4 Impossible to refine this item.',
	),
	array(
		'15026.gif',
		'20$',
		'A winged dress that is said to have been worn by an angel. It makes you feel very lucky when you wear it. LUK + 4 Impossible to refine this item.',
	),
	array(
		'15138.gif',
		'20$',
		'A winged dress that is said to have been worn by an angel. It makes you feel very lucky when you wear it. LUK + 4 Impossible to refine this item.',
	),
);


#DOWNLOAD LINKS
$config['downloads'] = array(
	'lite_client' => '#dlite',
	'full_client' => '#flite',
);

$config['community'] = array(
	'discord' => 'https://discordapp.com/widget?id=716136830399021057&theme=dark',
	'facebook' => 'SkyzoneSolutions',
);

$config['footer_links'] = array(
	'About Odin' => '#',
	'Community' => '#',
	'Rules' => $this->url('pages', 'content&path=rules'),
	'Privacy Policy' => '#',
	'Terms of Service' => $this->url('service', 'tos'),
	'Rankings' => $this->url('ranking', 'character'),
	'Donate' => $this->url('donate'),
	'Wiki' => '#',
	'Forums' => '#',
	'Information' => $this->url('server', 'info'),
);
