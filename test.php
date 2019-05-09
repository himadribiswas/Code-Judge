<!DOCTYPE html>
<?php
require_once "connection.php";
session_start();
if(isset($_GET['logout'])){
	session_destroy(); 
	header('Location: index.php');
}
if(!isset($_SESSION['uid']))
	header('Location: index.php');
?>
<html>
<head>
<title>Alphatech Coding 2017</title>
    <meta name="viewport" content="height=device-height,initial-scale=1.0">
    <meta charset="utf-8">

	
    <script src="apstyle3/js/apstyle.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="apstyle3/css/main.css">
    <link rel="stylesheet" type="text/css" href="tabs.css">
    <link rel="stylesheet" type="text/css" href="css/additional.css">
	
    
</head>
<nav class="nav"> <ul><li><a class="navbar-brand" ><h3>Alphatech Coding 2017<h3></a></li>
<li><li><a class="navbar-text" ><h3>DEPT. OF ELECTRONICS & COMMUNICATION ENGINEERING,RCCIIT<h3></a></li>
<li style="margin-left: 1%;">
	<form method="GET" action="test.php">
	<button type="submit" class="primary" name="logout"><img src="extra/logout.png" style="height: 20px; width: 20px;">logout</button>
	</form>
</li>
</ul></nav>
<ul class="tab">
  <li><a href="#" class="tablinks active" onclick="openCity(event, 'problem1')">Problem 1</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'problem2')">Problem 2</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'problem3')">Problem 3</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'problem4')">Problem 4</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'problem5')">Problem 5</a></li>
</ul>
<!-- aboutcodathon -->
<div class="popup" id="about" >
        <div class="popup-content" style="margin-top: 5%;">
            <div class="popup-head" style="background-color: darkred; color: white;">
                <span class="popup-close"><b>X</b></span>
                <center><h3>Please read very carefully</h3></center>
            </div>
            <div class="popup-body">
            	<h4>
               <strong>Terms and Conditions</strong>
<hr />
<div class="panel-light">
The contest will be of two rounds.This is the 2nd round.In this round you will 
be given 5 problems ( 500pts).You have to successfully submit
as many problems as you can. If you get corret answer you will get a score of points 
of that problem+ (no of seconds remaining). The contest will be of 120 minutes.
After 135 minutes you will not be unable to submit any problems and the submission 
system will be locked.
</div>
<br /> <br />
<b><u>Rules</u></b> <br />
You can use any IDE you want.For C/C++ please use gcc,g++ compiler.Don't use turbo C++. For JAVA, you can use any version greater than 1.5.
Don't use any electronic gadgets at the time of contest.If you try to open google,
quora, stackoverflow or any other site, out spyBot will report us and your account will be suspended 
and you will be disqualified from the contest.
            </h4>
            </div>
            <div class="popup-footer">
                <button type="submit"  data-close="#about" class="bluebtn"><b>Dismiss</b></button>
                </form>
            </div>
        </div>
</div>

<!-- end of about -->

<div class="panel-right">
	<div class="panel-warning">
		<h2>Logged In: <?php echo $_SESSION['uid']; ?> </h2>
	</div>
		<br />
		<div class="panel-light">
		<h1> Remaining Time </h1><h1 id="time">120:00 </h1>
		<h2>Are you ready for the challenge? </h2>
		<br>
		<button type="button" id="start" class="rounded">START</button><br>
		<br>
		<button type="button" id="lb" class="reddish"><b style="font-size: 20px">&#x265B;</b> leaderboard</button>
		</div>
		<div class="panel-warning">
		<h2>SCORE: <span id="score">0pts </span></h2>
		
	</div>
	<div class="copyright"> <p> &copy; 2017 Portal Developed by Himadri Biswas</p>
	</div>
	</div>
</div>
	</div>

	<div class="col8 tabcontent" id="problem1">
<div class="panel-light" style="padding: 20px;">
<div class="panel" style="padding: 20px;">
<b>Problem Statement :</b>
<?php

