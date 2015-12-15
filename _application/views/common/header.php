<?php
	echo("
		<style>
			body{
				background-color: #ffeffa;
			}
		
			.button{
				cursor: pointer;
				font-size: 24px;
				display: inline-block;
				color: #3b5680;
				margin-right: 20px;
				text-decoration: none;
			}
			
			.mainMenu{
				min-height: 100px;	
				background-color: #f882d2;
				display: table;
			}
			
			.button a:visited{
				color: #FFFFFF;
				text-decoration: none;
			}
			
			.button a{
				text-decoration: none;	
				color: #FFFFFF;
			}
			
			
			.button:hover{
				text-decoration: underline;
				font-size: 23px;	
			}
			
			.buttons{
				display: table-cell;		
				vertical-align: middle;
			}
			
			.mainMenu{
				width: 100%;
				border-bottom: 1px solid #3b5680;
				righ	
			}
			
			.logo{
			  background-image: url('_images/Logo.png');
			  background-repeat: no-repeat;
			  height: 108px;
			  background-size: 120px 108px;
			  width: 120px;
			  display: inline-block;
			  margin-right: 100px;
			  margin-left: 40px;
			}
			
		</style>
		  <!-- Navigation -->
    <nav class='navbar navbar-default navbar-fixed-top'>
        <div class='container'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header page-scroll'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <div class='house-logo'>
                    <div id='heart'></div>
                </div>
                <a class='navbar-brand brand-logo' href='#page-top'>Healing Hands</a>
            </div>
            <div class='contact-links'>
                <span class='glyphicon glyphicon-phone-alt' aria-hidden='true'> 620-308-0277</span>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav navbar-right'>
                    <li class='hidden'>
                        <a href='#page-top'></a>
                    </li>
                    <li class='page-scroll'>
                        <a href='/newSite/Reviews'>Reviews</a>
                    </li>
                    <li class='page-scroll'>
                        <a href='/newSite/Gallery'>Gallery</a>
                    </li>
                    <li class='page-scroll'>
                        <a href='/newSite/Services'>Services</a>
                    </li>
                    <li class='page-scroll'>
                        <a href='/newSite/About'>About</a>
                    </li>
                    <li class='page-scroll'>
                        <a href='/newSite/Contact'>Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
		<div class='mainBody'>
	");



?>