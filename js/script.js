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
  document.getElementById("mySidenav").style.width = "800px";
document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.body.style.backgroundColor = "#964b15";
}