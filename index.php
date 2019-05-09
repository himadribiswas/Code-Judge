<!DOCTYPE html>
<html>
<?php
session_start();
require_once "connection.php";
if(isset($_SESSION['uid']))
    header("Location: test.php");
if(isset($_POST['login']))
{
    $uid=$_POST['uid'];
    $password=$_POST['password'];
    if($ex=mysqli_query($con,"SELECT * from users WHERE uid='$uid' and password='$password'"))
    {
        $result=mysqli_fetch_assoc($ex);
        if((!empty($result)) && ($result['attempt']==0))
        {
            session_start();
            $_SESSION['uid']=$uid;
            $_SESSION['problem1']=0;
            $_SESSION['problem2']=0;
            $_SESSION['problem3']=0;
			$_SESSION['problem4']=0;
			$_SESSION['problem5']=0;
            $_SESSION['flag1']=false;
            $_SESSION['flag2']=false;
            $_SESSION['flag3']=false;
			$_SESSION['flag4']=false;
			$_SESSION['flag5']=false;
            $_SESSION['remaining']=7200; 
            $_SESSION['active']=false;
            $_SESSION['setno']=rand(1,1);
            //mysqli_query($con,"UPDATE users SET attempt='1' WHERE uid='$uid'");
            mkdir("submissions/".$uid);           
            header("Location: test.php");
        }
        else if($result['attempt']==1)
            echo "<script> alert('Sorry!! you have already attempted the contest \\nPlease wait for the results!!'); </script>";
        else 
            echo "<script> alert('Wrong user id or password \\n Please check again!!'); </script>";
    }
}
if(isset($_POST['register']))
{
    $uid=$_POST['uid'];
    $name1=$_POST['name1'];
	$name2=$_POST['name2'];
	$crn1=$_POST['crn1'];
	$crn2=$_POST['crn2'];
	$year1=$_POST['year1'];
	$year2=$_POST['year2'];
    $contact1=$_POST['ph1'];
	$contact2=$_POST['ph2'];
    $password=$_POST['password'];
    if(mysqli_query($con,"INSERT INTO users values('$uid','$name1','$name2','$crn1','$crn2','$year1','$year2','$contact1','$contact2','$password',0,0,0,0,0,0)"))
        echo "<script>alert('Successfully registered!!'); </script>";
    else
        echo "<script>alert('Already registered..'); </script>";
}
?>
<head>
    <title>Alphatech Coding 2017</title>

    <meta name="viewport" content="height=device-height,initial-scale=1.0">
    <script src="apstyle3/js/apstyle.js"></script>
    <link rel="stylesheet" type="text/css" href="apstyle3/css/main.css">
    <link rel="stylesheet" href="tabs.css">
    <nav class="nav">
        <button type="button" class="fold" data-fold="#topBar"></button>
        <div class="folded" id="topBar">
        <ul >
             <li><h3 style="height: 20px; color:white; Padding;10px; margin: 20px 35px 20px 35px;float:left">Alphatech Coding 2017</h3></li>
           <li><h3 style="height: 20px; color:white; Padding;10px;margin: 20px 35px 20px 35px; float:center;">DEPEARTMENT OF ELECTRONICS & COMMUNICATION ENGINEERING</h3></li>
		   <li><h3 style="height: 20px; color:white; Padding;10px; margin: 20px 35px 20px 35px;float:right">RCCIIT,KOLKATA</h3></li>
        </ul>
        </div>
    </nav>
    <style>
    .ip {
        border: 1.5px solid red important;
    }
    </style>
</head>
<body  style="background-size: cover;" background="coding.jpg">
    <div class="row" style="margin-top: 100px;">
        <div class="col4"></div>
        <div class="col4">
            <div class="panel" style="box-shadow: 1px 0px 10px black;">
                <center><h1 style="color:white";>LOGIN!</h1></center>
                <form method="POST" action="index.php">
                <input type="text" name="uid" placeholder="Team Name">
                <input type="password" name="password" placeholder="Password">
				<br>
                <a href="#" style="float: right;  color: White;" onclick="$('#signup').fadeIn('slow');">Register here</a>
				<br><br>
                <button type="submit" class="reddish fulldock" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
<div class="popup" id="signup" >
        <div class="popup-content" style="margin-top: 5%;">
            <div class="popup-head" style="background-color: #333; color: white;">
                <span class="popup-close"><b>X</b></span>
                <center><h3>Register For Alphatech Coding 2017</h3></center>
            </div>
            <div class="popup-body" style="margin: 10px;">
                <form method="POST" action="index.php" style="margin-top: 50px;">
                <center>
                <table cellspacing="10">
	<tr><td colspan="3" align="center">Details</td></tr>
	<tr> <td>Team Name<span>(Don't use space or any special character for team name.)</span></td>
				<td colspan="2"><input type="text" class="ip" name="uid" placeholder="Team Name(Its will be used as ur login ID">                
                </td>
                </tr>
				<tr><td></td></tr>
	<tr align="center"><td></td>
	    <td>Member 1</td>
		<td>Member 2</td>
                
                <tr> <td>Name </td>
                <td>
                <input type="text" name="name1" placeholder="Name of Member 1" required>
                </td>
				<td>
                <input type="text" name="name2" placeholder="Name of Member 2" >
                </td>
                </tr>
				 <tr><td>Class Roll No</td>
                <td>
                <input type="text" name="crn1" placeholder="Class Roll No" required>
                </td>
				<td>
                <input type="text" name="crn2" placeholder="Class Roll No" >
                </td>
				</tr>
				<tr><td>Year</td>
                <td>
                
				<select id="year1" name="year1" required>
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th </option>
				</select>
                </td>
				<td>
                <select id="year2" name="year2">
					<option value="1st">1st</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th </option>
				</select>
                </td>
                </tr>
                <tr><td>Contact</td>
                <td>
                <input type="text" name="ph1" placeholder="Contact No" required>
                </td>
				<td>
                <input type="text" name="ph2" placeholder="Contact No" >
                </td>
                </tr>
                <tr><td>Password</td>
				<td colspan="2">
                <input type="password" name="password" placeholder="Password" required>
                </td>
                </tr>
                </table>
                </center>
            </div>
            <div class="popup-footer">
                <button type="submit" name="register" style="background-color: green;
box-shadow: 1px 0px 10px 1px darkgreen inset; float: right; width: 100%;">Click here to register</button>
                </form>
            </div>
        </div>
</div>
<div class="footer">&copy; 2017 All Rights Reserved. Coding Competition Portal. Designed & Develoved By <strong>Himadri Biswas</strong>  ECE 2014-2018, RCCIIT.</div>
</body>

                
</html>