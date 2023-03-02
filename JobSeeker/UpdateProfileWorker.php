<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$txtId = $_POST['txtId'];
$txtContact=$_POST['txtContact'];
$txtCity=$_POST['txtCity'];
$txtMobile = $_POST['txtMobile'];
$txtExperience = $_POST['txtExperience'];
$txtUser=$_POST['txtUser'];
$txtPassword=$_POST['txtPassword'];
$txtAvailability=$_POST['availability'];
// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","job");
// Select Database

// Specify the query to Update Record
$sql = "Update jobseeker_reg  set JobSeekerName='".$txtContact."',City='".$txtCity."',Experience='".$txtExperience."',Mobile='".$txtMobile."',Availability='".$txtAvailability."',Password='".$txtPassword."' where JobSeekId=".$txtId."";
// Execute query
mysqli_query($con,$sql);
// Close The Connection
mysqli_close($con);
echo '<script type="text/javascript">alert("Profile Updated Succesfully");window.location=\'Profile.php\';</script>';
?>
</body>
</html>
