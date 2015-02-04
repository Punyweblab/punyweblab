
<!-- FOOTER -->

<div class="grid_12 omega footer_container">
				<footer>
					<div class="grid_6">
						<nav class="mobileHide">
							<ul>
								<li><a <?php echo $page['home']['link'];?> title="Home">home</a></li>
                        		<li><a <?php echo $page['about']['link'];?> title="about">about</a></li>
                        		<li><a <?php echo $page['contact']['link'];?> title="contact">contact</a></li>
							</ul>
						</nav>
						<!-- Will display only on mobile -->
						<nav class="normal_hide">
							<a <?php echo $page['home']['link'];?> >Home</a>
				 			<a <?php echo $page['about']['link'];?> >About</a>
				 			<a <?php echo $page['contact']['link'];?> >Contact</a>
						</nav>
						<!-- <P>&copy; <?php echo date("Y"); ?> Jefry Cruz All rights reserved</P>	 -->
					</div>
					<!-- social footer -->
					<div class="grid_6 omega">
						<div class="icon_container">
							<ul>
								<li>
									<a href="https://www.facebook.com/jefry.cruz.587" title="Facebook">
										<img src="img/facebook.png">
									</a>
								</li>
								<li>
									<a href="https://plus.google.com/102959001751037116816" title="Google+" target="_blank">
										<img src="img/google_plus.png">
									</a>
								</li>
								<li>
									<P>&copy; <?php echo date("Y"); ?> Jefry Cruz All rights reserved</P>
								</li>
							</ul>

						</div>

					</div>
					<!-- End of social footer -->	


				</footer>
				<!-- End of footer -->
        	</div>
	<!-- End of container div -->
	
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/cycle.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	 <!-- Cycle throught the testimonials -->
	<script type="text/javascript">
		$('#testimonials').cycle(); 
	</script>
	<!-- Reveal the naviagtion on icon click -->
	<script type="text/javascript">
		$("#nav_icon").click(function(){
 			 $(".mobile_menu").toggle("200");
 		});
	</script>
	</body>
</html>

