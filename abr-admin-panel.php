<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php"); // Redirect to login page if not logged in
    exit();
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Pane</title>
	<link rel="stylesheet" type="text/css" href="style/style-for-panel.css">
</head>
<body>


	<aside id="main">
		<?php 
		require 'config.php';
		$sql="SELECT * FROM `files` ORDER BY `id` DESC";
		$result = mysqli_query($conn,$sql);
		 ?>
		<h3>Add Or Remove Contents of Downloads</h3>
		<a href="logout.php" class="logout-btn">Logout</a>

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