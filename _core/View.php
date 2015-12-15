<?php 
	class View{ 
		protected $variables = array(); 
		function __construct(){} 
		function set($name,$value){ 
			$this->variables[$name] = $value; 
		} 
		function render($view_name){ 
			extract($this->variables); 
			if( file_exists('_application' . DS . 'views' . DS . $view_name . '.php') ){ 
				include ('_application' . DS . 'views' . DS . $view_name . '.php'); 
			}else{
				 /* throw exception */	
				 echo("ERROR!!<br />
				 	".$view_name." <br/>
					".print_r(error_get_last())."<br/>
					after:  ".'_application' . DS . 'views' . DS . $view_name . '.php'."<br/>
				 ");
			} 
		} 
	}
?>