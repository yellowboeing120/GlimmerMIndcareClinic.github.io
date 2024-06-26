<?php require_once 'config/connection.php'?>
<?php 

$query = "select * from pie";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<head><title>Glimmer Mindcare | Mental Health Clinic</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../fonts/font.css"> <!--referencing the font file-->
	<link rel="stylesheet" href="../navbar/navbar.css">
	<link rel="stylesheet" href="../footer/footer.css">
	<link rel="stylesheet" href="homepage.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
          	while ($chart = mysqli_fetch_assoc($result)){
				echo "['".$chart['Name']."',".$chart['Values']."],";
			}
          ?>
        ]);

        var options = {
          title: 'Age Group',
          backgroundColor: 'transparent'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>

<style>
	.margin-top {
		margin-top: 82px;
	}
</style>

<body>
	<nav>
		<div class="logo">
			<a href="home.html"><img src="photos/Glimmer Mindcare low res logo.png"/></a>
		</div>
		<ul>
		    <li>
		    	<div class="background-image-signin">
					<div class="padding">
						<a href="#" class="link-appointment"><b>Sign In</b></a>
					</div>
				</div>
		    </li>
		    <li>
		    	<div class="background-image">
					<div class="padding">
						<a href="#" class="link"><b>Appointment</b></a>
					</div>
				</div>
		    </li>
		    <li>
				<div class="background-image-selected">
					<div class="padding">
						<a href="#" class="link"><b>Home</b></a>
					</div>
				</div>
		    </li>
	  	</ul>
	</nav>
	<div class="margin-top"></div>
	<!--body starts here-->
	<div class="background"/>
	<div class="homepage1">
		<div class="item1">
			<div class="relative">
				<p class="centered">LET’S DIVE THROUGH OUR DEEP INNER<br>THOUGHTS AND WONDERS!<br>MAYBE COME OUT OF THIS WITH A CLEAR<br>MIND AND ANSWERED QUESTION.</p>
			</div>
			<div class="threebuttons">
				<div class="threebuttonsitems">
					<a href="#">
						<button class="rounded-button">Book an Appointment</button>
					</a>
				</div>
				<div class="threebuttonsitems">
					<a href="../assessment/Assessment.html">
						<button class="rounded-button">Assessment Test</button>
					</a>
				</div>
				<div class="threebuttonsitems">
					<a href="../about/about.html">
						<button class="rounded-button">Know more</button>
					</a>
				</div>
			</div>
		</div>
		<div class="item">
			<img class="alone-bro" src="photos/Alone-bro.png"/>
		</div>
		<div class="margin1"></div>
		<div class="item">
			<div class="center">This is a website where you will learn about mental health, consult mental health therapy, and make you feel comfortable even in the darkest times.<br><br><br>We provide clinical services for your mental health needs and the following:</div>
		</div>
	</div>
	<div class="margin2"></div>
	<div class="homepage2">
		<div class="item">
			<div class="subitem">
				<div class="center">PSYCHIATRIC ASSISTANCE</div>
				<div class="assistancecontainer">
					<img class="assistanceimg" src="photos/Psychologist-bro1.png"/>
					<div class="text-with-border">Living with mental illness will always be a battle, but getting the proper treatment will make it much more manageable, allowing you to enjoy everything life has to offer without your condition getting in the way.</div>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="subitem">
				<div class="center">PSYCHIATRIC ASSESSMENT</div>
				<div class="assistancecontainer">
					<img class="assistanceimg" src="photos/Psychologist-bro2.png"/>
					<div class="text-with-border">Having a mental health assessment gives your doctor a picture of the way you think, feel, reason and remember. The mental health test assesses your emotional well being via a series of questions and also includes a physical examination.</div>
				</div>
			</div>
		</div>
		<div class="itemPIE">
			<div class="piecharts">
				<div id="piechart" style="width: 900px; height: 500px;"></div>
			</div>
		</div>
		<div class="item">
			<div class="subitem">
				<div class="assistancecontainer">
					<div> Distribution of website users across different age groups, ranging from adolescents to older adults. which gets updated every time a new patients is booked.</div>
				</div>
			</div>
		</div>
	</div>
	<!--body ends here-->
	<div class="margin-bottom"></div>
	<hr> <!--footer here-->
	<div class="footer-content">
		<p>Contact Us</p>
		<div class="right">
			"IT'S OKAY TO TAKE A BREAK,<br>LET'S TAKE CARE OF OUR MENTAL HEALTH"
		</div>
		<div class="picture-container">
			<ul>
				<li>
					<a href="https://www.instagram.com/glimmermindcare" class="footer-inline-list"><img class="footer-img" src="photos/insta.png"/></a>
				</li>
				<li class="footer-inline-list">
					<a href="https://www.facebook.com/profile.php?id=61558528892423&mibextid=ibOpuV" class="footer-inline-list"><img class="footer-img" src="photos/facebook.png"/></a>
				</li>
				<li class="footer-inline-list">
					<a href="#" class="footer-inline-list"><img class="footer-img" src="photos/twitter.png"/></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="default-font">
		Copyright @ 2023 Glimmer Mindcare All Rights Reserved
	</div>
</body>