<?php session_start(); ?>
<?php include "connect.php";

if (isset($_GET['qno'])) {
	$qno = mysqli_real_escape_string($conn , $_GET['qno']);
	if (is_numeric($qno)) {
		$query = "SELECT * FROM phpquestions WHERE qno = '$qno' ";
		$run = mysqli_query($conn, $query) or die(mysqli_error($conn));
		if (mysqli_num_rows($run) > 0) {
			while ($row = mysqli_fetch_array($run)) {
				 $qno = $row['qno'];
                 $question = $row['question'];
                 $ans1 = $row['ans1'];
                 $ans2 = $row['ans2'];
                 $ans3 = $row['ans3'];
                 $ans4 = $row['ans4'];
                 $correct_answer = $row['correct_answer'];
			}
		}
		else {
			echo "<script> alert('error');
			window.location.href = 'allphp.php'; </script>" ;
		}
	}
	else {
		header("location: allphp.php");
	}
}

?>
<?php 
if(isset($_POST['submit'])) {
	$question =htmlentities(mysqli_real_escape_string($conn , $_POST['question']));
	$choice1 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice1']));
	$choice2 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice2']));
	$choice3 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice3']));
	$choice4 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice4']));
	$correct_answer = mysqli_real_escape_string($conn , $_POST['answer']);
    

	$query = "UPDATE phpquestions SET question = '$question' , ans1 = '$choice1' , ans2= '$choice2' , ans3 = '$choice3' , ans4 = '$choice4' , correct_answer = '$correct_answer' WHERE qno = '$qno' ";
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	if (mysqli_affected_rows($conn) > 0 ) {
		echo "<script>alert('Question successfully updated');
		window.location.href= 'allphp.php'; </script> " ;
	}
	else {
		"<script>alert('error, try again!'); </script> " ;
	}
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>PHP-Quiz</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/add.css">

	</head>

	<body>
		<header>
		<?php include 'nav.php' ?>
		</header>

		<div class="modal">
			<h2 style="text-align: center; padding:15px">Add a PHP Question</h2>
			<form id="contact-form" method="POST" name="ContactForm">
					
					
						<label>Question</label>
						<br>
						<input type="text" class="input-field" name="question" required="" value="<?php echo $question; ?>">
				
					
						<label>Choice #1</label>
						<br>
						<input type="text" class="input-field" name="choice1" required="" value="<?php echo $ans1; ?>">
				
					
						<label>Choice #2</label>
						<br>
						<input type="text" class="input-field" name="choice2" required="" value="<?php echo $ans2; ?>">
				
					
						<label>Choice #3</label>
						<br>
						<input type="text" class="input-field" name="choice3" required="" value="<?php echo $ans3; ?>">
				
					
						<label>Choice #4</label>
						<br>
						<input type="text" class="input-field" name="choice4" required="" value="<?php echo $ans4; ?>">
				
					
						<label>Correct answer</label>
						<select name="answer" >
                        <option value="a">Choice #1 </option>
                        <option value="b">Choice #2</option>
                        <option value="c">Choice #3</option>
                        <option value="d">Choice #4</option>
                    </select>
				
					
						
						<input type="submit" id="btn" name="submit" value="Submit">
				
					
		
      		</form>
	</div>

		

	</body>
</html>



