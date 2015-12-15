<html>
    <head>
        <?php $this->render('common/meta'); ?>
    </head>
    <body>
    <?php 
    
        $this->render('common/header'); 
		echo ("
			<style>
				.pageNotFound{
					font-weight: bold;
					font-size: 30px;
					margin-left: 2%;
					margin: 0 auto;
					width: 600px;s	
				}
				
				.mainWrapper{
					min-height: 600px;	
				}
			</style>
			<div class='mainWrapper'>
				<div class='pageNotFound'>
					Request Page was not found. <br />
					Sorry, You can go to our home page <a href='/'>here</a>.
				</div>
			</div>
		");
		$url = $_GET["url"];
		$url_array = explode("/",$url);
		$controller = isset($url_array[0]) ? $url_array[0] : ''; 
		/*
		print_r($url_array)."1<br/>";
			array_shift($url_array);
		print_r($url_array)."2<br/>"; 
			
			// The second part is the method name 
			$action = isset($url_array[0]) ? $url_array[0] : ''; 
		print_r($url_array)."2<br/>";
			array_shift($url_array); 
		print_r($url_array)."2<br/>";
		*/
		//print_r($controller);
		//print_r($action);
		print_r($url);
        $this->render('common/footer'); 
        
    ?> 
    </body>
</html>