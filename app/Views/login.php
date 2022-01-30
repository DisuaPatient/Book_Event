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
		<link rel="stylesheet" type="text/css" href="<?php echo $css_url . "ignInAndsignUp.css"?>"/>


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
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
		<a	<?php echo anchor('Home/register1','Sign Up'); ?> </a>

			</div>
			<div class="signup-align">

	<form action="<?php echo base_url("login_Controller/Login");?>"  method="post"
	<?php csrf_field() ?>
					<div class="signup-heading"  style="color:white;">Login</div>
        	<div class="error-msg" id="error-msg"></div>
				<div class="row">

						<div class="inline-block">

							<div class="form-label">
								Email
							</div>
							<?php if (isset($validation)) { echo $validation->getError('Email'); }?><br/>
							<input class="input-box-330" type="text" name="Email"
							value="<?php echo set_value('Email'); ?>"
								/>
						</div>
					</div>
					<div class="row">

						<div class="inline-block">
							<div class="form-label">
								Password
							</div>
							<?php if (isset($validation)) { echo $validation->getError('Password'); }?><br/>
							<input class="input-box-330" type="text"
								name="Password"     />
						</div>
					</div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="Login Now">
					</div>
				</form>
			</div>
		</div>
	</div>


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


</html>
