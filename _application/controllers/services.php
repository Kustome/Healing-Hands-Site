<?php 
require_once('_core' . DS . 'Controller.php'); 

class Services extends Controller{ 
	protected $controller; 
	
	public function __construct($controller){
		if(!isset($controller)){
			$controller = "";	
		}
		if(count($controller) == 0){
			$controller = "";
		}
		// Load core controller functions 
		parent::__construct($controller); 
		
		// Load models 
		$this->load_model('ServicesModel'); 
	} 
	public function index(){ 
		// Load search page 
//		$this->search(); 
		$this->loadView();
	}  
	
	public function loadView(){
		$this->get_view()->render('services');	
	}
	
	public function construction(){
		$this->get_view()->render('underConstruction');	
	}
	
} 

?>