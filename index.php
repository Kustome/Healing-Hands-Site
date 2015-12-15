<?php
	//Directory separator is set up here becuase separators are different on Linux and Windows operating systems.
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', dirname(dirname(__FILE__)));
	define('DEVELOPMENT_ENVIRONMENT', false);
	$url = $_GET["url"];
	require_once('_core' . DS . 'bootstrap.php');
	require_once('_config' . DS . 'config.php');
	include('_css/main.css');
	$construction = false;
	try{
		//$sqlConnect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	}catch(exception $e){
		echo 'Connection Failed: ' . $e->getMessage();	
	}
	
	$url_array = explode("/",$url);
	$url = $url_array[0];

	array_shift($url_array);
	
	if(isset($url_array[0])){
		$action = $url_array[0];
		array_shift($url_array);
	}
	
	if(isset($url_array[0])){
		$url_vars = $url_array[0];
	}else{
		$url_vars = "";	
	}
	
	
	if($url==""){
		$url = "index";	
	}elseif($url=="test" || $url == "admin"){
		if($url == "admin"){
			$url = "admin";	
		}else{
			$url = "index";			
		}
		$construction = false;
	}
	if(strpos($url, "/")){
		$url = str_replace("/", "", $url);	
	}
	//checking if the requested page has a class that exists
	if(class_exists($url)){
		if($construction){
			$obj = new index('index');
			$obj->construction();
		}else{
			$obj = new $url($url);
			if(isset($action)){
				//$obj->$action($url_vars);
			}else{
				$obj->index();	
			}
		}

	}else{
		$url = 'error';	
		$obj = new $url($url);
		$obj->index();
	}
?>