<?php
require_once("../partials/start_body.php");
require_once("../partials/navbar.php");
require_once("../partials/contact.php");
?>
<main class="container">
	<section class="row text-center">
		<div class="col-lg-12">
			<img class="profile img-fluid" src="../images/profile.jpg">
		</div>
	</section>

	<section id="skills" class="row no-gutters mt-4 p-4 rounded">
		<div class="col-lg-4">
			<div class="row no-gutters">
				<div class="col-md-4 col-4 p-0">
					<img class="img-fluid" src="../images/html.png" style="width: 90px;">
				</div>
				<div class="col-md-8 col-8 p-0 mt-4">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;"></div>
					</div>				
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-4 col-4 p-0">
					<img class="img-fluid" src="../images/css.svg" style="width: 70px;">
				</div>
				<div class="col-md-8 col-8 p-0 mt-4">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;"></div>
					</div>				
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-md-4 col-4 p-0">
					<img class="img-fluid" src="../images/javascript.png" style="width: 70px;">
				</div>
				<div class="col-md-8 col-8 p-0 mt-4">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;"></div>
					</div>				
				</div>
			</div>	
			<div class="row no-gutters">
				<div class="col-md-4 col-4 p-0">
					<img class="img-fluid" src="../images/php.png" style="width: 70px;">
				</div>
				<div class="col-md-8 col-8 p-0 mt-4">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;"></div>
					</div>				
				</div>
			</div>	
			<div class="row no-gutters">
				<div class="col-md-4 col-4 p-0">
					<img class="img-fluid" src="../images/laravel.png" style="width: 150px;">
					<h4 class="text-center text-light">laravel</h4>
				</div>
				<div class="col-md-8 col-8 p-0 mt-4">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;"></div>
					</div>				
				</div>
			</div>			
			<!-- <div class="row no-gutters">
				<div class="col-md-4 col-4 p-0">
					<img class="img-fluid" src="../images/arduino.png" style="width: 150px;">					
				</div>
				<div class="col-md-8 col-8 p-0 mt-4">
					<div class="progress">
						<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;"></div>
					</div>				
				</div>
			</div>	 -->		
			

		</div>
		<div class="col-lg-8 text-light text-center">
			<p>Hello,my name is Jonis Bryan Sicam and I'm a Full Stack Web Developer.</p>
			<p>I was born in Dasmariñas, Cavite</p>
			<p>I graduated at Technological University of the Philippines-Cavite</p>
			<a class="btn btn-outline-light" onclick="openNav()">Contact</a>
			<a class="btn text-light" href="./project.php">View projects</a>
		</div>
	</section>
</main>
<?php require_once("../partials/footer.php") ?>