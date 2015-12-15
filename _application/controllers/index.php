<?php 
require_once('_core' . DS . 'Controller.php'); 

class Index extends Controller{ 
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
		$this->load_model('IndexModel'); 
	} 
	public function index(){ 
		// Load search page 
//		$this->search(); 
		$this->loadView();
	}  
	
	public function loadView(){
		$this->get_view()->render('index');	
	}
	
	public function construction(){
		$this->get_view()->render('underConstruction');	
	}
	
	public function randomTournament($sqlConn = ""){
		$sql="
			SELECT *
			FROM jos_tournaments
			ORDER BY RAND()
			LIMIT 1
		";
		if($sqlConn != ""){
			$tournaments =	$sqlConn->returnArray($sql);
		}
		return $tournaments;
	}
	
	public function recentTournament($sqlConn = ""){
		$sql="
			SELECT *
			FROM jos_tournaments
			ORDER BY id DESC
			LIMIT 1
		";
		if($sqlConn != ""){
			$tournaments =	$sqlConn->returnArray($sql);
		}
		return $tournaments;
	}
	
	public function loadAlleys($sqlConn = ""){
		$sql="
			SELECT *
			FROM jos_alleys
			ORDER BY Name ASC
		";	
		if($sqlConn != ""){
			$alleys = $sqlConn->returnArray($sql);	
		}
		return $alleys;
	}
	
	public function createDD($array = "", $id = ""){
		$output="
			<select id='".$id."'>
				<option value='noSelect'></option>
		";
		if(count($array)>0){
			for($i=0;$i<count($array);$i++){
				$output.="
					<option value='".$array[$i]['id']."'>".$array[$i]['Name']."</option>
				";	
			}
		}
		$output.="
			</select>
		";
		return $output;
	}
	
	public function loadStates($sqlConn = ""){
		$sql="
			SELECT 
				stateName AS Name,
				stateAbbreviation
			FROM tb_States
			ORDER BY stateName ASC
		";
		if($sqlConn != ""){
			$states = $sqlConn->returnArray($sql);	
		}
		
		return $states;
	}
} 

?>