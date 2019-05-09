<?php
require_once "connection.php";
session_start();
$_SESSION['active']=true;
 $_SESSION['remaining']--;
$uid=$_SESSION['uid'];
$query=mysqli_query($con,"SELECT problem1,problem2,problem3,problem4,problem5 FROM users WHERE uid='$uid'");
$result=mysqli_fetch_assoc($query);
$score=$result['problem1']+$result['problem2']+$result['problem3']+$result['problem4']+$result['problem5'];
echo $score;
if(isset($_POST['destroy']))
{
	echo "<script> alert('You have attempted the contest'); </script>";
	session_destroy();
}

?>
