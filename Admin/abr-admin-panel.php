<?php include 'includes/header.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Pane</title>
	<link rel="stylesheet" type="text/css" href="style/style-for-panel.css">
</head>
<body>

	<nav class="topnav">
		<div class="menu" id="topmenu">
				<span id="navbar" style="font-size:30px;cursor:pointer; float: left; padding: 10px" onclick="openNav()" >&#9776;</span>
		</div>

		<div id="mySidenav" class="sidenav">

	  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  		<a href="abr-admin-panel.php">Downloads</a>
			<a href="admin-panel-2.php">Annual Events</a>
			<a href="admin-panel-3.php">Acheivments</a>
			<a href="admin-panel-4.php">Co-Curriculum Activity</a>
			<a href="admin-panel-5.php">Slide Show</a>
			<a href="admin-panel-6.php">News</a>
			<a href="admin-panel-7.php">Video Gallary</a>
  		</div>
	</nav>

	<aside id="main">
		<?php 
		require 'config.php';
		$sql="SELECT * FROM `files` ORDER BY `id` DESC";
		$result = mysqli_query($conn,$sql);
		 ?>
		<h3>Add Or Remove Contents of Downloads</h3>
		<button class="button">
			<a href="add.php">Add Item</a>
		</button><br>
		<div class="content">
			<div class="row">
				<?php
		 		while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		 		?>
		 		<div class="card">
		 			<div class="data-left">
						<h2><?= $row['file_name'];?></h2>
					</div>
					<div class="data-right">
						<button class="remove">
							<a style="text-decoration: none;color: #000" href="delete.php?id=<?php echo $row['id'];?>">Remove</a>
						</button>
					</div>
			 	</div>
				<?php } ?>
			</div>
		</div>
	</aside>

	<script>
		function openNav() {
  		document.getElementById("mySidenav").style.width = "250px";
  		document.getElementById("main").style.marginLeft="250px";
		}

		function closeNav() {
  		document.getElementById("mySidenav").style.width = "0";
  		document.getElementById("main").style.marginLeft="0px";
		}		
	</script>

</body>
</html>