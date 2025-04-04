<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>
<head>
	<style>
		.container {
	      content: "";
	      width: 100%;
	      margin-bottom: 8px;
	      margin: 25px;
	      display: table;
	      clear: both;
	    }
	    .card{
	      float: left;
	      border-radius: 25px;
	      display: block;
	      margin-right: 10px;
	      margin-left: -5px;
	      text-align: center;
	      margin-top: 8px;
	      bottom: 8px;
	      width: 300px;
	      background-color: rgba(00,00,00,.5);
	      padding: 8px;
	    }
	</style>
	
</head>
<body>
	<aside>
		<?php 
		require 'config.php';
		$sql="SELECT * FROM `files` ORDER BY `id` DESC";
		$result = mysqli_query($conn,$sql);
		 ?>

		 <div class="container">
		 	<div class="row">
		 		<?php
		 		while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		 		?>
		 		<div class="col-lg">
		 			<div class="card">
		 				<div class="border">
		 					<h5 class="card-title"><?= $row['file_name'];?></h5>
		 					<p><?= $row['file_desc'];?></p>
		 					<a href="<?= $row['file_pdf'];?>" target="_blank">Download</a>
		 				</div>
		 			</div>
		 		<?php } ?>
		 		</div><br>
		 	</div>
		 </div><br>
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

<?php include('includes/footer.php'); ?>
</html>