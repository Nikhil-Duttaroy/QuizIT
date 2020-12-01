<?php
require('connect.php');
$qno= $_GET['qno'];
$query = "DELETE FROM jsquestions WHERE qno=$qno"; 
$result = mysqli_query($conn,$query) or die ();

$query1 = "UPDATE jsquestions SET qno=qno-1 where qno>$qno"; 
$result1 = mysqli_query($conn,$query1) or die ();

header("Location: alljs.php"); 
?>