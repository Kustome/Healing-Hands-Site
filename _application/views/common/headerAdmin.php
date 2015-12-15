<?php
	include('/_js/adminJS.js');
	echo("
		<script src='/_js/adminJS.js' type='text/javascript'/></script>
		<style>
			body{
				background-image:url('_images/backgroundOpt.jpg');
			}
		
			.button{
				cursor: pointer;
				font-size: 24px;
				display: inline-block;
				color: #3b5680;
				margin-right: 20px;
				text-decoration: none;
			}
			
			.button:hover{
				text-decoration: underline;
				font-size: 23px;	
			}
			
			.buttons{
				display: inline-block;		
				text-align: right;
				width: 55%;
			}
			
			.mainMenu{
				width: 100%;
				border-bottom: 1px solid #3b5680;
				righ	
			}
			
			.adminLogo{
				font-size: 30px;
				font-weight: bold;
				color: #3b5680; 	
				display: inline-block;
			}
			
			.logo{
				
			  background-image: url('_images/logo.png');
			  background-repeat: no-repeat;
			  height: 96px;
			  background-size: 100px 96px;
			  width: 100px;
			  display: inline-block;
			}
			
		</style>
		<div class='mainMenu'>
			<div id='logo' class='logo'>
			</div>
			<div class='adminLogo'>
				- ADMIN
			</div>
			<div class='buttons'>
				
			</div>
		</div>
		<div class='mainBody'>
	");



?>