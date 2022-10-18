<?php 
	require_once('/var/www/sites/footer/functions/cSwitch.php');
	require_once('/var/www/sites/gfxcdn.com/htdocs/'. getCC(jslang()).'/js/js_translation.php');
	header("Content-type: text/javascript; charset: UTF-8");
	//include_once "../index.php"; 
?>

if (getPersiranje == 1)
	{ var _lang= <?php echo json_encode($_lang3); ?> }

else if (getPersiranje == 2)
	{ var _lang= <?php echo json_encode($_lang2); ?> }

else if (typeof getPersiranje != 'undefined' || getPersiranje == 3)
	{ var _lang= <?php echo json_encode($_lang); ?> }
