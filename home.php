<?php
  require ("connect.php");
  session_start();
  if(!isset($_SESSION))
	{
		header('location:login.php');
		exit;
	}
    $mail=$_SESSION['mail'];
    $name=$_SESSION['user'];  
    if (isset($_SESSION['id'])) {
    $query = "SELECT * FROM questions";
    $run = mysqli_query($conn , $query) or die(mysqli_error($conn));
    $total = mysqli_num_rows($run);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz IT</title>
    <style>
    .topicContainer{
        height: 80vh;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        justify-items: center;
        align-content: center;
    }
    .topicNames{
        width: 300px;
        height: 200px;
        border-radius: 5px;
        box-shadow: -2px 2px 5px var(--secondaryColor);
        padding: 5px;  
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;  
}
.head{
    margin: 10px;
}
button {
  width: 150px;
  background-color: #4d84e2;
  border: none;
  outline: none;
  height: 40px;
  border-radius: 49px;
  color: black;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}

button:hover {
  background-color:  var(--secondaryColor);
}

    
</style>
</head>
<body>
<?php include 'nav.php' ?>
<h1 style="text-align:center; margin:15px"><?php echo $_SESSION['user'];?> <br> Begin Your Quizzing journey</h1>
<div class="topicContainer">
<div class="topicNames php">
    <h2 class="head">PHP</h2>
    <a href="phpquestions.php?n=1"><button>Take Quiz</button></a>
</div>
<div class="topicNames html">
    <h2 class="head">HTML</h2>
    <a href=""><button>Take Quiz</button></a>
</div>
<div class="topicNames js">
    <h2 class="head">Javascript</h2>
    <a href=""><button>Take Quiz</button></a>
</div>


</div>
<a style="position:absolute; top:3em ;right:1em;" href="logout.php">Logout</a>
</body>
</html>
<?php unset($_SESSION['score']); ?>
<?php }
else {
	header("location: index.php");
}
?>