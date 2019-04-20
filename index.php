<?php
require 'heading.php';

if(isset($_GET['home']) || count($_GET) == 0){
	htmlHeading('Home');
?>
		<!--First Section-->
		<div class="w3-container w3-row-padding w3-padding-32 w3-two-third">
			<div class="w3-content">
				<div class="w3-third w3-center">
					<i class="fas fa-infinity w3-text-blue w3-padding-64 w3-margin-right" style="font-size:200px"></i>
				</div>
				<div class="w3-twothird w3-center">
					<h2 class="w3-xxlarge">Tutoring</h2>
					<h5>Learning Math: Done Right.</h5>
					<p class="w3-text-grey">We've all had a math teacher who made us think "Math is hard." Usually that teacher would have answered questions with "Because I said so," or "Because it just is," rather than explaining the ideas that build that lesson. All it takes is one bad teacher to start causing math trouble. When you're in math trouble, you'll fall deeper and deeper until you feel totally lost and helpless. However, help is in reach. I will help bring you up to the mathematics level you need to be at for success in High School or College. For more details, visit the tutoring page above.</p>
				</div>
			</div>
		</div>
		<!--Second Section-->
		<div class="w3-container w3-light-grey w3-row-padding w3-padding-32 w3-two-third">
			<div class="w3-content">
				<div class="w3-twothird">
					<h2 class="w3-xxlarge">Software Development</h2>
					<h5>Programming Since 2013</h5>
					<p class="w3-text-grey">When I was just 13 years old, I discovered the joy of programming. I began my software development journey with LUA, in a video game called Garry's Mod. I created a custom server in Garry's Mod that rose to moderate popularity, and lead a community of awesome individuals. I later took as many programming classes as I could in High School, and learned the fundamentals of Java and C#. Currently I am taking C++ classes at TCC, and hope to transfer and graduate with a degree in Computer Science. You can view some of the developmental projects I've worked on below.</p>
				</div>
				 <div class="w3-center w3-third">
                                        <i class="fas fa-code w3-text-blue w3-padding-64 w3-margin-left" style="font-size:200px;"></i>
                                </div> 


			</div>
		</div>
		<!--Third Section-->
		<div class="w3-container w3-row-padding w3-padding-32 w3-two-third">
			<div class="w3-content">
				<h2 class="w3-xxlarge">Projects/Portfolio</h2>
				<h5>Click to learn more about my various projects.</h2>
				<div class="w3-center w3-bar w3-blue">
					<button class="w3-bar-item w3-button" onclick="openProject('github')">GitHub</button>
					<button class="w3-bar-item w3-button" onclick="openProject('blog')">TCC Math Blog</button>
					<!--<button class="w3-bar-item w3-button" onclick="openProject('test')">Test</button> -->
					<!--Cards go here--><br><br>
				<div id="github" class="proj w3-card-4 w3-center w3-light-grey">
					<a href="https://github.com/RyanArif?tab=repositories" target="_blank"><h2 class="w3-hover-shadow w3-center">GitHub</h2></a>
					<p>My personal GitHub, containing all class work and personal projects worked on at College and beyond.</p>
				</div>
				<div id="blog" class="proj w3-card-4 w3-center w3-light-grey" style="display:none">
					<a href="https://ryanarif4.wixsite.com/makingmath" target="_blank"><h2 class="w3-hover-shadow w3-center">TCC Math Blog</h2></a>
					<p>In Spring 2019, I was required to maintain a blog as a part of a Technical English course at Tarrant County College. At first I thought it would be a drag, until I realized I would need to create a website for it. At first I took the lazy way and made it on Wix, but I have since changed my mind. I am currently working on the creation of the blog, and am excited to learn more about web development with it. Currently, the website is still hosted on Wix, though.</p>
				</div>
				<!--<div id="test" class="proj w3-card-4 w3-center w3-light-grey" style="display:none">
					<h2>Test</h2>
					<p>This is merely a test to get the buttons working.</p>
				</div>-->

				</div>
			</div>
		</div>
		<!--Final Section -->
		<div class="w3-row-padding w3-padding-64 w3-container w3-light-grey">
			 <div class="w3-content">
				 <div class="w3-third w3-center">
					<i class="fa fa-chalkboard-teacher w3-padding-64 w3-text-blue w3-margin-right" style="font-size:200px"></i>
				</div>	
				<div class="w3-twothird">
					<h1>About Me</h1>
					<h5 class="w3-padding-32">I tutor math, and develop software.</h5>
					<p class="w3-text-grey">Since I was a child, I've loved math. It wasn't just about it being an easy class for me growing up - there was more to it. I always enjoyed the complicated relationships between different numbers and objects, and math was the key to learning about them.
          When I turned thirteen, I got into programming by openning a Gary's Mod Trouble in Terrorist Town server. The game was programmed in LUA, which is where I learned to write my first functions. I would later take classes in High School where I learned to program in both Java and C#.
          Currently, I am a Mathematics/Computer Science dual major at Tarrant County College. I plan on transferring to a four year university in 2020.</p>
				</div>
			</div>
		</div>

		<div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
			 <h1 class="w3-margin w3-large">Contact Information:</h1>
			 <p>Email: ryan@ryanarif.com<br>
			 Phone: (682) 252-8940
			 <p>For tutoring inquiries: tutoring@ryanarif.com</p>
		</div>
<?php
		htmlFooter();
	} //end of home page
	else if (isset($_GET['tutoring'])){
		htmlHeading('Tutoring');
?>
		<!--First Section-->
		<div class="w3-container w3-row-padding w3-padding-32 w3-two-third">
			<div class="w3-content">
				<div class="w3-third w3-center">
					<i class="fas fa-infinity w3-text-blue" style="font-size:175px"></i>
				</div>
				<div class="w3-twothird w3-center">
					<h2 class="w3-xxlarge">Tutoring</h2>
					<h5>Learning Math: Done Right.</h5>
					<p class="w3-text-grey">We've all had a math teacher who made us think "Math is hard." Usually that teacher would have answered questions with "Because I said so," or "Because it just is," rather than explaining the ideas that build that lesson. All it takes is one bad teacher to start causing math trouble. When you're in math trouble, you'll fall deeper and deeper until you feel totally lost and helpless. However, help is in reach. I will help bring you up to the mathematics level you need to be at for success in High School or College.</p>
				</div>
			</div>
		</div>
		<!--Second Section -->
		<div class="w3-container w3-row-padding w3-padding-32 w3-two-third w3-light-grey">
			<div class="w3-content">
				<div class="w3-center">
					<div class="w3-card w3-center w3-white w3-half" style="min-height:300px;">
						<h2 class="w3-center">Hourly Rates</h2>
						<p>$17/hr Online<br>
						$25/hr In-Person<br></p>
					</div>
					<div class="w3-card w3-center w3-white w3-half" style="min-height:300px;">
						<h2 class="w3-center">Courses</h2>
						<br>Developmental Math (High School Algebra)
						<br>College Algebra (High School Algebra 2)
						<br>Pre-Calculus
						<br>Calculus 1-3
						<br>Physics
						<br>AP Calculus AB & BC
						<br>AP Physics C: Mechanics
						<br>AP Physics A<br>
					</div>
				</div>
			</div>
		</div>
		<!--Third Section-->
		<div class="w3-container w3-row-padding w3-padding-32 w3-two-third">
			<div class="w3-content">
				<div class="w3-center">
					<h1>Get Help</h1>
					<p>If you need help in any courses I offer tutoring in, do not hesitate to email me. Please include your name, phone number, the course you need help with, along with any additional information such as a class calandar.</p>
					<p><b>Email: tutoring@ryanarif.com</b></p>
				</div>
			</div>
		</div>
		<!--Final Section -->
		<div class="w3-container w3-black w3-center w3-opacity w3-padding-32">
			 <h1 class="w3-margin w3-large">Contact Information:</h1>
			 <p>Email: ryan@ryanarif.com<br>
			 Phone: (682) 252-8940
			 <p>For tutoring inquiries: tutoring@ryanarif.com</p>
		</div>
<?php
		htmlFooter();
	} //end of tutoring page
	else if (isset($_GET['resume'])){
		include 'include/resume.html';
	} //end of resume
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

