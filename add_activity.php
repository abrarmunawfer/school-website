<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}
?>
<?php 
	require 'config.php';
	$msg="";
	if (isset($_POST['submit'])) {
		$co_name=$_POST['cName'];
		$co_desc=$_POST['cDescription'];

		$target_dir="image/";
		$target_file=$target_dir.basename($_FILES['cLogo']["name"]);
		move_uploaded_file($_FILES['cLogo']["tmp_name"], $target_file);

		$extension = pathinfo($target_file, PATHINFO_EXTENSION);

		$sql ="INSERT INTO coactivity (co_name,co_desc,co_logo)VALUES(
		'$co_name','$co_desc','$target_file')";

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
	<title>Add Co-Curriculum Activities</title>
	<link rel="stylesheet" type="text/css" href="style/style_for_add.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Add Co-Curriculum Activities</h2>
				<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="cName" class="form-control" placeholder="Activity Name" required>
					</div>
					<div class="form-group">
						<input type="text" name="cDescription" 
						class="form-control" placeholder="Description">
					</div>
					<div class="form-group">
						<div class="custom-file" style="margin-left: 8px;">
							<input type="file" name="cLogo" 
							class="custom-file-input" id="customFile" 
							accept="image/*" required>
							<label for="customFile" class="custom-file-label">Browse</label>
						</div>
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
				<a href="admin-panel-4.php" class="btn btn-block btn-lg" style="text-decoration: none; font-size: 20px; color:#000;">
				Go to Admin Panel</a>
			</div>
		</div>
	</div>

</body>
</html>