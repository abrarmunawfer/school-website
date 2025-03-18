<!DOCTYPE html>
<html>
<head>
	<title>news</title>
	<style>
		.container{
			margin: 12px 14px;
		}
		.border {

			padding: 12px 14px;

		}
		.border  {
			text-align: justify;
		}
		.collapsible {
		  background-color: #800;
		  color: white;
		  cursor: pointer;
		  padding: 18px;
		  width: 100%;
		  border-top-right-radius: 25px;
		  border-top-left-radius: 25px;
		  border: none;
		  text-align: center;
		  outline: none;
		  font-size: 15px;
		}

		.active, .collapsible:hover {
		  background-color: #800;
		}

		.content {
		  padding: 0 18px;
		  display: none;
		  border-bottom-right-radius: 25px;
		  border-bottom-left-radius: 25px;
		  overflow: hidden;
		  background-color: rgba(128,00,00, 0.5);
		}
	</style>
</head>
<body>
	<?php 
		require 'config.php';
		$sql="SELECT * FROM `news` ORDER BY `id` DESC";
		$result = mysqli_query($conn,$sql);
	?>
	<?php
		while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		 		?>
		 		<div class="container">
		 			<div class="border">
						<button type="button" class="collapsible"><?= $row['news_head'];?></button>
						<div class="content">
						  <p><?= $row['news_info'];?></p>
						</div>
					</div>
		 		</div>
		<?php } ?>
		<script>
			var coll = document.getElementsByClassName("collapsible");
			var i;

			for (i = 0; i < coll.length; i++) {
			  coll[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var content = this.nextElementSibling;
			    if (content.style.display === "block") {
			      content.style.display = "none";
			    } else {
			      content.style.display = "block";
			    }
			  });
			}
		</script>

</body>
</html>