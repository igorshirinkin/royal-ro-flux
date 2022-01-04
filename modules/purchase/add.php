<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired('Пожалуйста, авторизуйтесь, чтобы добавить вещи в корзину.');

require_once 'Flux/ItemShop.php';

$id   = $params->get('id');
$shop = new Flux_ItemShop($server);
$item = $shop->getItem($id);

if ($item) {
	$server->cart->add($item);
	$session->setMessageData("{$item->shop_item_name} вещь добавлена в Вашу корзину.");
}
else {
	$session->setMessageData("Невозможно добавить вещь в Вашу корзину.");
}

$action = $params->get('cart') ? 'cart' : 'index';
$this->redirect($this->url('purchase', $action));
?>
