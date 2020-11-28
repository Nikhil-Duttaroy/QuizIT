<?php session_start(); ?>
<?php include "connect.php";


if(isset($_POST['submit'])) {
	$question =htmlentities(mysqli_real_escape_string($conn , $_POST['question']));
	$choice1 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice1']));
	$choice2 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice2']));
	$choice3 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice3']));
	$choice4 = htmlentities(mysqli_real_escape_string($conn , $_POST['choice4']));
	$correct_answer = mysqli_real_escape_string($conn , $_POST['answer']);


    $checkqsn = "SELECT * FROM jsquestions";
	$runcheck = mysqli_query($conn , $checkqsn) or die(mysqli_error($conn));
	$qno = mysqli_num_rows($runcheck) + 1;

	$query = "INSERT INTO jsquestions(qno, question , ans1, ans2, ans3, ans4, correct_answer) VALUES ('$qno' , '$question' , '$choice1' , '$choice2' , '$choice3' , '$choice4' , '$correct_answer') " ;
	$run = mysqli_query($conn , $query) or die(mysqli_error($conn));
	if (mysqli_affected_rows($conn) > 0 ) {
		echo "<script>alert('Question successfully added'); </script> " ;
	}
	else {
		"<script>alert('error, try again!'); </script> " ;
	}
}

?>


<!DOCTYPE html>
<html>
	<head><link rel="stylesheet" href="css/add.css"></head>
	<body>
    <header>
		<?php include("nav.php")?>
	</header>
	<div class="modal">
			<h2 style="text-align: center; padding:15px">Add a Javascript Question</h2>
			<form id="contact-form" method="POST" name="ContactForm">
					
						<label>Question</label>
						<br>
						<input type="text" class="input-field" name="question" required="" >
					
					
						<label>Choice #1</label>
						<br>
						<input type="text" class="input-field" name="choice1" required="" >
					
						<label>Choice #2</label>
						<br>
						<input type="text" class="input-field" name="choice2" required="" >
					
						<label>Choice #3</label>
						<br>
						<input type="text" class="input-field" name="choice3" required="" >
					
						<label>Choice #4</label>
						<br>
						<input type="text" class="input-field" name="choice4" required="" >
					
						<label>Correct answer</label>
						
						<select name="answer" >
                        <option value="a">Choice #1 </option>
                        <option value="b">Choice #2</option>
                        <option value="c">Choice #3</option>
                        <option value="d">Choice #4</option>
                    </select>
						
					<input id="btn"  type="submit" name="submit" value="Submit">
					
		
      		</form>
	</div>


		
		

	</body>
</html>

