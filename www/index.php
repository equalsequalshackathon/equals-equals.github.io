<!DOCTYPE html>
<html>
<head>
	<title>EqualsEquals Hackathon</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="An annual hackathon at the University of Maryland that promotes diversity in tech">
	<meta name="keywords" content="equals equals,diversity in tech,equality,hackathon,hackathons,university of maryland,college park hackathons,diversity">
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/scrolling.js"></script>
	<link rel="stylesheet" href="styles/front-page.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/people.css">
	<link rel="icon" href="images/earth.ico">
</head>
<body>
	<?php include("components/navbar.php");?>
	<div class="container content">
		<?php include("components/logo-space.php");?>
		<div class="row" style="text-align:center">
			<?php include("components/register.php");?>
			<img class="person waving" src="people/waving.svg">
		</div>

		<!-- About -->
		<div class="row content-box" id="about">
			<h1>EqualsEquals Hackathon</h1>
			<span>(What is EqualsEquals?)</span>
			<div class="about-columns">
				<div><div>
					<img class="icon" src="images/laptop.svg"><br>
					<p>
						Equals Equals is a new kind of hackathon meant to introduce and expose underrepresented minorities to careers in technology and entrepreneurship.
						It's kind of like if a design sprint and a hackathon had a baby, and its name was Equals Equals.
					</p>
				</div></div>
				<div><div>
					<img class="icon" src="images/send.svg"><br>
					<p>
						Community and inclusion breeds innovation, excitement, and motivation to solve some pretty tough problems.
					</p>
				</div></div>
				<div><div>
					<img class="icon" src="images/public.svg"><br>
					<p>
						Our hope is that this event will not only get underrepresented groups excited about technology and it's capabilities, but also about the impact it can have on the issues and communities that they are most passionate about.
					</p>
				</div></div>
			</div>
			<p>EqualsEquals was founded by our benevolent ruler Sean:</p>
			<img src="images/sean.jpg" style="border-radius:25px;height:200px;width:auto">
			<p>
				Do you like data?
				Well here's some <a href="stats">stats</a> about last year's event for all the data scientists out there
			</p>
		</div>

		<div class="row content-box" id="schedule">
			<img class="content-icon" src="images/schedule.svg" title="Make time for EqualsEquals!">
			<h1>Schedule</h1>
			<p>
				Here's our official schedule for the 2019 EqualsEquals hackathon event (but it's still being finalized):
			</p><br>
			<?php include("components/schedule.php");?>
			<img class="person nicholas-lugo" src="people/nicholas-lugo.svg">
			<img class="person computer" src="people/computer.svg">
			<img class="person black-girl" src="people/black-girl.svg">
		</div>

		<div class="row content-box" id="staff">
			<h1>Staff</h1>
			<span>(The nerds who made this possible)</span>
			<?php include("components/profiles.php");?>
			<img class="person thumbs-up" src="people/thumbs-up.svg">
			<img class="person sleeping" src="people/sleeping.svg">
			<img class="person redhead" src="people/redhead.svg">
		</div>

		<div class="content-box" id="sponsors">
			<img class="content-icon" src="images/thumb_up.svg" title="Thank you sponsors!">
			<h1>Sponsors</h1>
			<span>(And now a word from our sponsors)</span>
			<h2>Top donations:</h2>
			<div>
				<img class="sponsor" src="sponsor-logos/google.png">
				<img class="sponsor" src="sponsor-logos/facebook.png">
				<img class="sponsor" src="sponsor-logos/capital-one.png">
				<img class="sponsor" src="sponsor-logos/accenture.png">
			</div>
			<br>
			<span>Or click <a href="sponsors">here</a> to see our full sponsors list</span>
			<img class="person asian-girl" src="people/asian-girl.svg">
			<img class="person mouse" src="people/mouse.svg">
			<img class="person java" src="people/java.svg">
		</div>

		<div class="row content-box" id="contact">
			<h2 style="text-align:center;margin-top:20px">Find us on social media!</h2>
			<?php include("components/social-media.php");?>
			<img class="person laptop" src="people/laptop.svg">
			<img class="person meditating" src="people/meditating.svg">
		</div>

		<?php include("components/footer.php");?>
	</div>
</body>
</html>
