<?php
$lidms = 'ml-323';
$product_name = 'Vein Stopper';
$state = 'HU';
$fullSku = '0141-911-13912';
$_POST['postage'] = '1';
$_POST['codservice'] = '0';

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']), 'https') === FALSE ? 'http' : 'https';
$host = $_SERVER['HTTP_HOST'];
$lp = $protocol .'://'. $host .dirname($_SERVER['PHP_SELF']);
$domain = $_SERVER['SERVER_NAME'];

$_POST['ordersource'] = "LPF";
$_POST['paymentmethod'] = "COD";
$_POST['product'] = "";
$_POST['ip'] = "";
$_POST['orderdate'] = date("m/d/Y H:i");
$_POST['landingpage'] = $lp;
$itemArray = ['full_sku' => $fullSku, 'quantity' => $_POST['quantity'], 'price' => $_POST['price'], 'discount' => 0];
$_POST['order_items'][] = json_encode($itemArray);


$_POST['profile'] = '426';

require_once('/var/www/sites/instanio.com/htdocs/dev/deamon/kontakt.deamon.php');



