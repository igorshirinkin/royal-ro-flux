<?php require_once(FLUX_ADDON_DIR . "/skyzone/modules/main/index.php"); #Skyzone Configure

# define the source of navbar data source
# 0 = as defined in flux's config/application.php
# 1 = use this config file.
$config['navbar_source'] = 1;

//error_reporting(0);
$config['server_name'] = "Royal Ragnarok";
$config['server_introduction'] = "Добро пожаловать в Ragnarok Online - легендарную игру. ";
$config['server_sub_intro'] = "MMORPG Ragnarok Online";


// $ONLINE = $info['players_online'];

// if ($ONLINE == 0) {
// 	$config['status_online'] = array('./img/7427.png');
// 	$config['online'] = array($ONLINE);
// } else {
// 	$config['status_online'] = array('./img/7429.png');
// 	$config['online'] = array($ONLINE);
// }


#define custom navigation instead of using flux
if ($session->isLoggedIn()) {
	#display to user already login
	$config['nav_panel'] = array(
		array(
			'Мой аккаунт',
			'',  //USE ONLY FOR MODAL
			$this->url('account', 'view'),
		),
		array(
			'Выйти',
			'',
			$this->url('account', 'logout'),
		),

	);
} else {
	$config['nav_panel'] = array(
		array(
			'Логин',
			'',
			$this->url('account', 'login'),
		),
		array(
			'Регистрация',
			'',
			$this->url('account', 'create'),
		),

	);
}

#display to user who not login
if (!($params->get('module') === 'main' && $params->get('action') === 'index')) {
	$config['div_class'] = array(
		'div_value' => 'mymain2',
	);
} else {
	$config['div_class'] = array(
		'div_value' => '',
	);
}

if (!($params->get('module') === 'main' && $params->get('action') === 'index')) {
	$config['nav_index'] = array(
		array(
			'',
			'',
			$this->url('main'),
			'Главная',
		),
		array(
			'',
			' ',
			$this->url('donate'),
			'Пожертвования',
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
			'Информация о сервере',
		),
	);
} else {
	$config['nav_index'] = array(
		array(
			'current',
			'smoothscroll',
			'#home',
			'Главная',
		),
		array(
			'',
			'smoothscroll',
			'#information',
			'О сервере',
		),
		array(
			'',
			'smoothscroll',
			'#donation',
			'Пожертвования',
		),
		array(
			'',
			'smoothscroll',
			'#shop',
			'Магазин',
		),
		array(
			'',
			'smoothscroll',
			'#download',
			'Загрузки',
		),
	);
}

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