//$setno=$_SESSION['setno'];
$setno=1;
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='e'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>
<br>
<b>Compiler :</b><br><br>
<textarea id="code1" placeholder="Paste your code here" rows=12 cols=50  required></textarea>
<b>Select Language :</b>
<select id="lan1">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11 (g++ 8.0)</option>
	<option value="java">JAVA (JDK 1.5+) </option>
	<option value="py">PYTHON (PYTHON 2+) </option>
</select>
<button type="button" class="btn3d" id="run1"><b style="font-size: 16px">&#x25BA;</b> SUBMIT</button>

<span id="load1">

	</span>
</div>

</div>
<!-- end of problem1 -->
<!-- problem 2 -->

<div class="col8 tabcontent" id="problem2">
<div class="panel-light" style="padding: 20px;">
<div class="panel" style="padding: 20px;">
<b>Problem Statement :</b>
<?php
//$setno=$_SESSION['setno'];
$setno=2;
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='e'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>

<br>
<b>Compiler :</b><br><br>
<textarea id="code2" placeholder="paste your code here" rows=10 cols=50  required></textarea>
<b>Select Language :</b>

<select id="lan2">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11 (g++ 8.0)</option>
	<option value="java">JAVA (JDK 1.5+) </option>
	<option value="py">PYTHON (PYTHON 2+) </option>
</select>
<input type="hidden" name="mysession" id="mysession">
<button type="submit" class="btn" id="run2"><b style="font-size: 16px">&#x25BA;</b>SUBMIT</button>
<span id="load2">

	</span>
</div>

</div>

<!--end of problem2 -->
<!--problem 3 -->

<div class="col8 tabcontent" id="problem3">
<div class="panel-light" style="padding: 20px;">
<div class="panel" style="padding: 20px;">
<b>Problem Statement :</b>
<?php
//$setno=$_SESSION['setno'];
$setno=3;
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='e'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>

<br>
<b>Compiler :</b><br><br>
<textarea id="code3" placeholder="paste your code here" rows=10 cols=50  required></textarea>
<b>Select Language :</b>
<select id="lan3">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11 (g++ 8.0)</option>
	<option value="java">JAVA (JDK 1.5+) </option>
	<option value="py">PYTHON (PYTHON 2+) </option>
</select>
<input type="hidden" name="mysession" id="mysession">
<button type="submit" class="btn" id="run3"><b style="font-size: 16px">&#x25BA;</b>SUBMIT</button>
<span id="load3">

	</span>
</div>
</div>


<!--end of problem3 -->

<!--problem 4 -->

<div class="col8 tabcontent" id="problem4">
<div class="panel-light" style="padding: 20px;">
<div class="panel" style="padding: 20px;">
<b>Problem Statement :</b>
<?php
//$setno=$_SESSION['setno'];
$setno=4;
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='e'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>

<br>
<b>Compiler :</b><br><br>
<textarea id="code4" placeholder="paste your code here" rows=10 cols=50  required></textarea>
<b>Select Language :</b>
<select id="lan4">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11 (g++ 8.0)</option>
	<option value="java">JAVA (JDK 1.5+) </option>
	<option value="py">PYTHON (PYTHON 2+) </option>
</select>
<input type="hidden" name="mysession" id="mysession">
<button type="submit" class="btn" id="run4"><b style="font-size: 16px">&#x25BA;</b>SUBMIT</button>
<span id="load4">

	</span>
</div>
</div>

<!--end of problem4 -->

<!--problem 5 -->

<div class="col8 tabcontent" id="problem5">
<div class="panel-light" style="padding: 20px;">
<div class="panel" style="padding: 20px;">
<b>Problem Statement :</b>
<?php
//$setno=$_SESSION['setno'];
$setno=5;
$query=mysqli_query($con,"SELECT statement FROM problems WHERE setno='$setno' and d='e'");
$result=mysqli_fetch_assoc($query);
echo $result['statement'];
?>
</div>

