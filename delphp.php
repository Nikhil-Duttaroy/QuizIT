<?php
require('connect.php');
$qno= $_GET['qno'];
$query = "DELETE FROM phpquestions WHERE qno=$qno"; 
$result = mysqli_query($conn,$query) or die ();
header("Location: allphp.php"); 
?>