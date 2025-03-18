<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

	<?php 
		require 'config.php';
		$sql="SELECT * FROM `slideshow` ORDER BY `id` ASC";
		$result = mysqli_query($conn,$sql);
		 ?>

	<!-- Slide show Container -->
	<div class="slideshow-container">

		<!-- Full width images with number and caption -->
		<div class="row">
			<?php
		 		while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		 		?>
		<div class="mySlides fade">
			<!-- <div class="numberText">1 / 3</div> -->
			<a href="#">
			<img src="<?= $row['file_img'];?>" style="width: 100%; "></a>
							<!-- Black Transparent Overlay -->
							<div class="overlay">
								<p class="school-description">ABR College is proud that all of our <br>schools are state-recognized Community School candidates.</p>
							</div>
		</div>
		<?php } ?>
		</div>
	</div>

	<!-- The dots/Circle -->
	<div class="slideshowCircles" style="text-align: center;">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>


	<!-- Your Future is Bright Section -->
	<div class="future-section">
	<h2 class="future-heading">Your Future is Bright!</h2>
	<div class="underline"></div>
	<p class="future-description">
		In ABR College’s free, public, and joyful schools, we provide students with strong academics, holistic and inclusive support, and rich life opportunities beyond the classroom so they thrive in kindergarten through 12th grade … and far beyond!
	</p>

	<!-- Feature Grid -->
	<div class="feature-grid">
		<div class="feature-box" style="background-image: url('image/strong.jpg');">
		<div class="feature-overlay">
			<i class="feature-icon fas fa-book"></i>
			<h4 class="feature-title">Strong Academics</h4>
			<p class="feature-description">Academic excellence to build a strong foundation for the future.</p>
		</div>
		</div>

		<div class="feature-box" style="background-image: url('image/strong.jpg');">
		<div class="feature-overlay">
			<i class="feature-icon fas fa-chalkboard-teacher"></i>
			<h4 class="feature-title">Talented Teachers</h4>
			<p class="feature-description">Qualified and passionate teachers who inspire and support our students.</p>
		</div>
		</div>

		<div class="feature-box" style="background-image: url('image/strong.jpg');">
		<div class="feature-overlay">
			<i class="feature-icon fas fa-user-graduate"></i>
			<h4 class="feature-title">Dedicated Counselor</h4>
			<p class="feature-description">Providing personalized guidance and support for academic and emotional well-being.</p>
		</div>
		</div>

		<div class="feature-box" style="background-image: url('image/strong.jpg');">
		<div class="feature-overlay">
			<i class="feature-icon fas fa-users"></i>
			<h4 class="feature-title">Inclusive Education</h4>
			<p class="feature-description">Embracing diversity to foster a supportive learning environment for all students.</p>
		</div>
		</div>

		<div class="feature-box" style="background-image: url('image/strong.jpg');">
		<div class="feature-overlay">
			<i class="feature-icon fas fa-briefcase"></i>
			<h4 class="feature-title">Life Experience</h4>
			<p class="feature-description">Preparing students for life beyond school with real-world experiences.</p>
		</div>
		</div>

		<div class="feature-box" style="background-image: url('image/strong.jpg');">
		<div class="feature-overlay">
			<i class="feature-icon fas fa-university"></i>
			<h4 class="feature-title">Higher Education & Access Support</h4>
			<p class="feature-description">Providing pathways and support for students' further academic journeys.</p>
		</div>
		</div>
	</div>
	</div>

	<?php 
    require 'config.php';
    $sql = "SELECT * FROM `news` ORDER BY `id` DESC";
    $result = mysqli_query($conn, $sql);
	?>

	<div class="news_column"> 
		<h2 class="news_head">Latest News & Updates</h2>
		<div class="news_container">
			<div class="grid-container">
				<?php
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
				?>
					<!-- Start of News Product Box -->
					<div class="product-box">
						<h5 class="product-title"><?= $row['news_head']; ?></h5>
						<p class="product-description"><?= substr($row['news_info'], 0, 100); ?>...</p>
						<a href="news.php?news_link=<?= $row['news_link']; ?>" class="btn">Read More</a>
					</div>
					<!-- End of News Product Box -->
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- script here -->
	<script src="js/script.js"></script>
</body>
<?php include('includes/footer.php'); ?>
</html>