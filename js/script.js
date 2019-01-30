$(document).ready(function () {
	$("#project1").hover(
	function () {
		$("#project1demo").addClass("demo1");
	},function () {
		$("#project1demo").removeClass("demo1");
	});

	$("#project2").hover(
	function () {
		$("#project2demo").addClass("demo2");
	},function () {
		$("#project2demo").removeClass("demo2");
	});

	$("#project3").hover(
	function () {
		$("#project3demo").addClass("demo3");
	},function () {
		$("#project3demo").removeClass("demo3");
	});

	$("#project4").hover(
	function () {
		$("#project4demo").addClass("demo4");
	},function () {
		$("#project4demo").removeClass("demo4");
	});

	$("#closebtn").click(function () {
		$("#contact").hide();
		alert("try");
	});

});

	/* Set the width of the side navigation to 250px */
function openNav() {
	if (window.matchMedia("(max-width: 600px)").matches) {
	document.getElementById("mySidenav").style.width = "100%";
	document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
	}else if(window.matchMedia("(min-width: 601px) and (max-width: 768px)").matches){
		document.getElementById("mySidenav").style.width = "400px";
	document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
	}else if(window.matchMedia("(min-width: 769px) and (max-width: 1024px)").matches){
		document.getElementById("mySidenav").style.width = "600px";
	document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
	}else if(window.matchMedia("(min-width: 1025px) and (max-width: 1439px)").matches){
		document.getElementById("mySidenav").style.width = "800px";
	document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
	}else if(window.matchMedia("(min-width: 1440px) and (max-width: 2559px)").matches){
		document.getElementById("mySidenav").style.width = "700px";
	document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
	}else{
		document.getElementById("mySidenav").style.width = "500px";
	document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
	}

}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "#964b15";
}

// function messageMe() {
// 	let fname = $("#fname").val();
// 	let lname = $("#lname").val();
// 	let email = $("#email").val();
// 	let message = $("#message").val();

// 	let errors = 0;

// 	if (message == "") {
// 		$("#messageblank").next().text("Please provide valid message");
// 		errors++;
// 	}else{
// 		$("#messageblank").next().text("");
// 	}

// 	if (errors > 0) {
// 		return false;
// 	}else{
// 		return true;
// 	}
// }

// $("#contactBtn").on("click", function () {
// 	if (messageMe()) {
// 	let fname = $("#fname").val();
// 	let lname = $("#lname").val();
// 	let email = $("#email").val();
// 	let message = $("#message").val();

// 		$.ajax({
// 			url:"../controllers/email.php",
// 			type:"POST",
// 			data:{
// 				"fname":fname,
// 				"lname":lname,
// 				"email":email,
// 				"message":message,
// 			},
// 			"success": function (dataFromController) {
// 				if (dataFromController == "success") {
// 					$("#confirmation").text("Message Successfully sent!");
// 				}else{
// 					$("#confirmation").removeClass("text-success").addClass("emailfail");
// 					$("#confirmation").text("Message did not send. Please try again.");
// 				}
// 			}
// 		})
// 	}
// })
