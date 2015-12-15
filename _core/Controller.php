<?php 
require_once('_core' . DS . 'Application.php'); 
require_once('_core' . DS . 'View.php'); 
	class Controller extends Application{ 
		protected $controller;  
		protected $models; 
		protected $view; 
		public function __construct($controller){ 
			parent::__construct(); 
			$this->controller = $controller; 
			$this->view = new View(); 
		} 
		// Load model class 
		protected function load_model($model){ 
			if(class_exists($model)){ 
				$this->models[$model] = new $model(); 
			}	
		} 
		// Get the instance of the loaded model class 
		protected function get_model($model){ 
			if(is_object($this->models[$model])){ 
				return $this->models[$model]; 
			}else{ 
				return false; 
			} 
		} 
		// Return view object 
		protected function get_view(){
			return $this->view; 
		} 
	}

?>