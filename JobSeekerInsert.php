<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
	$City=$_POST['txtCity'];
	$Mobile=$_POST['txtMobile'];
	$WorkType=$_POST['WorkType'];	
	$BirthDate=$_POST['txtBirthDate'];
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$UserType="JobSeeker";
	$Availability="Yes";
	
	$query = "SELECT * FROM jobseeker_reg WHERE UserName='$UserName'";
	$con = mysqli_connect ("localhost","root","","job");
	$result = mysqli_query($con, $query); 
	if(mysqli_num_rows($result) > 0) { // check if the username already exists in the database
		echo '<script type="text/javascript">alert("Username already exists. Please choose a different username.");window.location=\'JobSeekerReg.php\';</script>';
		
	}
	else{
		$sql="insert into jobSeeker_reg(JobSeekerName,City,Mobile,WorkType,BirthDate,UserName,Password,Question,Answer,Availability) VALUES (
			'$Name','$City','$Mobile','$WorkType','$BirthDate','$UserName','$Password','$Question','$Answer','$Availability')";
				// execute query
			
			var_dump($sql);
				if(mysqli_query ($con,$sql)){
			
			
			
					echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';
				}
			
			
			mysqli_close ($con);
	}


	// Close The Connection


?>
</body>
</html>
