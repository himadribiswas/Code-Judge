<?php
require_once "connection.php";
session_start();
$setno=$_SESSION['setno'];
$path=$_SESSION['uid'];
require_once "timelimit.php";
/* For Problem1 */

if(isset($_POST['code1']))
{
	
	$t=0;
	$count=3;
	while($count!=0)
	{
		if($count==3)
		{$inputcase="input1";$outputcase="output1";}
		if($count==2)
		{$inputcase="input2";$outputcase="output2";}
		if($count==1)
		{$inputcase="input3";$outputcase="output3";}

	
	if($_POST['lan1']=="CPP")
	{
		
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem1.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code1']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		
		//$output1=shell_exec('compiler\cpp\bin\g++ '.$filename." -o ".$executable_path."problem1.exe");
		//$output=shell_exec("submissions\\".$path."\problem1.exe<submissions/".$path."/input.txt");
		
		//$output=file_get_contents("submissions\\".$path."\output1.txt");
   
	//	echo ("powershell ".$executable_path."problem1.exe<"."submissions".$path."/input.txt"." 2>&1");
	//	$output=shell_exec("powershell ".$executable_path."problem1.exe<"."submissions".$path."/input.txt"." 2>&1");
	   $time_start = microtime(true);
	     shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem1.exe 2>".$executable_path."error-output.txt");
		$output=execute("submissions\\".$path."\problem1.exe<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem1 : ) </b> <br />";
		if(@!unlink($executable_path."problem1.exe"))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
				echo file_get_contents($executable_path."/error-output.txt");
			break;
		}
		else
		{
			if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag1'])
				{
				$_SESSION['problem1']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem1'];
				mysqli_query($con,"UPDATE users SET problem1='$score' WHERE uid='$path'");
				$_SESSION['flag1']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
	}
	else
		if($_POST['lan1']=="java")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem1.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code1']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
	//	echo $result[$inputcase]."<br>".$output2;
	//	break;
		 $time_start = microtime(true);
		shell_exec("javac ".$filename." 2>".$executable_path."/error-output.txt");
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem1.java');
		$output=execute("java -classpath submissions/".$path." problem1<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		if($count==3)
		echo "<b>Result (Problem1 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem1.class'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			echo nl2br($output1);
			break;
		}
		else
		{
			
			if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag1'])
				{
				$_SESSION['problem1']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem1'];
				mysqli_query($con,"UPDATE users SET problem1='$score' WHERE uid='$path'");
				$_SESSION['flag1']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
     //  echo strlen(rtrim($output))."<br>".strlen(rtrim($output2))."<br>";
   //  echo rtrim($output)."<br>";
     //echo strcmp(preg_replace('/\s\s+/', ' ', $output),(rtrim($output2)) )."<br>" ;
			//	echo "<br>".((rtrim($output))-(rtrim($output2)))."<Br>";
					/*		$str = ($output);
				$strlen = strlen( $str );
				for( $i = 0; $i <= $strlen; $i++ ) {
					$char = substr( $str, $i, 1 );
						echo $i."  ".$char."<br>";
    // $char contains the current character, so do your processing here
}*/
        //   break;
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				//if(rtrim($output)==rtrim($output2) && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				break;
			}
		}
		}
		else
			if($_POST['lan1']=="py")
		{

			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem1.py";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code1']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		$output=shell_exec("powershell python $filename<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		//$output2=shell_exec('solved/problem1.out<solved/input.txt');
		if($count==3)
		echo "<b>Result (Problem1 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem1.py'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
		}
		else
		{
			if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";
				if(!$_SESSION['flag1'])
				{
				$_SESSION['problem1']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem1'];
				mysqli_query($con,"UPDATE users SET problem1='$score' WHERE uid='$path'");
				$_SESSION['flag1']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				break;
			}
		}//end of o/p
	  }//end of lang chk
	}//end of while	
	
}
/*end of problem 1*/

/*for problem 2 */


?>
<!-- ______________________________________________________________________________ -->
<?php

