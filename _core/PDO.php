<?php
	require_once('/_config/config.php');
	
	class SQLConn{
		
		function __construct() {
	
			$this->mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
			if ($this->mysqli->connect_errno) {
				$this->error = true;
			}
	
			$this->mysqli->set_charset("utf8");
		}
		
		function __destruct() {
			$this->mysqli->close();
		}

		
		public function Conn(){

			$sqlConnect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			return $sqlConnect;
		}
		
		public function returnArray($sql = ""){
			if($sql != ""){
				$fail = 0;
				try{
					$result = $this->mysqli->query($sql);
				}catch(exception $e){
					$returnArray = "error error: ".$e->getMessage();
					$fail = 1;	
				}
				if($fail != 1){
					for ($i = 0; $i < $result->num_rows; $i++) {
						$returnArray[] = $result->fetch_array(MYSQLI_BOTH);
					}
					// free the result to save memory
					$result->free();
				}
			}
			return  $returnArray;
		}
		
	}




?>