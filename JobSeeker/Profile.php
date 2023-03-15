<?php
session_start();
if(isset($_SESSION['$UserName_job'])){
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
    
    <title>GET WORKERS</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css3/jobseekerMain1.css" />
 
    <style type="text/css">

.style1 {
	color: #000066;
	font-weight: bold;
}


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
                <h2><span><a >     Welcome <?php echo $_SESSION['Name'];?></a></span></h2>
               
<?php
$ID=$_SESSION['ID'];
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to execute
$sql = "select * from JobSeeker_Reg where JobSeekId='".$ID."'  ";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
$row = mysqli_fetch_array($result)
?>
                <div class="table"  >
                  
                <table  width="80%"  cellspacing="2" cellpadding="2">
                <tr >
                    <td><strong>Worker ID:</strong></td>
                    <td><?php echo $row['JobSeekId'];?></td>
                  </tr>  
                <tr>
                    <td><strong>Name:</strong></td>
                    <td><?php echo $row['JobSeekerName'];?></td>
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
                    <td><strong>Birth Date:</strong></td>
                    <td><?php echo $row['BirthDate'];?></td>
                  </tr> 
                
                  <tr>
                    <td><strong>WorkType:</strong></td>
                    <td><?php echo $row['WorkType'];?></td>
                  </tr>
                  <tr>
                    <td><strong>Experience:</strong></td>
                    <td><?php echo $row['Experience'];?></td>
                  </tr>
                  
                  <?php if ($row['Availability'] != 'No'): ?>
                  <tr>
                  <td><strong>Availability</strong></td>
                  <td><?php echo $row['Availability']; ?></td>
                  </tr>
                  <?php endif; ?>
                  <?php if ($row['Availability'] == 'No'): ?>
                  <tr>
                  <td><strong>Available From</strong></td>
                   <td><?php echo $row['Availability_Date']; ?></td>
                   </tr>
                  <?php endif; ?>




                                             
                </table>

                <tr>
                    <td><strong></strong></td>              
                    <td><a href="EditProfileWorker.php?JobSeekId=<?php echo $row['JobSeekId']; ?>" class="article" ><h3> Edit Profile</h3></a></td>
                  </tr>
                </div>
               
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <?php
            mysqli_close($con);
            ?>

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
