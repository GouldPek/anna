<? php('_JEXEC') or die ('Direct Access to '.basename (__FILE__).' is not allowed.');
/*if (! class_exists('VmConfig')) {(JPATH_ADMINISTRATOR. DS. 'components'. DS. 'com_virtuemart'.DS.'helpers'.DS.'config.php');}
//VmConfig:loadConfig();:jPrice();:cssSite();*/
$jsVars = ' jQuery(document).ready (function() {(».vmCartModule»).productUpdate();
});';(! class_exists('VmConfig')) require (JPATH_ADMINISTRATOR. DS. 'components'. DS. 'com_virtuemart'.DS.'helpers'.DS.'config.php');(! class_exists('VirtueMartCart')) require (JPATH_VM_SITE.DS.'helpers'.DS.'cart.php');
$cart = VirtueMartCart:getCart(false);
$data = $cart->prepareAjaxData();
$lang = JFactory:getLanguage();
$extension = 'com_virtuemart';
$lang->load($extension); // when AJAX it needs to be loaded manually here >> in case you are outside virtuemart!!!($data->totalProduct>1) $data->totalProductTxt = JText:sprintf ('COM_VIRTUEMART_CART_X_PRODUCTS', $data->totalProduct);if ($data->totalProduct == 1) $data->totalProductTxt = JText:_('COM_VIRTUEMART_CART_ONE_PRODUCT');$data->totalProductTxt = JText:_('COM_VIRTUEMART_EMPTY_CART');(false && $data->dataValidated == true) {
$taskRoute = '&task=confirm';
$linkName = JText:_('COM_VIRTUEMART_CART_CONFIRM');
} else {
$taskRoute = «;
$linkName = JText:_('COM_VIRTUEMART_CART_SHOW');
}
$useSSL = VmConfig:get ('useSSL', 0);
$useXHTML = true;
$data->billTotal = $lang->_('COM_VIRTUEMART_CART_TOTAL').': <strong>'. $data->billTotal.'</strong>';:jQuery();:jPrice();:cssSite();
$document = JFactory:getDocument();
$moduleclass_sfx = $params->get ('moduleclass_sfx', «);
$show_price = (bool)$params->get ('show_price', 1); // Display the Product Price?
$show_product_list = (bool)$params->get ('show_product_list', 1); // Display the Product Price?
/* Laod tmpl default */(JModuleHelper:getLayoutPath ('mod_virtuemart_cart'));
?>