<br>
<b>Compiler :</b><br><br>
<textarea id="code5" placeholder="paste your code here" rows=10 cols=50  required></textarea>
<b>Select Language :</b>
<select id="lan5">
	<option value="CPP">C(gcc compiler)</option>
	<option value="CPP">C++ 11 (g++ 8.0)</option>
	<option value="java">JAVA (JDK 1.5+) </option>
	<option value="py">PYTHON (PYTHON 2+) </option>
</select>
<input type="hidden" name="mysession" id="mysession">
<button type="submit" class="btn" id="run5"><b style="font-size: 16px">&#x25BA;</b>SUBMIT</button>
<span id="load5">

	</span>
</div>
</div>


<!--end of problem5 -->
<div class="col6">
<div class="panel-warning" id="output" style="background-color: black; color: white;">
<b>Output</b>
<br />


</div>
<div class="popup" id="myPopup">
		<div class="popup-content">
			<div class="popup-head">
				<span class="popup-close"><b>X</b></span>
				<h3>Time UP!!!</h3>
			</div>
			<div class="popup-body">
				<h2>You are done! Thanks for the participation</h2>
			</div>
			<div class="popup-footer">
				<button class="dock" data-close="#myPopup">Close Window</button>
			</div>
		</div>
</div>
<!-- leaderboard -->
<div class="popup" id="leaderboard">
		<div class="popup-content" style="width: 90%; margin-top: 10px;">
			<div class="popup-head" style="background-color: darkred; color: white;">
				<span class="popup-close"><b>X</b></span>
				<img src="" style='height: 50px; widht: 40px; float: left;'><h3> Leaderboard</h3>
			</div>
			<div class="popup-body">
				<div id="ranks" style="overflow: scroll">

				</div>
			</div>
			
		</div>
</div>

<!-- end of leaderboard -->

<textarea id="session_remaining" style="display: none;"> 
	<?php echo $_SESSION['remaining']; ?>
</textarea>
<script>
$('.tab').hide();
$('#about').show();
$('#run1').click(function(){ 
	$('#load1').html('<img src="extra/rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code1').val();
	var lan=$('#lan1').val();
	$.post('eval.php',{ code1: code,lan1: lan}, function(data){
		$('#output').html(data);
		$('#load1').html('');
	});
});
$('#run2').click(function(){ 
	$('#load2').html('<img src="extra/rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code2').val();
	var lan=$('#lan2').val();
	$.post('eval.php',{ code2: code,lan2: lan}, function(data){
		$('#output').html(data);
		$('#load2').html('');
	});
});
$('#run3').click(function(){ 
	$('#load3').html('<img src="extra/rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code3').val();
	var lan=$('#lan3').val();
	$.post('eval.php',{ code3: code,lan3: lan}, function(data){
		$('#output').html(data);
		$('#load3').html('');
	});
});
$('#run4').click(function(){ 
	$('#load4').html('<img src="extra/rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code4').val();
	var lan=$('#lan4').val();
	$.post('eval.php',{ code4: code,lan4: lan}, function(data){
		$('#output').html(data);
		$('#load4').html('');
	});
});
$('#run5').click(function(){ 
	$('#load5').html('<img src="extra/rolling.gif" style="height: 35px; width: 35px;">');
	var code=$('#code5').val();
	var lan=$('#lan5').val();
	$.post('eval.php',{ code5: code,lan5: lan}, function(data){
		$('#output').html(data);
		$('#load5').html('');
	});
});
$('#start').click(function(){
	$(this).attr('disabled','disabled');
	$('.tab').show('slow');
	$('#problem1').show();
	setInterval(countdown,1000);
	setInterval(getScore,1000);
	

});
$('#lb').click(function(){
	$('#leaderboard').fadeIn('fast');
	$.post("leaderboard.php",function(data){
		$('#ranks').html(data);
	});
});

</script>
<?php
	if($_SESSION['active']==true)
	{
		
?>
<script>
$('.tab').show('slow');
var time=$('#session_remaining').val();
m=Math.floor(time/60);
s=time%60;
	$('#problem1').show();
	$('#start').attr('disabled','disabled');
	setInterval(countdown,1000);
	setInterval(getScore,1000);
	</script>
	<?php
}
?>
</html>