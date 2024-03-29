<?php
if (!isset($_SESSION)) {
  session_start();

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

  <title>Get Worker</title>
  <meta name="description" content="..." />
  <meta name="keywords" content="..." />

  <link rel="index" href="./" title="Home" />
  <link rel="stylesheet" media="screen,projection" type="text/css" href="./css2a/EmployerProfile2.css" />

  <style type="text/css">
    <!--
    .style1 {
      color: #000066;
      font-weight: bold;
    }
    -->
  </style>
  <script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
  <script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
  <link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
  <link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
            $ID = $_SESSION['ID'];
            // Establish Connection with Database
            $con = mysqli_connect("localhost", "root", "", "job");

            // Specify the query to execute
            $sql = "select * from Employer_Reg where EmployerId ='" . $ID . "'  ";
            // Execute query
            $result = mysqli_query($con, $sql);
            // Loop through each records 
            $row = mysqli_fetch_array($result)
              ?>
            <form method="post" action="UpdateProfile.php">
              <table width="100%" border="1" cellspacing="2" cellpadding="2">
                <tr>
                  <td><strong>Company ID:</strong></td>
                  <td><span id="sprytextfield1">
                      <label>
                        <input name="txtId" type="text" id="txtId" value="<?php echo $row['EmployerId']; ?>" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td><strong>Contact Person:</strong></td>
                  <td><span id="sprytextfield3">
                      <label>
                        <input name="txtContact" type="text" id="txtContact"
                          value="<?php echo $row['ContactPerson']; ?>" pattern="[A-Za-z ]+" required />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr>
                  <td><strong>City:</strong></td>
                  <td><span id="sprytextfield4">
                      <label>
                        <input name="txtCity" type="text" id="txtCity" value="<?php echo $row['City']; ?>"
                          pattern="[A-Za-z ]+" required />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr>
                  <td><strong>Mobile:</strong></td>
                  <td><span id="sprytextfield6">
                      <label>
                        <input name="txtMobile" type="text" id="txtMobile" value="<?php echo $row['Mobile']; ?>"
                          pattern="[0-9]{10}" required />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr>
                  <td><strong>User Name:</strong></td>
                  <td><span id="sprytextfield8">
                      <label>
                        <input name="txtUser" type="text" id="txtUser" value="<?php echo $row['UserName']; ?>"
                          pattern="[A-Za-z ]+" required />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td><strong>Password:</strong></td>
                  <td><span id="sprytextfield9">
                      <label>
                        <input name="txtPassword" type="password" id="txtPassword"
                          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                          title="Password must contain at least one number, one uppercase letter, one lowercase letter, and be at least 8 characters long."
                          required value="<?php echo $row['Password']; ?>" /> </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>

                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                      <input type="submit" name="button" id="button" value="Submit" />
                    </label></td>
                </tr>
              </table>
            </form>
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

  <script type="text/javascript">

    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
    var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
    var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
    var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
    var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
    var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
    var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9");
  </script>
</body>

</html>