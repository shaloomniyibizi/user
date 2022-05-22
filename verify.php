<?php 
// include('class/User.php');
// $user = new User();
// $isVerified =  $user->verifyRegister();
include('include/header.php');
?>
<title> User Management System </title>
<?php include('include/container.php');?>
<div class="container contact">	
	<h2>User Management System</h2>	
	<div class="alert alert-success col-sm-12" >
		Your registration verified successfuly. You can <a href="login.php">login</a> to access your account.
	</div>	
</div>
<?php include('include/footer.php');?>