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
    // $score=$_SESSION['score']; 
    if (isset($_SESSION['id'])) {
    $query = "SELECT * FROM phpquestions";
    $run = mysqli_query($conn , $query) or die(mysqli_error($conn));
    $total = mysqli_num_rows($run);

    $query1 = "SELECT * FROM user where email='$mail'";
    $select_players = mysqli_query($conn, $query1) or die(mysqli_error($conn));
    if (mysqli_num_rows($select_players) > 0 ) {
    while ($row = mysqli_fetch_array($select_players)) {
        $id = $row['id'];
        $email = $row['email'];
        $score = $row['score'];
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz IT</title>
    <style>
    .topicContainer{
        height: 60vh;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        justify-items: center;
        align-content: center;
    }
    @media screen and (max-width: 600px) {
    .topicContainer {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        justify-items: center;
        align-content: center;
        margin-top: 15px;
    }
    .topicNames{
        width: 200px;
        height: 100px;
        margin-top: 20px;
    }
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
<h1 style="text-align:center; margin:15px"><?php echo $_SESSION['user']; ?> <br> Begin Your Quizzing journey</h1>
<h3>Previous Score : <?php echo $score; ?></h3>

<div class="topicContainer">
    <div class="topicNames php">
        <h2 class="head">PHP</h2>
        <a href="phpquestions.php?n=1"><button>Take Quiz</button></a>
    </div>
    <div class="topicNames html">
        <h2 class="head">HTML</h2>
        <a href="htmlquestions.php?n=1"><button>Take Quiz</button></a>
    </div>
    <div class="topicNames js">
        <h2 class="head">Javascript</h2>
        <a href="jsquestions.php?n=1"><button>Take Quiz</button></a>
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