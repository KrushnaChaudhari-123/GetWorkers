<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="content-language" content="cs" />
  <meta name="robots" content="all,follow" />


  <title>Get Workers</title>

  <link rel="stylesheet" media="screen,projection" type="text/css" href="./css1/getworker2.css" />


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



        </div> <!-- /strip -->

        <!-- Content -->
        <div id="content">



          <div class="article">
            <h2><span>Forget Password</span></h2>


            <form id="form2" method="post" action="ForPass.php">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="left" valign="middle">Select User:</td>
                  <td>
                    <p>
                      <label>
                        <input type="radio" name="rdUser" value="Employer" id="rdUser_0" />
                        Employer</label>
                      <br />
                      <label>
                        <input type="radio" name="rdUser" value="JobSeeker" id="rdUser_1" />
                        JobSeeker</label>
                      <br />
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>User Name:</td>
                  <td><span id="sprytextfield3">
                      <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td>Security Question:</td>
                  <td><select name="cmbQue" id="cmbQue">
                      <option selected="selected">What is Your Pet Name?</option>
                      <option>Who is Your Favourite Person?</option>
                      <option>What is the Name of Your First School?</option>
                    </select></td>
                </tr>
                <tr>
                  <td>Answer:</td>
                  <td><span id="sprytextfield4">
                      <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td>New Password:</td>
                  <td><span id="sprytextfield4">
                      <label>
                        <input type="password" name="txtNewPass" id="txtNewPass"
                          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                          title="Password must contain at least one number, one uppercase letter, one lowercase letter, and be at least 8 characters long."
                          required />
                      </label>
                      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><label>
                      <input type="submit" name="button2" id="button2" value="Submit" />
                    </label></td>
                </tr>
              </table>
            </form>
            <p>&nbsp;</p>
            <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

          <hr class="noscreen" />

        </div> <!-- /content -->




      </div> <!-- /main -->
      <?php
      include "footer1.php"
        ?>

</body>

</html>