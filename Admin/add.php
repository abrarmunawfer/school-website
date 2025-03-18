<?php 
	require 'config.php';
	$msg="";
	if (isset($_POST['submit'])) {
		$f_name=$_POST['fName'];
		$f_desc=$_POST['fDescription'];

		$target_dir="files/";
		$target_file=$target_dir.basename($_FILES['fFile']["name"]);
		move_uploaded_file($_FILES['fFile']["tmp_name"], 
			$target_file);

		$extension = pathinfo($target_file, PATHINFO_EXTENSION);

		$sql ="INSERT INTO files (file_name,file_desc,file_pdf)VALUES(
		'$f_name','$f_desc','$target_file')";

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
	<title>Add</title>
	<link rel="stylesheet" type="text/css" href="style/style_for_add.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="text-center">Add Files</h2>
				<form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
					<div class="form-group">
						<input type="text" name="fName" class="form-control" placeholder="File Name" required>
					</div>
					<div class="form-group">
						<input type="text" name="fDescription" 
						class="form-control" placeholder="File Description">
					</div>
					<div class="form-group">
						<div class="custom-file" style="margin-left: 8px;">
							<input type="file" name="fFile" 
							class="custom-file-input" id="customFile" 
							accept="application/pdf" required>
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
				<a href="abr-admin-panel.php" class="btn btn-block btn-lg" style="text-decoration: none; font-size: 20px; color:#000;">
				Go to Admin Panel</a>
			</div>
		</div>
	</div>

</body>
</html>