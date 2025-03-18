<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>K/AKURANA MUSLIM BALIKA MAHA
VIDYALAYA</title>

	<link rel="icon" type="image/x-icon" href="image/logo_of_k_crop.png">

	<link rel="stylesheet" type="text/css" href="style/style_index.css">

	<link rel="stylesheet" type="text/css" href="style/style-responsive.css">

	<link rel="stylesheet" type="text/css" href="style/style_for_menu.css">

	<style>
		aside {
	      width: 100%;
	      height: 100%;
	    }

	    .card {
	      border: 1px solid #000;
	      margin: 8px;
	      width: 70%;
	      vertical-align: middle;
	      border-radius: 25px;
	    }
	    .left {
	      float: left;
	      width: 30%;
	    }
	    .left img{
	      width: 200px;
	      border-radius: 10px;
	      vertical-align: middle;
	    }

	    .right {
	      float: right;
	      width: 70%;
	    }
	    .right p {
	      vertical-align: middle;
	    }
	    .card-title {
	      text-align: center;
	    }
	</style>
	
</head>
<header>

	<!-- Name -->
		<div class="details">
			<a href="Administration.php">Administration</a>
			<a href="heritage.php">Heritage</a>
		</div>

	<!-- logo and name -->
	<div class="main1" style="justify-content: center;">
		<div class="logo">
			<div class="logoimg">
				<img src="image/logo_of_k_crop.png" style="margin-top: 15px;">
			</div>
			<div class="logoname">
				<center>
					<h3>
						K/ AKURANA MUSLIM BALIKA MAHA <br> VIDYALAYA
					</h3>
				</center>
			</div>
		</div>
	</div>
	<br>
	<!-- /logo and name -->
	
</header>
<body>
	<nav>
		<br>
		<br>
		<!-- menu items here... -->
		<div class="topnav" id="myTopnav">
		  	<a href="index.php">Home</a>
			<a href="downloads.php">Downloads</a>
			<a href="Annual_Events.php">Annual Events</a>
		  <div class="dropdown">
		    <button class="dropbtn">Acheivments 
		      <i class="fa fa-caret-down"></i>
		    </button>
		    <div class="dropdown-content">
		      <a href="gr5.php">Grade 05</a>
		      <a href="ol.php">O/L</a>
		      <a href="al.php">A/L</a>
		      <a href="commen.php">Milestones</a>
		    </div>
		  </div> 
		  	<a href="Activity.php">Co-Curriculum Activity</a>
			<a href="about.php">About Us</a>
			<a href="contact.php">Contact Us</a>
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		</div>		
		<!-- /menu items here... -->
	</nav>

	<aside>
		<br>
		<img src="image/Organizational chart 1-01.png"
		style="width: 100%;">
	</aside>

	<script>

		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}
	</script>

</body>

<footer style="background-color: #800">
	<div class="footer">
		<div class="top">
			<div class="item">
				<a href=""><img src="image/insta.svg" width="16px" > Instagaram</a><br>
			</div>
			<div class="item">
				<a href="mailto:akranabalika@gmail.com"><img src="image/mail.svg" width="16px"> mail</a><br>
			</div>
			<div class="item">
				<a href="https://maps.app.goo.gl/sjFAHyoUjjBH8pLN8">
        	<img src="image/pin-308802.png" width="16px">  Location</a><br>
			</div>
			<div class="item">
				<a href="https://www.facebook.com/AkuranaBalika/">
        	<img src="image/fb.svg" width="16px"> Facebook</a><br>
			</div>
		</div>
		<div class="bottom">
			<div class="item">
				<a href=" tel: 0812304424"><img src="image/telephone-304080.png" width="16px"> 081 230 4424</a><br>
			</div>
			<div class="item">
				<a href="">
      			<img src="image/in.svg" width="16px"> LinkedIn</a><br>
			</div>
			<div class="item">
				<a href=""><img src="image/whatsapp-1623579.png" width="16px"> WhatsApp</a><br>
			</div>
			<div class="item">
				<a href=""><img src="image/twit2.svg" width="16px"> Twitter</a><br>
			</div>		
		</div>
	</div>
</footer>
</html>