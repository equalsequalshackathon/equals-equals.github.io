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
		<div class="logo-space">
		  <img src="images/banner.svg">
		</div>
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
			<h2>History</h2>
			<div class="history">
				<div>
					<img src="images/sean.jpg" title="Sean Brown">
					<p>
						EqualsEquals was founded by our benevolent ruler Sean
					</p>
				</div>
				<div>
					<img src="images/sean.jpg" title="Alex Lugo">
					<p>
						But now it's run by me, Alex
					</p>
				</div>
			</div>
			<p>
				Do you like data?
				Well here's some <a href="stats">stats</a> about last year's event for all the data scientists out there
			</p>
		</div>

		<!-- Schedule -->
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

		<!-- Staff -->
		<div class="row content-box" id="staff">
			<h1>Staff</h1>
			<span>(The nerds who made this possible)</span>
			<div class="profiles">
				<div>
					<h2>President</h2>
					<img src="profiles/alex-lugo.svg" title="Alex Lugo">
					<h2>Alex Lugo</h2>
				</div>
				<div>
					<h2>Treasurer</h2>
					<img src="profiles/alex-lugo.svg" title="Alex Lugo">
					<h2>Saman Jabari</h2>
				</div>
				<h2>Staff</h2>
				<div>
					<img src="profiles/kelly-ngo.svg" title="Kelly Ngo">
					<h2>Kelly Ngo</h2>
				</div>
				<div>
					<img src="profiles/corey-matthew.svg" title="Corey Matthew">
					<h2>Corey Matthew</h2>
				</div>
			</div>
			<img class="person thumbs-up" src="people/thumbs-up.svg">
			<img class="person sleeping" src="people/sleeping.svg">
			<img class="person redhead" src="people/redhead.svg">
		</div>

		<!-- Sponsors -->
		<div class="content-box" id="sponsors">
			<img class="content-icon" src="images/thumb_up.svg" title="Thank you sponsors!">
			<h1>Sponsors</h1>
			<span>(And now a word from our sponsors)</span>
			<h2>Featured donors</h2>
			<div class="sponsors">
				<img class="sponsor" src="sponsor-logos/google.png">
				<img class="sponsor" src="sponsor-logos/facebook.png">
				<img class="sponsor" src="sponsor-logos/capital-one.png">
				<img class="sponsor" src="sponsor-logos/lugocorp.svg">
			</div>
			<br>
			<span>Or click <a href="sponsors">here</a> to see our full sponsors list</span>
			<img class="person asian-girl" src="people/asian-girl.svg">
			<img class="person mouse" src="people/mouse.svg">
			<img class="person java" src="people/java.svg">
		</div>

		<!-- Contact -->
		<div class="row content-box" id="contact">
			<h2 style="text-align:center;margin-top:20px">Find us on social media!</h2>
			<div class="social-media">
			  <table>
			    <tr>
			      <td>
			        <a href="https://twitter.com/_EqualsEquals">
			          <img src="images/twitter.svg" title="Twitter">
			        </a>
			      </td>
			      <td>
			        <a href="https://www.facebook.com/equalsequalshackathon/">
			          <img src="images/facebook.svg" title="Facebook">
			        </a>
			      </td>
			      <td>
			        <a href="https://www.instagram.com/_equalsequals/">
			          <img src="images/instagram.svg" title="Instagram">
			        </a>
			      </td>
			      <td>
			        <a href="mailto:hackequalsequals@gmail.com">
			          <img src="images/email.svg" title="Email">
			        </a>
			      </td>
			    </tr>
			  </table>
			</div>
			<img class="person laptop" src="people/laptop.svg">
			<img class="person meditating" src="people/meditating.svg">
		</div>

		<?php include("components/footer.php");?>
	</div>
</body>
</html>
