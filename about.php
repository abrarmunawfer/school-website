<!DOCTYPE html>
<html>
<?php include('includes/header.php'); ?>
<head>

	<style>
		.container{
		  margin-left: auto;
		  margin-right: auto;
			padding: 50px;
		  
			
		}
		.row {
		  display: flex;
		  padding: 16px;
		  justify-content: center;
		  /*background-color: rgba(225,225,225, .8);*/
		  border-radius: 25px;
		}
		.col h4{
			text-align: center;
		}
		.col p{
			text-align: justify;
		}
		.col img{
			width: 20%;
		}
	</style>
	
</head>

<body>
	

	<aside class="container">
		<div class="row">
			<div class="col">
			<p>
        ABR College is a renowned educational institution committed to empowering students with the knowledge and skills necessary to succeed in an ever-changing world. Founded on the principles of excellence, integrity, and innovation, we have become a hub of academic and extracurricular success, offering a broad range of programs designed to meet the needs of today’s learners. 

        Our diverse curriculum spans multiple disciplines, from the arts and sciences to business and technology, ensuring that every student has the opportunity to find their passion and develop their talents. With a focus on personalized learning, our faculty members engage students in interactive lessons, hands-on experiences, and critical discussions that stimulate intellectual curiosity and growth.

        ABR College places a strong emphasis on holistic development, encouraging students not only to excel academically but also to become responsible, compassionate, and proactive members of society. Through various community outreach programs, internships, and global partnerships, we ensure that our students are well-prepared for the challenges of the real world. We aim to produce graduates who are not only academically proficient but also emotionally intelligent, socially responsible, and capable of leading with confidence in an increasingly globalized society.

        At ABR College, we believe in fostering an inclusive environment where every student is valued and empowered to achieve their full potential. Our campus is equipped with state-of-the-art facilities, advanced technologies, and a wide range of support services to create a conducive learning environment. Whether through mentorship programs, career counseling, or wellness initiatives, we are dedicated to ensuring the success and well-being of each student. 

        We are proud of our strong legacy and are excited for the future as we continue to adapt and evolve to meet the ever-changing needs of the educational landscape. With a focus on excellence and a commitment to creating a positive impact on our community, ABR College remains a place of inspiration, opportunity, and achievement for generations to come.
    </p>
			</div>
		</div>
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