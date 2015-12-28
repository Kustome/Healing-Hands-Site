<?php
	$date = getdate();

	echo("
		<style>
			.footer{
				width: 100%;
				background-color: grey;
				color: #FFFFFF;
				clear: both;
			}
			
			.companyName{
				margin: 0 auto;
				width: 100%;
				text-align: center;
				padding: 5px 0px 5px 0px;
			}
			
			.footerLinks{
				padding-top: 10px;
				font-size: 18px;
				text-align: center;
			}
			
			.link{
				display: inline-block;	
				text-decoration: underline;
				cursor: pointer;
			}
			
			.link:hover{
				text-decoration: none;
				cursor: hand;
			}
			
		</style>
			</div>
		");
	?>
    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Social</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        HHCaringHeartsLLC.com - <?= $date['year']; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

    <!-- jQuery -->
    <script src="_js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="_js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="_js/classie.js"></script>
    <script src="_js/cbpAnimatedHeader.js"></script>
    <script src="_js/freelancer.js"></script>









