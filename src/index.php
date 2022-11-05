<?php
require 'heading.php';

//home page
if(isset($_GET['home']) || count($_GET) == 0){
	htmlHeading('Home');
	include 'include/home.html';
	echo "<div class='w3-row-padding w3-padding-64 w3-container'>";
	include 'include/portfolio.html';
	echo "</div>";
	echo "<div class='w3-row-padding w3-padding-64 w3-container w3-light-grey'>";
	include 'include/about.html';
	echo "</div>";
	include 'include/contact.html';
	htmlFooter();
	}
	//resume
	else if (isset($_GET['resume'])){
		Header("Location: /content/Resume.pdf");
	}
?>


	</body>
</html>

