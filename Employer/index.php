
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
    
    <title>GET WORKERS</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css2a/main2a.css" />
    <!-- <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" /> -->
    <!-- <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" /> -->
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
           
            <!-- Article -->
            <div class="article">
                <h2><span><a>Our Registered Workers</a></span></h2>
               

                <p>
                <table width="100%" border="1" cellpadding="1" cellspacing="2" bordercolor="#006699" >
<tr>
<th height="32" bgcolor="#e5e9ed" class="style3"><div align="left" class="style9 style5 style2"><strong>Worker Name</strong></div></th>
<th bgcolor="#e5e9ed" class="style3"><div align="left" class="style9 style5 style2"><strong>City</strong></div></th>
<th bgcolor="#e5e9ed" class="style3"><div align="left" class="style9 style5 style2"><strong>Mobile Number</strong></div></th>
<th bgcolor="#e5e9ed" class="style3"><div align="left" class="style9 style5 style2"><strong>WorkType</strong></div></th>
<th bgcolor="#e5e9ed" class="style3"><div align="left" class="style9 style5 style2"><strong>Experience</strong></div></th>
<th bgcolor="#e5e9ed" class="style3"><div align="left" class="style9 style5 style2"><strong>Available</strong></div></th>
</tr>
<?php
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from jobseeker_reg where Availability = 'Yes'";




$result = mysqli_query($con,$sql);


//var_dump($result);

// Loop through each records
while($row = mysqli_fetch_array($result))
{
$Name=$row['JobSeekerName'];
$City=$row['City'];
$Mobile=$row['Mobile'];
$WorkType=$row['WorkType'];
$Experience=$row['Experience'];
$Availability=$row['Availability'];


?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Name;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $City;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Mobile;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $WorkType;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Experience;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $Availability;?></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>

<?php
// Close the connection
mysqli_close($con);
?>


</table>
    </td>
  </tr>
</table>

           
                  
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
