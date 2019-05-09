<!DOCTYPE html>
<?php

require_once "connection.php";
?>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scle=1.0">
<link rel="stylesheet" type="text/css" href="tabs.css">
<link rel="stylesheet" type="text/css" href="css/additional.css">
</head>
<body>

<?php 
  header("Refresh:20");
// If password is valid let the user get access
//if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
//	session_start();
?>
<nav class="nav">
<ul>
	<b style="color: lightgray; float: left; padding-top: 5px; font-family: times;">ADMIN</b>
	<li ><a href="adminPanel.php">Add Problems</a></li>
	<li class="active"><a href="leaderboardadmin.php">Leaderboard</a></li>
	<li><a>Submissions</a></li>
</ul>
</nav>
<table class="table" cellspacing="0">
<tr class="table-header-row">
<td class="table-header">Rank</td>
<td class="table-header">Team Name</td>
<td class="table-header">Participant1</td>
<td class="table-header">Participant2</td>
<td class="table-header">Year</td>
<td class="table-header">Problem1</td>
<td class="table-header">Problem2</td>
<td class="table-header">Problem3</td>
<td class="table-header">Problem4</td>
<td class="table-header">Problem5</td>
<td class="table-header">Total Score</td>
</tr>
<?php
//session_start();
$query=mysqli_query($con,"SELECT uid,name1,name2,year1,problem1,problem2,problem3,problem4,problem5,(problem1+problem2+problem3+problem4+problem5) AS sum FROM users ORDER BY sum DESC");
$i=1;
$previous_rank=1;
$previous_score=0;
while($result=mysqli_fetch_assoc($query))
{
	//echo $result['sum'];
	if($result['sum']<$previous_score)
		$i=++$previous_rank;
	$class='table-row';
	if(isset($_SESSION['uid']))
	if($result['uid']==$_SESSION['uid'])
		$class='current-user';
	if($i==1) $class='winner';
	echo "<tr class=$class>";
	echo "<td> $i </td><td>".$result['uid']."</td><td>".$result['name1']."</td> <td>".$result['name2']."</td>
	<td>".
	$result['year1']."</td><td>".$result['problem1']."</td>"."<td>".$result['problem2']."</td>".
	"<td>".$result['problem3']."</td>"."<td>".$result['problem4']."</td>"."<td>".$result['problem5']."</td>"."<td>".$result['sum']."</td></tr>";
	$previous_score=$result['sum'];
	//$i++;
}

//}
?>
</table>
<br><br>
<center><button class="btn" onclick="javascript:location.href='download.php'">Download Scorecard</button></center>
</body>
</html>