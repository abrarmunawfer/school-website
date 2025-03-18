<?php 
	require 'config.php';
	$msg="";

	if (isset($_POST['submit'])) {
		$maxsize = 524288000;
		$a_name=$_POST['AName'];
		$a_desc=$_POST['ADesc'];
		$a_grd=$_POST['AGrd'];

		$target_dir="image/";
		$target_file=$target_dir.basename($_FILES['ALogo']["name"]);

		move_uploaded_file($_FILES['ALogo']["tmp_name"],$target_file);


		$sql ="INSERT INTO achievements	(achievements_name,achievements_description,achievements_grade,achievements_logo
)VALUES(
		'$a_name','$a_desc','$a_grd','$target_file')";

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
	<title>Add Achievement</title>
	<link rel="stylesheet" type="text/css" href="style/style_for_add.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Add Achievement</h2>
				<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="AName" class="form-control" placeholder="Title" required>
					</div>
					<div class="form-group">
						<input type="text" name="ADesc" 
						class="form-control" placeholder="Description">
					</div>
					<div class="form-group">
						<select name="AGrd" style="margin-left: 8px; 
						outline: none;"
						class="custom-file-input">
							<option>Grade 05</option>
							<option>O/L</option>
							<option>A/L</option>
							<option>Commen</option>
						</select>
					</div>
					<div class="form-group">
						<div class="custom-file" 
						style="margin-left: 8px;">
							<input type="file" name="ALogo" 
							class="custom-file-input" id="customFile" accept="image/*,video/*">
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
				<a href="admin-panel-3.php" class="btn btn-block btn-lg" style="text-decoration: none; font-size: 20px; color:#000;">
				Go to Admin Panel</a>
			</div>
		</div>
	</div>

</body>
</html>