<html>
    <head>
        <?php $this->render('common/meta'); ?>
    </head>
    <body>
    <?php 
	
	$obj = new index();
    //$sqlConn = new SQLConn();
	
	//print_r($randTourney);
        $this->render('common/header'); 
		echo ("
			<style>
				.mainWrapper{
					margin-bottom: 50px;
					min-height: 500px;
					padding-top: 50px;	
				}
				
			</style>
			<div class='mainWrapper'>

				<header>
					<div class='cover-image'>
						<div class='container'>
							<div class='row'>
								<div class='col-lg-12'>
									<div class='intro-text'>
										<span class='name'>About Us</span>
										<span class='skills'></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				
			</div>
		");
        $this->render('common/footer'); 
		
    ?> 
    </body>
</html>