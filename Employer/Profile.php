<?php
session_start();
if(isset($_SESSION['$UserName_emp'])){

} 
else{
		header('location:../index.php');
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>GetWorker</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css2a/Employer21.css" />
   
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   
<!-- Page (2 columns) -->
    <div id="page" class="box">
    <div id="page-in" class="box">

        <div id="strip" class="box noprint">

            <!-- RSS feeds -->
            <hr class="noscreen" />

            <!-- Breadcrumbs -->
            <p id="breadcrumbs">&nbsp;</p>
          <hr class="noscreen" />
            
        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">

           
            <!-- /article -->

            <hr class="noscreen" />

           
            <!-- /article -->

            <hr class="noscreen" />
            
            <!-- Article -->
           
            <!-- /article -->

            <hr class="noscreen" />

            <!-- Article -->
            <div class="article">
                
<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

$sql = "select * from Employer_Reg where EmployerId ='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
                
                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                  
                  <tr>
                      <td><strong>Company ID:</strong></td>
                      <td><?php echo $row['EmployerId'];?></td>
                    </tr>
                   
                    <tr>
                      <td><strong>Contact Person:</strong></td>
                      <td><?php echo $row['ContactPerson'];?></td>
                    </tr>
                   
                    <tr>
                      <td><strong>City:</strong></td>
                      <td><?php echo $row['City'];?></td>
                    </tr>
                  
                    <tr>
                      <td><strong>Mobile:</strong></td>
                      <td><?php echo $row['Mobile'];?></td>
                    </tr>
                   
                    <tr>
                      <td><strong>User Name:</strong></td>
                      <td><?php echo $row['UserName'];?></td>
                    </tr>
                    
                 
                  </table>
                  
                  <tr>
                    <td>&nbsp;</td>
                    <td ><a  href="EditProfile.php?EmployerId=<?php echo $row['EmployerId']; ?>"><h3 >Edit Profile</h3></a></td>
                  </tr> 
             
              
                  
                <?php
                mysqli_close($con);
                ?>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->



    </div> <!-- /page-in -->
    </div> <!-- /page -->

 
<?php
include "footer1.php"
?>
</div> <!-- /main -->

</body>
</html>
