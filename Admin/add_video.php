<?php include 'includes/header.php'; ?>

<?php 
	require 'config.php';
	$msg="";

	if (isset($_POST['submit'])) {
		$maxsize = 524288000;
		$a_name=$_POST['VName'];
		$a_desc=$_POST['VDesc'];
		$a_grd=$_POST['VFor'];

		$target_dir="videos/";
		$target_file=$target_dir.basename($_FILES['VFile']["name"]);

		move_uploaded_file($_FILES['VFile']["tmp_name"],$target_file);


		$sql ="INSERT INTO video_gellery(video_title,video_description,video_grade,video_file
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
	<title>Add Video</title>
	<link rel="stylesheet" type="text/css" href="style/style_for_add.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Add Video</h2>
				<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="VName" class="form-control" placeholder="Title" required>
					</div>
					<div class="form-group">
						<input type="text" name="VDesc" 
						class="form-control" placeholder="Description">
					</div>
					<div class="form-group">
						<select name="VFor" style="margin-left: 8px;
						outline: none;"class="custom-file-input">
							<option>Co-Curriculum Activity</option>
							<option>Grade 05</option>
							<option>O/L</option>
							<option>A/L</option>
							<option>Commen</option>
						</select>
					</div>
					<div class="form-group">
						<div class="custom-file" 
						style="margin-left: 8px;">
							<input type="file" name="VFile" 
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
				<a href="admin-panel-7.php" class="btn btn-block btn-lg" style="text-decoration: none; font-size: 20px; color:#000;">
				Go to Admin Panel</a>
			</div>
		</div>
	</div>

</body>
</html>