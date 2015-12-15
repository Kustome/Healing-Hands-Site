<?php
	global $userSession;
	global $menu;
	session_start();
	$userSession = "";
	
	$menu = false;
	
	if($_GET['l']== 1){
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
		
		header('Location: http://www.tourneybowl.com/admin');
		$menu = false;
	}else{
		if($_SESSION['userSession']){
			$_SESSION['LAST_ACTIVITY'] = time();
			$menu = true;	
		}
	}

?>