if(isset($_POST['code2']))
{
	$t=0;
	$count=3;
	while($count!=0)
	{
		if($count==3)
		{$inputcase="input1";$outputcase="output1";}
		if($count==2)
		{$inputcase="input2";$outputcase="output2";}
		if($count==1)
		{$inputcase="input3";$outputcase="output3";}
	$setno=2;
	if($_POST['lan2']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem2.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code2']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem2.exe 2>".$executable_path."error-output.txt");
		$output=execute("submissions\\".$path."\problem2.exe<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem2 : ) </b> <br />";
		if(@!unlink($executable_path."problem2.exe"))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
				echo file_get_contents($executable_path."/error-output.txt");
				break;
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag2'])
				{
				$_SESSION['problem2']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem2'];
				mysqli_query($con,"UPDATE users SET problem2='$score' WHERE uid='$path'");
				$_SESSION['flag2']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
	}
	else
		if($_POST['lan2']=="java")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem2.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code2']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("javac ".$filename." 2>".$executable_path."/error-output.txt");
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem2.java');
		$output=execute("java -classpath submissions/".$path." problem2<submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem2.out<solved/input.txt');
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem2 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem2.class'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
			
			
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag2'])
				{
				$_SESSION['problem2']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem2'];
				mysqli_query($con,"UPDATE users SET problem2='$score' WHERE uid='$path'");
				$_SESSION['flag2']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
		}
		else
			if($_POST['lan2']=="py")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem2.py";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code2']);
		fclose($fp);
	    $query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		$output=shell_exec("powershell python $filename<submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem2.out<solved/input.txt');
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem2 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem2.py'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
			
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag2'])
				{
				$_SESSION['problem2']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem2'];
				mysqli_query($con,"UPDATE users SET problem2='$score' WHERE uid='$path'");
				$_SESSION['flag2']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
		}
	}
}


?>
<!-- code 3 ______________________________________________________________________________ -->

<?php

if(isset($_POST['code3']))
{
	$t=0;
	$count=3;
	while($count!=0)
	{
		if($count==3)
		{$inputcase="input1";$outputcase="output1";}
		if($count==2)
		{$inputcase="input2";$outputcase="output2";}
		if($count==1)
		{$inputcase="input3";$outputcase="output3";}
	$setno=3;
	if($_POST['lan3']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem3.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code3']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem3.exe 2>".$executable_path."error-output.txt");
		$output=execute("submissions\\".$path."\problem3.exe<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem3 : ) </b> <br />";
		if(@!unlink($executable_path."problem3.exe"))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
				echo file_get_contents($executable_path."/error-output.txt");
				break;
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag3'])
				{
				$_SESSION['problem3']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem3'];
				mysqli_query($con,"UPDATE users SET problem3='$score' WHERE uid='$path'");
				$_SESSION['flag3']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
	}
	else
		if($_POST['lan3']=="java")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem3.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code3']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("javac ".$filename." 2>".$executable_path."/error-output.txt");
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem3.java');
		$output=execute("java -classpath submissions/".$path." problem3<submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem3.out<solved/input.txt');
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem3 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem3.class'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
			
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag3'])
				{
				$_SESSION['problem3']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem3'];
				mysqli_query($con,"UPDATE users SET problem3='$score' WHERE uid='$path'");
				$_SESSION['flag3']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
		}
		else
			if($_POST['lan3']=="py")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem3.py";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code3']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		$output=shell_exec("powershell python $filename<submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem3.out<solved/input.txt');
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem3 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem3.py'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
			
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag3'])
				{
				$_SESSION['problem3']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem3'];
				//echo $score;
				mysqli_query($con,"UPDATE users SET problem3='$score' WHERE uid='$path'");
				$_SESSION['flag3']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		 }
		}
	}
}


?>

<?php
//code 4
if(isset($_POST['code4']))
{
	$t=0;
	$count=3;
	while($count!=0)
	{
		if($count==3)
		{$inputcase="input1";$outputcase="output1";}
		if($count==2)
		{$inputcase="input2";$outputcase="output2";}
		if($count==1)
		{$inputcase="input3";$outputcase="output3";}
	$setno=4;
	if($_POST['lan4']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem4.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code4']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem4.exe 2>".$executable_path."error-output.txt");
		$output=execute("submissions\\".$path."\problem4.exe<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem4 : ) </b> <br />";
		if(@!unlink($executable_path."problem4.exe"))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag4'])
				{
				$_SESSION['problem4']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem4'];
				mysqli_query($con,"UPDATE users SET problem4='$score' WHERE uid='$path'");
				$_SESSION['flag4']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
	}
	else
		if($_POST['lan4']=="java")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem4.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code4']);
		fclose($fp);
	    $query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("javac ".$filename." 2>".$executable_path."/error-output.txt");
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem4.java');
		$output=execute("java -classpath submissions/".$path." problem4<submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem4.out<solved/input.txt');
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem4 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem4.class'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
			
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag4'])
				{
				$_SESSION['problem4']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem4'];
				mysqli_query($con,"UPDATE users SET problem4='$score' WHERE uid='$path'");
				$_SESSION['flag4']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
		}
		else
			if($_POST['lan4']=="py")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem4.py";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code4']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		$output=shell_exec("powershell python $filename<submissions/".$path."/input.txt");
		//$output2=shell_exec('solved/problem4.out<solved/input.txt');
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem4 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem4.py'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
			
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag4'])
				{
				$_SESSION['problem4']=500+($_SESSION['remaining']/60); echo $_SESSION['remaining'];
				$score=$_SESSION['problem4'];
				
				mysqli_query($con,"UPDATE users SET problem4='$score' WHERE uid='$path'");
				$_SESSION['flag4']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
		}
	}
}


?>
<?php
//Code 5
if(isset($_POST['code5']))
{
	$t=0;
	$count=3;
	while($count!=0)
	{
		if($count==3)
		{$inputcase="input1";$outputcase="output1";}
		if($count==2)
		{$inputcase="input2";$outputcase="output2";}
		if($count==1)
		{$inputcase="input3";$outputcase="output3";}
	$setno=5;
	if($_POST['lan5']=="CPP")
	{
		$executable_path="submissions/".$path."/";
		$filename="submissions/".$path."/problem5.cpp";
		$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code5']);
		fclose($fp);
	    $query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$filename." -o ".$executable_path."problem5.exe 2>".$executable_path."error-output.txt");
		$output=execute("submissions\\".$path."\problem5.exe<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem5 : ) </b> <br />";
		if(@!unlink($executable_path."problem5.exe"))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
				echo file_get_contents($executable_path."/error-output.txt");
				break;
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag5'])
				{
				$_SESSION['problem5']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem5'];
				mysqli_query($con,"UPDATE users SET problem5='$score' WHERE uid='$path'");
				$_SESSION['flag5']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
	}
	else
		if($_POST['lan5']=="java")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem5.java";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code5']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		shell_exec("javac ".$filename." 2>".$executable_path."/error-output.txt");
		$output1=shell_exec('compiler\java\bin\javac submissions\\'.$path.'\problem5.java');
		$output=execute("java -classpath submissions/".$path." problem5<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem5 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem5.class'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
			
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag5'])
				{
				$_SESSION['problem5']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem5'];
				mysqli_query($con,"UPDATE users SET problem5='$score' WHERE uid='$path'");
				$_SESSION['flag5']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
		}
		else
			if($_POST['lan5']=="py")
		{
			
		    $executable_path="submissions/".$path."/";
			$filename="submissions/".$path."/problem5.py";
			$fp=fopen($filename,'w');
		fwrite($fp,$_POST['code5']);
		fclose($fp);
		$query=mysqli_query($con,"SELECT ".$inputcase.",".$outputcase." FROM problems WHERE setno='$setno' AND d='e'");
		$result=mysqli_fetch_assoc($query);
		$fp=fopen("submissions/".$path."/input.txt","w");
		fwrite($fp, $result[$inputcase]);
		fclose($fp);
		$output2=$result[$outputcase];
		$time_start = microtime(true);
		$output=shell_exec("powershell python $filename<submissions/".$path."/input.txt");
		$time_end = microtime(true);
		$time = round(($time_end - $time_start),4);
		if($count==3)
		echo "<b>Result (Problem5 : ) </b> <br />";
		if(@!unlink('submissions/'.$path.'/problem5.py'))
		{
			echo "<b style='color: red;'>&#10005; Compilation Error!!</b>";
			echo file_get_contents($executable_path."/error-output.txt");
			break;
		}
		else
		{
				if($time>6)
			{
				echo "<b style='color: red;'>&#10005; Time Limit Exceeded!!</b> ".$time." Seconds";
				break;
			}
			
			else
			if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count==1)
			{
			echo "<b style='color: green;'>&#10004; Correct Answer! Solution Accepted!</b></b>";

				if(!$_SESSION['flag5'])
				{
				$_SESSION['problem5']=500+($_SESSION['remaining']/60);
				$score=$_SESSION['problem5'];
				//echo $score;
				mysqli_query($con,"UPDATE users SET problem5='$score' WHERE uid='$path'");
				$_SESSION['flag5']=true;
				}
				echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Execution Time: ".($time)." Seconds";
				break;
			}
			else
				if(strcasecmp(preg_replace('/\s\s+/', ' ', (rtrim($output))),(rtrim($output2)) ) ==0 && $count>0)
				{
					$count=$count-1;
			     }
			else
			{
				echo "<b style='color: red;'>&#10005; Wrong Answer!!</b> <br />";
				if($count==1)
				{	echo "<b>Internal Test Case Failed</b>: <br/>";
				}
				else if($count==2)
				{
					echo "<b>Test Case 2 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else if($count==3)
				{
					echo "<b>Test Case 1 Failed</b>: <br/>";
					echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}	
				else{
				echo "<b>Your Output</b>: <br/>";
				echo "<b>".nl2br($output)."</b>";
				echo "<br /><b>Expected Output</b>: <br/>";
				echo "<b>".nl2br($output2)."</b>";
				}
				
				break;
			}
		}
		}
	}
}


?>
