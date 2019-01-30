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

	$("*:not(#mySidenav)").click(function (e) {
		e.preventDefault();
	});
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "#964b15";
}