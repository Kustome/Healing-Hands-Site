<?php
	$AJAX = true;
	$COMPATIBILITY_MODE = true;
	//include('../_core/bootstrap.php');
	include('../_core/PDO.php');
	$SQLConn = new SQLConn();
	
//Account Function Library
if($_REQUEST['f']){
	$function = $_REQUEST['f'];
	if(function_exists($function)){
		$function($SQLConn);
	}
}
//==========================================================[All]===============================================
function check($SQLConn){
	
	// Maybe use another time
	/*
	$sessionKey = "";
	$SQL="
		SELECT 
			US.LastActive,
			U.FirstName,
			U.LastName,
			U.ProfilePicture
		FROM UserSessions AS US
			INNER JOIN Users AS U ON US.UserPkey = U.UserPkey
		WHERE US.SessionKey = '".$sessionKey."'
	";
	*/
	
	session_start();
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
		// last request was more than 30 minutes ago
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
	}
		
	if($_SESSION['userSession']){
		$error = false;
	}else{
		$error = true;
		$_SESSION['userSession'] = true;
	}
	
	if($error == false){
		$act = checkAccount($SQLConn);
		
		if($act == true){
				$return = ($error == true? "Error" : "Success");
				$_SESSION['LAST_ACTIVITY'] = time();// update last activity time stamp
		}else{
			$return = "Error";	
		}
	}
	echo $return; 	
}

function checkAccount($SQLConn){
	$SQL="
		SELECT 
			pKey,
			firstName
		FROM tb_Users
		WHERE email = '".$userName."' AND password = '".$userPass."'
	";
	try{
		$return = true;
		$user = $SQLConn->returnArray($SQL);
		define('USER', $user[0]['firstName']);
	}catch(Exception $e){
		$return = false;	
	}
	
	return $return;
}

function loadSelect($var = "", $SQLConn){
		if($var == "state"){
				$sql="
					SELECT 
						stateName,
						stateAbbreviation
					FROM tb_States
					ORDER BY stateName ASC
				";
				$states = $SQLConn->returnArray($sql);
				$output.="
					<select>
				";
				for($a=0;$a<count($states);$a++){
					$output.="
							<option value='".$states[$a]['stateName']."'>".$states[$a]['stateName']."</option>
					";	
				}
				$output.="
					</select>
				";
		}else if ($var == "alley"){
			
		}else if ($var == "date"){
			
			
		}
}

function logout(){
	session_start();
	
	session_unset();
	session_destroy();	
}

?>