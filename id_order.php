<?php
$title = 'Vein Stopper';
$comment_gender = ''; // Check language !
$certificate = 'no'; // Always no for mobile pages (cert image for mobile is centralized)
$bottomButton = 'Kattints ide, hogy örökre eltávolitsd a viszereket, veszélyes és fájdalmas operációk nélkül!';
$cCode = 'HU';
$persiranje = '0';
$product = 'Vein Stopper';
$fullsku = '0141-911-13912';
$pCode = '141-911';
$nCode = '141-911-vein';
$rating = '';


$price_01 = '12090';

include_once '/var/www/sites/footer/functions/priceDecrypt.php';
$ip='';
if (getenv("HTTP_CLIENT_IP")){
    $ip = getenv("HTTP_CLIENT_IP");
}
else if(getenv("HTTP_X_FORWARDED_FOR")){
    $ip = getenv("HTTP_X_FORWARDED_FOR");
}
else if(getenv("REMOTE_ADDR")){
    $ip = getenv("REMOTE_ADDR");
}
else{
$ip = "127.0.0.1";
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><?php
echo '<script type="text/javascript">var uIp = "'.$ip.'"</script>';
echo '<script type="text/javascript">var pId = "'.substr($fullsku, -4).'"</script>';
echo '<script type="text/javascript">var mlId = "'.$mailstormId.'"</script>';
echo '<script type="text/javascript">var pflId = "'.$profileId.'"</script>';