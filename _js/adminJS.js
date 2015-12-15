	function checkLogin(){
		var userName = document.getElementById('username').value;
		var userPass = document.getElementById('userpass').value;
		
		if(userName.length == 0 || userPass.length == 0){
			loginRsp = document.getElementById('loginRsp');
			loginRsp.style.display = "block";
			loginRsp.innerHTML = 'The Username and/or Password you entered was incorrect.';
			userPass.value = "";
		}else{
			//xmlhttp.request('/_include/jsonFunctionLibrary.php');	
			xmlhttp = new XMLHttpRequest();
			xmlhttp.open("POST", "/_include/jsonFunctionLibrary.php?f=check&userName="+userName+"&userPass="+userPass, true);
			xmlhttp.send();
			xmlhttp.onreadystatechange = function (){
				//alert('its here');
				//document.getElementById('loginRsp').innerHTML = xmlhttp.response;
				alert(xmlhttp.response);
				if(xmlhttp.response == "Success"){
						
				}	
			}
		}
	}
	
	function logout(){
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("POST", "/_include/jsonFunctionLibrary.php?f=logout", true);
		xmlhttp.send();
		xmlhttp.onreadystatechange = function (){
			//maybe reload page from here? 	
		}
	}