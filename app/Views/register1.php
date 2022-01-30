<?php
$site_url = base_url();
$local_style = $site_url . "/assets/";
$image_url = $site_url . "/assets/images/";
$css_url = $site_url . "/assets/stylesheets/";
$script_url = $site_url . "/assets/scripts/";
?>



<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <link rel="icon" href="<?php echo $image_url ?>favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $css_url . "style.css" ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo $css_url . "splide.min.css"?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $css_url . "loginAndregister.css"?>"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $css_url . "signInAndsignUp.css"?>"/>


<script type="text/javascript">
function checkpass()
{
if(document.signup.inputpass.value!=document.signup.repeatpass.value)
{
alert('New Password and Repeat Password field does not match');
document.signup.repeatpass.focus();
return false;
}
return true;
}

</script>
</head>



<BODY>

	<div class="phppot-contain" >

		<div class="sign-up-container" style="width:1000px">
			<div class="login-signup">
				<a	<?php echo anchor('Home/login','Sign In'); ?> </a>
			</div>
      <div class="form-label">
        Registration
      </div>
		  <div class="modal-body" style="display:flex; justify-content:space-between;">
        <div>
				<form method="post" action="<?php echo base_url("login_Controller/Register");?>">

						<div class="inline-block">
							<div class="form-label">
								First Name
							</div>
				<?php if (isset($validation)) { echo $validation->getError('FirstName'); }?><br/>
							<input class="input-box-330" type="text" name="FirstName"
								value="<?php echo set_value('FirstName'); ?>" />
						</div>


              <div class="inline-block">
                <div class="form-label">
                  City
                </div>
            <?php if (isset($validation)) { echo $validation->getError('City'); }?><br/>
                <input class="input-box-330" type="text" name="City"
              value="<?php echo set_value('City'); ?>"/>
              </div>



              <div class="inline-block">
                <div class="form-label">
                  Country
                </div>
            <?php if (isset($validation)) { echo $validation->getError('Country'); }?><br/>
                <input class="input-box-330" type="text" name="Country"
              value="<?php echo set_value('Country'); ?>"/>
              </div>


        </div>
        <div>


          <div class="inline-block">
            <div class="form-label">
              Last Name
            </div>
        <?php if (isset($validation)) { echo $validation->getError('LastName'); }?><br/>
            <input class="input-box-330" type="text" name="LastName"
              value="<?php echo set_value('LastName'); ?>" />
          </div>




            <div class="inline-block">
              <div class="form-label">
                AddressLine1
              </div>
          <?php if (isset($validation)) { echo $validation->getError('AddressLine1'); }?><br/>
              <input class="input-box-330" type="text" name="AddressLine1"
            value="<?php echo set_value('AddressLine1'); ?>"/>
            </div>



            <div class="inline-block">
              <div class="form-label">
                Phone
              </div>
          <?php if (isset($validation)) { echo $validation->getError('Phone'); }?><br/>
              <input class="input-box-330" type="text" name="Phone"
            value="<?php echo set_value('Phone'); ?>"/>
            </div>

        </div>
        <div>


            <div class="inline-block">
              <div class="form-label">
                Email
              </div>
          <?php if (isset($validation)) { echo $validation->getError('Email'); }?><br/>
              <input class="input-box-330" type="text" name="Email"
            value="<?php echo set_value('Email'); ?>"/>
            </div>



            <div class="inline-block">
              <div class="form-label">
                AddressLine2
              </div>
          <?php if (isset($validation)) { echo $validation->getError('AddressLine2'); }?><br/>
              <input class="input-box-330" type="text" name="AddressLine2"
            value="<?php echo set_value('AddressLine2'); ?>"/>
            </div>





            <div class="inline-block">
              <div class="form-label">
                Password
              </div>
        <?php if (isset($validation)) { echo $validation->getError('Password'); }?><br/>
              <input class="input-box-330" type="password"
                name="Password"
                />
            </div>


        </div>
        <div>

          <div class="inline-block">
            <div class="form-label">
              Account
            </div>
        <?php if (isset($validation)) { echo $validation->getError('Account_AccountID'); }?><br/>
            <input class="input-box-330" type="text" name="Account_AccountID"
          value="<?php echo set_value('Account_AccountID'); ?>"/>
          </div>


            <div class="inline-block">
              <div class="form-label">
                County
              </div>
          <?php if (isset($validation)) { echo $validation->getError('County'); }?><br/>
              <input class="input-box-330" type="text" name="County"
            value="<?php echo set_value('County'); ?>"/>
            </div>




						<div class="inline-block">
							<div class="form-label">
								Confirm Password
							</div>
					<?php if (isset($validation)) { echo $validation->getError('password_confirm'); }?><br/>
							<input class="input-box-330" type="password" name="password_confirm"
					</div>

					<div class="row">
						<input class="btn" type="submit" name="signup-btn"
							id="signup-btn" value="Sign up">
					</div>
				</form>
      </div>
		</div>
	</div>
	<script>

</BODY>




    <!-- Bootstrap core JavaScript-->
	<script src="<?php echo $script_url.'jquery.min.js'?>"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo $script_url.'bootstrap.bundle.min.js'?>"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
	<script src="<?php echo $script_url.'jquery.easing.min.js'?>"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
	<script src="<?php echo $script_url.'sb-admin-2.min.js'?>"></script>
    <script src="js/sb-admin-2.min.js"></script>
	<script src="<?php echo $script_url.'signInAndsignUp.js'?>"></script>
</body>

</html>
