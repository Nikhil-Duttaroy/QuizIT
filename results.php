 <?php 
session_start();
include "connect.php";
if (isset($_SESSION['id'])) {
	?>
	<?
	php if(!isset($_SESSION['score'])) {
		header("location: phpquestions.php?n=1");
	}
	?>
	 
<html>
	<head>
		<title>PHP-Quiz</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="css/ques.css">
	</head>

	<body>
		<header>
			<?php include("nav.php")?>
				<h1 style="text-align: center;">PHP-Quiz</h1>	
		</header>

		<main>
			<div class= "container">
			<h2>Congratulations!</h2> 
			<p>You have successfully completed the test</p>
			<p>Total points: <?php if (isset($_SESSION['score'])) {
			echo $_SESSION['score']; 
}; ?> </p>
		<button class="btn"><a style="color:black;" href="phpquestions.php?n=1" class="start">Start Again</a></button>
		<button class="btn" ><a href="home.php" class="start" style="color:black;">Go Home</a></button>
		</div>
		</main>
		</body>
		</html>

		 <?php 
		$score = $_SESSION['score'];
		$email = $_SESSION['email'];
		$query = "UPDATE user SET score = '$score' WHERE email = '$email'";
		$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
 		?> 


<?
php unset($_SESSION['score']); 
?>
<?
php unset($_SESSION['time_up']); 
?>
<?
php unset($_SESSION['start_time']); 
?>
<?php 
}
else {
	header("location: home.php");
}
?>

