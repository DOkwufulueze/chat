<?php
	$page=!isset($_GET['pg'])?"home":$_GET['pg'];
	if($page=="logout"){
		include("class.php");
		chat::logout();
		break;
	}
	else{
		switch($page){
			case $page:
			include($page.".php");
			break;
			
			default:
			include("home.php");
			break;
		}
	}
?>