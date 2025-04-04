<?php include 'includes/header.php'; ?>

<?php 
	require 'config.php';
	$msg="";
	if (isset($_POST['submit'])) {
		$N_head=$_POST['NHead'];
		$N_info=$_POST['NInfo'];
		$N_link=$_POST['NLink'];

		$sql ="INSERT INTO news (news_head,news_info,news_link)VALUES(
		'$N_head','$N_info','$N_link')";

		if (mysqli_query($conn,$sql)) {
			$msg="File Added to the Database Succesfully!";
		}
		else{
			$msg="Failed to add the file!";
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add News</title>
	<link rel="stylesheet" type="text/css" href="style/style_for_add.css">

	<style>
		.txt {
	      width: 100%;
	      padding: 12px 20px;
	      outline: none;
	      border-radius: 4px;
	      margin-left: 8px;
	      border: 2px solid #ccc;
	      box-sizing: border-box;
	      
	    }
	    .txt:hover {
	      width: 100%;
	      padding: 12px 20px;
	      display: inline-block;
	      outline: none;
	      border-radius: 4px;
	      border: 3px solid #007bff;
	      box-sizing: border-box;
	    }
	</style>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Add news</h2>
				<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="NHead" class="form-control" placeholder="News Heading" required>
					</div>
					<div class="form-group">
						<input type="text" name="NLink" 
						class="form-control" placeholder="Link in text">
						<textarea type="text" name="NInfo" 
						class="txt" cols="50" rows="25">
					</textarea>
					</div>
					<div class="form-group">
						<div class="form-group">
							<input type="submit" name="submit" 
							class="btn-block" value="Add File" style="margin-left: 5px; margin-top: 8px">
						</div>
						<div class="form-group">
							<h4 class="text-center"><?= $msg; ?></h4>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row2">
			<div class="col-md-6 mt-3 p-4 bg-light rounded">
				<a href="admin-panel-6.php" class="btn btn-block btn-lg" style="text-decoration: none; font-size: 20px; color:#000;">
				Go to Admin Panel</a>
			</div>
		</div>
	</div>

</body>
</html>