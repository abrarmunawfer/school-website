<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>
<head>
	<style>
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
    .container {
      content: "";
      width: 100%;
      margin-bottom: 8px;
      margin: 25px;
      display: table;
      clear: both;
    }
    .border img {
      height: 10px;
      border-radius: 25%;
    }
	</style>
	
</head>

<body>
	
	<aside>
		<?php 
		require 'config.php';
		$sql="SELECT * FROM `anualevents` ORDER BY `id` DESC";
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
		 					<!-- <img src="<?= $row['event_logo'];?>" alt="Event Logo"> -->
		 					<h3 class="card-title"><?= $row['event_name'];?></h3>
		 					<h5 class="card-title">
		 						<?= $row['event_date'];?> at <?= $row['event_time'];?></h5>
		 					<h5 class="card-title">On <?= $row['event_venue'];?></h5>
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