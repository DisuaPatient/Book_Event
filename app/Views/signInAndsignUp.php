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



<div class="cotn_principal">



<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
      <h2>LOGIN</h2>  
  <p>Welcome to RedValley Event Management</p> 
  <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
<div class="col_md_sign_up">
  <h2>SIGN UP</h2>
<p>Welcome to RedValley Event Management</p>
<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
  </div>
       </div>

    
    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
       
    </div>
<div class="cont_forms" >
    <div class="cont_img_back_">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>
 <div class="cont_form_login">
 
 
 
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
 <form method="post" action="<?php echo base_url("login_Controller/signIn");?>" 
 <?php csrf_field() ?>
 
   <h2>LOGIN</h2>
         <label for="exampleInputpassword">Email</label>
         <?php isset($validation)? display_error($validation,'Email') :'' ?>
         <input 
	       type="text" name="Email" value="<?php set_value('Email'); ?>" placeholder="enter email" />  
	       <br/>
		   
		   <label for="exampleInputpassword">password</label>
		   <?php isset($validation)? display_error($validation,'Password') :''  ?>
		   <input placeholder="password"
			type="text" name="Password" value="<?php echo set_value('Password'); ?>"/>
	      <?php if (isset($validation)) { echo $validation->getError('Password'); }?><br/>
 
<button  type="submit" class="btn_login" onclick="cambiar_login()">LOGIN</button>
  </div>
  </form>
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
   <form method="post" action="<?php echo base_url("login_Controller/Register");?>" 

     <h2>SIGN UP</h2>
            <input placeholder="First Name"
			type="text" name="FirstName" value="<?php echo set_value('FirstName'); ?>"/>
	        <?php if (isset($validation)) { echo $validation->getError('FirstName'); }?><br/>
			
          
		  <input placeholder="Last Name"
			type="text" name="LastName" value="<?php echo set_value('LastName'); ?>"/>
	        <?php if (isset($validation)) { echo $validation->getError('LastName'); }?><br/>

		<input placeholder="email"
		type="text" name="Email" value="<?php echo set_value('Email'); ?>"/>
	     <?php if (isset($validation)) { echo $validation->getError('Email'); }?><br/>
		 
		 
		<input placeholder="Password"
		type="text" name="Password" value="<?php echo set_value('Password'); ?>"/>
	   <?php if (isset($validation)) { echo $validation->getError('Password'); }?><br/>

<button type="submit" name="signup" class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>

  </div>
  </form>
    </div>
    
  </div>
 </div>
</div>
  
  


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