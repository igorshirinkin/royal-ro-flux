<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

if (!$auth->allowedToManageCashShop) {
	$this->deny();
}
$title = 'Modify Item in the CashShop';

require_once 'Flux/TemporaryTable.php';
require_once 'Flux/CashShop.php';

$shopItemID  = $params->get('id');
$shop        = new Flux_CashShop($server);
$tabs        = Flux::config('CashShopCategories')->toArray();
$item        = $shop->getItem($shopItemID);

if ($item) {
	if($server->isRenewal) {
		$fromTables = array("{$server->charMapDatabase}.item_db_re_compat", "{$server->charMapDatabase}.item_db2_re_compat");
	} else {
		$fromTables = array("{$server->charMapDatabase}.item_db_compat", "{$server->charMapDatabase}.item_db2_compat");
	}
	$tableName = "{$server->charMapDatabase}.items";
	$tempTable = new Flux_TemporaryTable($server->connection, $tableName, $fromTables);

	$col = "id AS item_id, name_japanese AS item_name, type";
	$sql = "SELECT $col FROM $tableName WHERE items.id = ?";
	$sth = $server->connection->getStatement($sql);

	$sth->execute(array($shopItemID));
	$originalItem = $sth->fetch();

	if (count($_POST)) {
		$tab    = $params->get('tab');
		$price  = (int)$params->get('price');

		if (!$price) {
			$errorMessage = 'You must input a cash point cost greater than zero.';
		} else {
			if ($shop->edit($shopItemID, $tab, $price)) {
				$session->setMessageData('Item has been successfully modified.');
				$this->redirect($this->url('cashshop'));
			} else {
				$errorMessage = 'Failed to modify the item.';
			}
		}
	}

	if (empty($tab)) {
		$tab = $item->shop_item_tab;
	}
	if (empty($price)) {
		$price = $item->shop_item_price;
	}
}

?>
