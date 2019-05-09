<?php
$password = "alpha17";  // Modify Password to suit for access, Max 10 Char.
##########################################################################
?>
<!DOCTYP html>
<html>
<head>
<title>Alphatech Coding 2017 Admin Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="height=device-height,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/additional.css">
<style type="text/css">
<!--
P { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
TD { FONT-SIZE: 8pt; COLOR: #000000; FONT-FAMILY: Verdana, Tahoma, Arial}
-->
</style>
</head>
<body>
<?php 
  
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
	//session_start();
?>
<!-- START OF HIDDEN HTML - PLACE YOUR CONTENT HERE -->  
<nav class="nav">
<ul>
	<b style="color: lightgray; float: left; padding-top: 5px; font-family: times;">ADMIN</b>
	<li class="active"><a>Add Problems</a></li>
	<li><a href="leaderboardadmin.php">Leaderboard</a></li>
	<li><a>Submissions</a></li>
</ul>
</nav>
<?php
	require_once "connection.php";
	if(isset($_POST['add']))
	{
		$setno=$_POST['setno'];
		$d=$_POST['d'];
		$statement=mysqli_real_escape_string($con,$_POST['statement']);
		$input1=$_POST['input1'];
		$output1=$_POST['output1'];
		$input2=$_POST['input2'];
		$output2=$_POST['output2'];
		$input3=$_POST['input3'];
		$output3=$_POST['output3'];
		$marks=$d=="e"?500:($d=="m"?700:($d=="h"?1000:1500));
		if(mysqli_query($con,"INSERT INTO problems(`statement`, `input1`, `output1`, `input2`, `output2`,`input3`, `output3`,`setno`, `d`, `pts`) VALUES ('$statement','$input1','$output1','$input2','$output2','$input3','$output3','$setno','$d','$marks')"))
			echo "<script> alert('Problem added'); </script>";
	}

?>
<div class="panel1">
<b style="color:  #273746 ;">Set No : </b>
<form method="POST" action="adminPanel.php">
<select name="setno" class="ip" style="width: 20%" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<!--<input type="text" class="ip" placeholder="Problem Set no"style="width: 20%;" name="setno" required> -->
<b style="color:  #273746 ;">Difficulty: </b>
<select name="d" class="ip" style="width: 20%" required>
<option value="e">EASY</option>
<option value="m">MEDIUM</option>
<option value="h">HARD</option>
<option value="a">ADVANCED</option>
</select>
<br />
<b style="color:  #273746 ;">Problem Description : </b> <br />
<textarea class="ip" style="height: 100px;" id="statement" onkeyup="display();" name="statement" required></textarea>

<br /><br><br>
<table>
  <tr>
  	<th>TestCase#</th>
    <th>Input</th>
    <th>Output</th>
  </tr>
  <tr>
  	<td>TestCase# 1</td>
    <td><textarea class="ip" style="height: 50px; width:300px; float:left;" name="input1" required></textarea></td>
    <td><textarea class="ip" style="height: 50px; width:300px; float:right;" name="output1" required></textarea></td>
  </tr>
  <tr>
  	<td>TestCase# 2</td>
    <td><textarea class="ip" style="height: 50px; width:300px; float:left;" name="input2" required></textarea></td>
    <td><textarea class="ip" style="height: 50px; width:300px; float:right;" name="output2" required></textarea></td>
  </tr>
  <tr>
 	<td>TestCase# 3</td>
    <td><textarea class="ip" style="height: 50px; width:300px; float:left;" name="input3" required></textarea></td>
    <td><textarea class="ip" style="height: 50px; width:300px; float:right;" name="output3" required></textarea></td>
  </tr>
</table>
<br>
<input type="submit" class="btn" value="Add" style="margin-left:300px; margin-bottom:10px; padding:15px;"  name="add"><br />
<input type="hidden" name="password" value="alpha17">
</form>
</div>

<div id="preview" class="preview" >
<kbd> Problem Statement Preview: </kbd>
</div>
<script>
	function display()
	{
		document.getElementById("preview").innerHTML=document.getElementById("statement").value;
	}

</script>

<!-- END OF HIDDEN HTML -->
<?php 
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  echo "<div style='background-color:  #f3f4bc ; border: 2px solid black; border-radius: 8px;
  height: 200px; margin-top: 100px; margin-left: auto; margin-right: auto; box-shadow: 1px 0px 10px 1px black,1px 0px 20px 1px  #17202a inset; width: 400px;'>";
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"userid\" type=\"text\" size=\"25\" maxlength=\"20\"> <br />";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"20\"><br /><input value=\"Login\" type=\"submit\" class=\"btn\" ></p></form>";
}
  print "<br><p align=\"center\">Alphatech 2017@RCCIIT</a></p>";
  echo "</div>";
  
  
?>
<BR>
</body>
</html>
