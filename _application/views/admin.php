<?php
	require('_include/sysProtect.php');

	global $menu;
?>

<html>
    <head>
        <?php $this->render('common/meta'); ?>
    </head>
    <body>
    <?php 

        $this->render('common/headerAdmin'); 
		
		echo ("
			<style>
				body{
					background-image: none;
					background-color: black;	
				}
				
				.mainWrapper{
					min-height: 600px;	
				}
				
				.lineInput{
					padding: 4px;	
				}
				
				.loginWrapper{
					background-color: #3b5680;
					color: #FFFFFF;
					width: 10%;
					padding: 10px;
					border-radius: 6px;
					margin: 0 auto;
				}
				.lineTitle{
					font-weight: bold;
					font-size: 14px;	
				}
				
				.stdBtn{
					margin: 0 auto;	
					text-align: center;
				}
				
				.filler{
					height: 10px;
					width: 10px;	
				}
				
				#loginRsp{
					display: none;
					width: 300px;
					margin: 0 auto;
					color: #FFFFFF;
					margin-bottom: 5px;
				}
			</style>
			<div class='mainWrapper'>
			WELCOME ".USER."
		");
		if($menu != true){
			echo("
				<div id='loginRsp'>
				
				</div>
				<div class='loginWrapper'>
					<div class='line'>
						<div class='lineTitle'>
							UserName:
						</div>
						<input type='text' class='lineInput' id='username' />
					</div>
					<div class='line'>
						<div class='lineTitle'>
							Password:
						</div>
						<input type='password' class='lineInput' id='userpass'/>
					</div>
					<div class='filler'>
					
					</div>
					<div class='stdBtn' onclick='checkLogin()'>
						Login
					</div>
				</div>
			");
		}else{
			echo("
				<div class='adminMenuWrapper'>
					<div class='link'>
						<a href='http://www.tourneybowl.com/admin'>Home</a>
						<a href='' onclick='logout()'>Logout</a>
					</div>
				</div>
			");
		}
		echo("
			</div>
		");
        $this->render('common/footer'); 
        
    ?> 
    </body>
</html>