<?php 
session_start();
include "connect.php";
if (isset($_SESSION['id'])) {
	
	if (isset($_GET['n']) && is_numeric($_GET['n'])) {
	        $qno = $_GET['n'];
	        if ($qno == 1) {
	        	$_SESSION['quiz'] = 1;
	        }
	        }
	        else {
	        	header('location: jsquestions.php?n='.$_SESSION['quiz']);
	        } 
	        if (isset($_SESSION['quiz']) && $_SESSION['quiz'] == $qno) {
				$query = "SELECT * FROM jsquestions WHERE qno = '$qno'" ;
				$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
				if (mysqli_num_rows($run) > 0) {
					$row = mysqli_fetch_array($run);
					$qno = $row['qno'];
					$question = $row['question'];
					$ans1 = $row['ans1'];
					$ans2 = $row['ans2'];
					$ans3 = $row['ans3'];
					$ans4 = $row['ans4'];
					$correct_answer = $row['correct_answer'];
					$_SESSION['quiz'] = $qno;
					$checkqsn = "SELECT * FROM jsquestions" ;
					$runcheck = mysqli_query($conn , $checkqsn) or die(mysqli_error($conn));
					$countqsn = mysqli_num_rows($runcheck);
					$time = time();
					$_SESSION['start_time'] = $time;
					$allowed_time = $countqsn * 0.05;
					$_SESSION['time_up'] = $_SESSION['start_time'] + ($allowed_time * 60) ;
					

				}
				else {
					echo "<script> alert(' went wrong');
				window.location.href = 'home.php'; </script> " ;
				}
			}
			else {
			echo "<script> alert('error');
				window.location.href = 'home.php'; </script> " ;
			}
?>
<?php 
$total = "SELECT * FROM jsquestions ";
$run = mysqli_query($conn , $total) or die(mysqli_error($conn));
$totalqn = mysqli_num_rows($run);
?>

<html>
	<head>
		<title>JavaScript-Quiz</title>
		<link rel="stylesheet" type="text/css" href="css/ques.css">
		
	</head>
	
	<body>
		<header>
			<?php include("nav.php") ?>
				<h1 style="text-align:center;">Javascript-Quiz</h1>
		</header>

		
			<div class= "container">
				<div class= "current">Question <?php echo $qno; ?> of <?php echo $totalqn; ?></div>
				<div class="question"><p class="question"><?php echo $question; ?></p></div>
				<div class="form">
				<form method="post" action="jsprocess.php">
					<ul class="choices">
					   <li><input name="choice" type="radio" value="a" required=""><?php echo $ans1; ?></li>
					   <li><input name="choice" type="radio" value="b" required=""><?php echo $ans2; ?></li>
					   <li><input name="choice" type="radio" value="c" required=""><?php echo $ans3; ?></li>
					   <li><input name="choice" type="radio" value="d" required=""><?php echo $ans4; ?></li> 
					</ul>
					<input type="submit" value="Submit" class="btn"> 
					<input type="hidden" name="number" value="<?php echo $qno;?>">
				</form>
				</div>
			</div>
		
</body>
</html>

<?php } 
else {
	header("location: home.php");
}
?>