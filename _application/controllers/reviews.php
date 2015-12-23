<?php 
require_once('_core' . DS . 'Controller.php'); 

class Reviews extends Controller{ 
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
		//$this->load_model('CategoryModel'); 
		$this->load_model('ReviewsModel'); 
	} 
	public function index(){ 
		// Load search page 
//		$this->search(); 
		$this->loadView();
	}  
	
	public function loadView(){
		$this->get_view()->render('reviews');	
	}
	
	public function construction(){
		$this->get_view()->render('underConstruction');	
	}
	
} 

?>