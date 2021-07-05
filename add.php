<html>
<head>
<title>project</title>
</head>
<body>
<?php
include_once("config.php");
if(isset($_POST['submit']))
{
  $name=mysqli_real_escape_string($mysqli,$_POST['name']);
  $age=mysqli_real_escape_string($mysqli,$_POST['age']);
  $location=mysqli_real_escape_string($mysqli,$_POST['location']);
  
  $mobile_no=mysqli_real_escape_string($mysqli,$_POST['mobile_no']);

        if(empty($name)||empty($age)||empty($location)||empty($mobile_no))
 {
	    if ((empty($name))) 
	{
		echo"<font color='#00ff00'>name field is empty</font></br>";
	}
	    if ((empty($age))) 
	{
		echo"<font color='#00ff00'>age field is empty</font></br>";
	}
	    if ((empty($location)))
	{
		echo"<font color='#00ff00'>location field is empty</font></br>";
	}
	   
	    if ((empty($mobile_no))) 
	{
		echo"<font color='#00ff00'>field is empty</font></br>";
	}
        echo"<br/><a href='javascript:self.history.back()'>go back</a>";
 }
	   else
	{
		$result=mysqli_query($mysqli,"insert into users(name,age,location,mobile_no)values('$name','$age','$location','$mobile_no')");
		echo"<font color='#00ff00'>data added successfully</font></br>";
		echo"<br/><a href='index.php'>view result</a>";
	}  
}
?>
</body>
</html>
