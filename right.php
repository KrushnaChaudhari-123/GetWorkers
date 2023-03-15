<!-- Right column -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint">
  <div id="col-in">




  </div> <!-- /about-me -->

  <hr class="noscreen" />

  <!-- Category -->
  <h2 align="center">Login</h3>
    <div class="login">
      <form name="form1" method="post" action="login.php">

        <table width="100%" border="0">
          <tr>
            <td><strong>User Name</strong></td>
          </tr>
          <tr>
            <td><span id="sprytextfield1">
                <label>
                  <input type="text" name="txtUser" id="txtUser">
                </label>
                <span class="textfieldRequiredMsg">*</span></span>
              <label></label>
            </td>
          </tr>
          <tr>
            <td><strong>Password</strong></td>
          </tr>
          <tr>
            <td><span id="sprytextfield2">
                <label>
                  <input type="password" name="txtPass" id="txtPass">
                </label>
                <span class="textfieldRequiredMsg">*</span></span></td>
          </tr>
          <tr>
            <td><strong>User Type</strong></td>
          </tr>
          <tr>
            <td><label>
                <select name="cmbUser" id="cmbUser">
                  <option value="JobSeeker">Worker</option>
                  <option value="Employer" selected="selected">Employer</option>
                </select>
              </label></td>
          </tr>
          <tr>
            <td><label>
                <div align="center">
                  <input type="submit" name="button" id="button" value="Login">
                </div>
              </label></td>
          </tr>
          <tr>
            <td>
              <div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div>
            </td>
            
          </tr>
        </table>

        <br>
        <div align="center"><a href="EmployerReg.php"><strong>New Employer? <br> Register Here</strong></a>
        </div>
        <br>
        <br>

        <div align="center"><a href="JobSeekerReg.php"><strong>New Worker? <br> Register Here</strong></a> </div>
        <p class="btn-more box noprint">&nbsp;</p>
    </div>
    </form>
</div>
<br />

<hr class="noscreen" />

<!-- Archive -->


<hr class="noscreen" />

<!-- Links -->

<hr class="noscreen" />
</div> <!-- /col-in -->
</div> <!-- /col -->
<script type="text/javascript">
  <!--
  var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
  var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
  //-->
</script>