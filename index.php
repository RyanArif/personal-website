<?php
require 'heading.php';

//home page
if(isset($_GET['home']) || count($_GET) == 0){
	htmlHeading('Home');
	include 'include/home.html';
		htmlFooter();
	}
	//tutoring page
	else if (isset($_GET['tutoring'])){
		htmlHeading('Tutoring');
		include 'include/tutoring.html';
		htmlFooter();
	}
	//resume
	else if (isset($_GET['resume'])){
		include 'include/resume.html';
	}
	//portfolio (see: https://github.com/RyanArif/TCC-Webfolio) for the actual project.
	//this only checks if the user puts in something stupid like ?portfolio and sends them to the right place.
	else if (isset($_GET['portfolio'])){
		Header("Location: /portfolio");
	}
?>
	<script>
		//This dude is for the tabs in projects.
		function openProject(projName)
			{
				var i;
				var x = document.getElementsByClassName("proj");
				for (i=0; i<x.length; i++)
					x[i].style.display = "none";
				document.getElementById(projName).style.display = "block";
			}
		//This dude is for the sidebar on mobile
		//Didn't know JS at the time of writing this, and how easy this function is, but this is taken from w3 schools.
		function w3_open()
		{
			document.getElementById("sidebar").style.display = "block";
		}
		function w3_close()
		{
			document.getElementById("sidebar").style.display = "none";
		}
	</script>
	</body>
</html>

