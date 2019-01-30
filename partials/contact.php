<div id="mySidenav" class="sidenav col-lg-12 bg-dark text-light">
			<h4 id="comfirmation" class="ml-5 text-success small"></h4>
			<div class="d-flex">
				<h3 class="flex-grow-1 ml-3">Hello! Let's share our ideas together.</h3>
				<a href="javascript:void(0)" onclick="closeNav()" class="closebtn text-light text-decoration-none mr-3">&times;</a>
			</div>
			<form method="POST" action="../controllers/email.php">
				<div class="form-inline">
					<div class="form-group m-3">
						<input id="fname" class="col-12 contactform form-control" type="text" name="fname" placeholder="First Name">
					</div>
					<div class="form-group ml-3">
						<input id="lname" class="col-12 contactform form-control" type="text" name="lname" placeholder="Last Name">
					</div>
				</div>				
				<div class="form-group m-3">
					<input id="email" class="contactform form-control" type="email" name="email" placeholder="Email Address">
				</div>
				<div class="form-group m-3">
					<textarea id="message" class=" contactform form-control" type="text" name="message" placeholder="Message"></textarea>
					<span id="messageblank" class="text-danger small"></span>
				</div>
				
				<button id="contactBtn" type="submit" class="btn btn-outline-light ml-3">Send Message</button>
				<a href="../images/resume.pdf" class="text-light textdl" download>Download Resume</a>
			</form>
		</div>