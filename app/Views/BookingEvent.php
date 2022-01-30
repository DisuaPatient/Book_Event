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
		<link rel="stylesheet" type="text/css" href="<?php echo $css_url . "BookingEvent.css"?>"/>


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



   <div class="body22">
      <div class="container">
         <header>Book Your Event</header>
         <div class="progress-bar">
            <div class="step">
               <p>
                  Account
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  venues
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Details
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
         </div>
         <div class="form-outer">
           <form method="post" action="<?php echo base_url("login_Controller/BookingEvent");?>">
                <div class="page slide-page">
                   <div class="title">
                      Basic Info:
                   </div>
                   <div class="field">
                      <div class="label">
                         Account:
                      </div>
                    <?php if (isset($validation)) { echo $validation->getError('Account_AccountID'); }?><br/>
                      <input type="text" name="Account_AccountID"
                      value="<?php echo set_value('Account_AccountID'); ?>">
                   </div>
                   <div class="field">
                      <div class="label">
                         Type Of Events
                      </div>
                    <?php if (isset($validation)) { echo $validation->getError('EventStatus'); }?><br/>
                      <input type="text" name="EventStatus"
                      value="<?php echo set_value('EventStatus'); ?>">
                   </div>
                   <div class="field">
                      <button class="firstNext next">Next</button>
                   </div>
                </div>
                <div class="page">
                   <div class="title">
                      Info About The Event:
                   </div>
                   <div class="field">
                      <div class="label">
                        Estimation Amount:
                      </div>
                    <?php if (isset($validation)) { echo $validation->getError('CostTotal'); }?><br/>
                      <input type="text" name="CostTotal"
                      value="<?php echo set_value('CostTotal'); ?>">
                   </div>
                   <div class="field">
                      <div class="label">
                        Estimation Numbers of people:
                      </div>
                      <?php if (isset($validation)) { echo $validation->getError('NoOfGuests'); }?><br/>
                      <input type="text" name="NoOfGuests"
                      value="<?php echo set_value('NoOfGuests'); ?>">
                   </div>
                   <div class="field btns">
                      <button class="prev-1 prev">Previous</button>
                      <button class="next-1 next">Next</button>
                   </div>
                </div>
                <div class="page">
                   <div class="title">
                      Info About The Info:
                   </div>
                   <div class="field">
                      <div class="label">
                         Date
                      </div>
                    <?php if (isset($validation)) { echo $validation->getError('RequestDate'); }?><br/>
                      <input type="date" name="RequestDate"
                      value="<?php echo set_value('RequestDate'); ?>">
                   </div>
                   <div class="field btns">
                      <button class="prev-2 prev">Previous</button>
                      <button class="next-2 next">Next</button>
                   </div>
                </div>
                <div class="page">
                   <div class="title">
                      Login Details:
                   </div>
                   <div class="field">
                      <div class="label">
                         Query
                      </div>
                    <?php if (isset($validation)) { echo $validation->getError('Notes'); }?><br/>
                      <input type="text" name="Notes"
                      value="<?php echo set_value('Notes'); ?>">
                   </div>
                   <div class="field btns">
                      <button class="prev-3 prev">Previous</button>
                      <button  type="submit"  class="btn">Submit</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
       <script src="script.js"></script>
    </body>







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
	<script src="<?php echo $script_url.'form.js'?>"></script>


</html>
