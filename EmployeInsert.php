<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>   
<?php
    $con = mysqli_connect ("localhost","root","","job");
	$ContactPerson=$_POST['txtPerson'];
	$City=$_POST['txtCity'];
	$Mobile=$_POST['txtMobile'];
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	$UserType="Employer";
	$Question=$_POST['cmbQue'];
	$Answer=$_POST['txtAnswer'];
	$query = "SELECT * FROM employer_reg WHERE UserName='$UserName'";
	$result = mysqli_query($con, $query); // $connection is the database connection object

	if(mysqli_num_rows($result) > 0) { // check if the username already exists in the database
		echo '<script type="text/javascript">alert("Username already exists. Please choose a different username.");window.location=\'EmployerReg.php\';</script>';
		
	}
	else{

	// Specify the query to Insert Record
	$sql = "insert into Employer_Reg(ContactPerson,City,Mobile,UserName,Password,Question,Answer) values('".$ContactPerson."','".$City."',".$Mobile.",'".$UserName."','".$Password."','".$Question."','".$Answer."')";
	// execute query
      
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index.php\';</script>';

	}
	
	

?>
</body>
</html>
