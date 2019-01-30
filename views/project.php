<?php
session_start();
require_once("../partials/start_body.php");
require_once("../partials/contact.php");
?>
<main class="header container-fluid p-0">
	<section class="projectnav">
		
	</section>		
	<section class="row no-gutters">
		<div id="project1demo" class="col-lg-4 demo demoMob1">
			<a href="index.php" id="navlink1" class="text-light">Hello, Welcome to my Portfolio</a>
			<a href="#" id="navlink2" class="text-light">Projects</a>
			<a href="about.php" id="navlink3" class="text-light">About</a>
			<a id="navlink4" href="#" class="text-light" onclick="openNav()">Contact</a>
				<a id="project1" class="text-light linksbtn" href="https://jonissicam.github.io/capstone1/" target="_blank">Project 1</a>
				<p class="mt-4 text-light linksbtn2">Responsive Web Design</p>
		</div>
		<div id="project2demo" class="col-lg-4 demo demoMob2">
				<a id="project2" class="text-light linksbtn" href="https://foodhub000.000webhostapp.com/" target="_blank">Project 2</a>
				<p class="mt-4 text-light linksbtn2 pr-0">E-commerce Website</p>
		</div>
		<div id="project3demo" class="col-lg-4 demo demoMob3">
				<a id="project3" class="text-light linksbtn" href="https://fast-reef-28416.herokuapp.com/" target="_blank">Project 3</a>
				<p class="mt-4 text-light linksbtn2">Using Laravel framework</p>
		</div>

	</section>
</main>
<?php require_once("../partials/footer.php"); ?>