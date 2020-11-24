<?php
require('connect.php');
$qno= $_GET['qno'];
$query = "DELETE FROM htmlquestions WHERE qno=$qno"; 
$result = mysqli_query($conn,$query) or die ();
header("Location: allhtml.php"); 
?>