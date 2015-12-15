<html>
    <head>
        <?php $this->render('common/meta'); ?>
        <style>
			.mainWrapper{
				background-image: url('_images/5.jpg');
			}
		</style>
    </head>
    <body>
    <?php 
    
        $this->render('common/header'); 
		echo ("
			<div class='mainWrapper'>
				<div class='constructionMsg'>
					Under Construction - Sorry for our Mess.
				</div>
			
			</div>
		");
        $this->render('common/footer'); 
        
    ?> 
    </body>
</html>