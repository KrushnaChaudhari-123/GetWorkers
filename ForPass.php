<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    session_start();
    $UserName = $_POST['txtUserName'];
    $Question = $_POST['cmbQue'];
    $Answer = $_POST['txtAnswer'];
    $UserType = $_POST['rdUser'];
    $NewPassword= $_POST['txtNewPass'];

    if ($UserType == "Employer") {
        $con = mysqli_connect("localhost", "root", "", "job");

        $sql = "select * from employer_reg  where UserName='" . $UserName . "' and Question='" . $Question . "' and Answer='" . $Answer . "'";

        $result = mysqli_query($con, $sql);
        $records = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        echo $records;
        if ($records == 0) {
            echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
        } else {
            
            $sql1 = "update employer_reg set Password ='".$NewPassword."'where UserName='" . $UserName . "'";
            mysqli_query($con, $sql1);
            echo '<script type="text/javascript">alert("Password Updated Succesfully!!");window.location=\'index.php\';</script>';
        }
        mysqli_close($con);
    } else {
        $con = mysqli_connect("localhost", "root", "", "job");
        $sql = "select * from jobseeker_reg  where UserName='" . $UserName . "' and Question='" . $Question . "' and Answer='" . $Answer . "'";
        $result = mysqli_query($con, $sql);
        $records = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($records == 0) {
            echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
        } else {
            
            $sql2 = "update jobseeker_reg set Password ='".$NewPassword."'where UserName='" . $UserName . "'";
            mysqli_query($con, $sql2);
            echo '<script type="text/javascript">alert("Password Updated Succesfully!!");window.location=\'index.php\';</script>';
        
        }
        mysqli_close($con);
    }
    ?>
</body>

</html>