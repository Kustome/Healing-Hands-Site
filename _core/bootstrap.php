<?php
	//Load configuration and helper functions
	//require("_core" . DS . "PDO.php");
	//require_once(ROOT . DS . '_core' . DS . 'functions.php');

	function __autoload($className){
		if(file_exists('_core' . DS . strtolower($className) . '.php')){
			require_once('_core' . DS . strtolower($className) . '.php');
		}else if (file_exists('_application' . DS . 'controllers' . DS . strtolower($className) . '.php')) { 
			require_once('_application' . DS . 'controllers' . DS . strtolower($className) . '.php'); 
		}else if (file_exists('_application' . DS . 'models' . DS . $className . '.php')) {
			require_once('_application' . DS . 'models' . DS . $className . '.php'); 
		}else if (file_exists('_core' . DS . 'PDO.php')) { 
			require_once('_core' . DS . 'PDO.php'); 
		}else{
			try{
			require_once('_application' . DS . 'controllers' . DS . 'error' . '.php'); 
			}catch(Exception $e){
				break;	
			}
		}
		
	}
	
	// Route the request
	if(isset($className)){
		Router::route($url);
	}
	
?>
