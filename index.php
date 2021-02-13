<?php
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL); -->
	include "./smarty-3.1.38/libs/Smarty.class.php";
	// create object
	$smarty = new Smarty;
	// display it
	$smarty->display('index.tpl');

	//echo "this webpage is use to view todo list datas";
?>