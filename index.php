<?php 
include('class/User.php');
$user = new User();
$user->loginStatus();
include('include/header.php');
?>
<title>User Management System</title>
<?php include('include/container.php');?>
<div class="container contact">	
	<h2>User Management System</h2>	
	<?php include('menu.php');?>
	<div class="table-responsive">	
	You're welcome Here!
	</div>
</div>	
<?php include('include/footer.php');?>
