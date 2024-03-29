<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
<title>Get Worker</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css1/getworker2.css" />
    
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
-->
    </style>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<body id="www-url-cz">
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=[
        
                   [//Contact Person
						  ["minlen=1",
		"Please Enter Contact Person"
						  ]
						  
                   ],
				  
                   [//City
						["minlen=1",
		"Please Enter City"
						  ] 					  				
                   ],
				
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=10",
		"Please Enter valid Mobile "
						  ] 	  
                   ],
				  
				
				   [//User
						  ["minlen=1",
		"Please Enter UserName "
						  ]
						 
						  
                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],
				    [//Que
						  
						
                   ],
				    [//Answer
						  
						  ["minlen=1",
		"Please Enter Answer "
						  ]
						  
                   ]
				   
            ];
</SCRIPT>
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
                <h2><span><a>Employer Registration Form</a></span></h2>
               <div class="login">

                <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                   
                   
                    <tr>
                      <td>Contact Person:</td>
                      <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtPerson" id="txtPerson" placeholder="Enter Contact Person" pattern="[A-Za-z ]+" required />
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                   
                    <tr>
                      <td>City:</td>
                      <td><span id="sprytextfield4">
                        <label>
                        <input type="text" name="txtCity" id="txtCity" placeholder="Enter City" pattern="[A-Za-z ]+" required />
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                   
                    <tr>
                      <td>Mobile:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" placeholder="Enter Mobile" pattern="[0-9]{10}" required/>
                        </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                  
                    <tr>
  <td>User Name:</td>
  <td>
    <span id="sprytextfield9">
      <label>
        <input type="text" name="txtUserName" id="txtUserName" placeholder="Enter User Name" pattern="[A-Za-z ]+" required />
      </label>
      <span class="textfieldRequiredMsg">User Name is required.</span>
    </span>
  </td>
</tr>
  <td>Password:</td>
  <td>
    <label>
      <span id="sprytextfield10">
        <input type="password" name="txtPassword" id="txtPassword" placeholder="Enter Password" 
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
        title="Password must contain at least one number, one uppercase letter, one lowercase letter, and be at least 8 characters long."
        required />
        <span class="textfieldRequiredMsg">Password is required.</span>
      </span>
    </label>
  </td>
</tr>

                    <tr>
                      <td>Security Question:</td>
                     <td><select name="cmbQue" id="cmbQue">
                        <option>What is Your Pet Name?</option>
                       <option selected="selected">Who is Your Favourite Person?</option>
                        <option>What is the Name of Your First School?</option>
                                                                  </select></td>
                    </tr>
                    <tr>
                      <td>Answer:</td>
                     <td><span id="sprytextfield11">
                      <label>
                      <input type="text" name="txtAnswer" id="txtAnswer" placeholder="Enter Answer" pattern="[A-Za-z ]+" required />
                      </label>
                      <span class="textfieldRequiredMsg"></span></span></td>
                    </tr>
                    <tr>
                      <td colspan="2"><label>
                        <div align="center">
                          <input type="submit" name="button2" id="button2" value="Submit" />
                          </div>
                      </label></td>
                    </tr>
                  </table>
                  
                 </form>
              </div>
              <p>&nbsp;</p>

                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->

        <?php
include "footer1.php"
?>

    </div> <!-- /page-in -->
    </div> <!-- /page -->

 

</div> <!-- /main -->

<script type="text/javascript">
<!--
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
//-->
</script>



</body>
</html>
