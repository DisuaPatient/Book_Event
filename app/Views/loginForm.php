<div class="p-3">

<form method="post" action="<?php echo base_url("Home/Login");?>" 
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="Email" id="name" class="form-control" placeholder="Enter your email">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" id="name" class="form-control" placeholder="Enter your password">
		</div>
		<div class="form-group">
			<input type="submit" name="button" value="Login" class="btn">
		</div>
	</form>
    <?php echo anchor('Home/signup', 'Not a member? Register Now');?>

</div>