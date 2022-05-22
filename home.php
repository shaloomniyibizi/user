<?php 
include('class/User.php');
$user = new User();
$errorMessage =  $user->login();
include('include/header.php');
?>
<title>User Management System</title>
<?php include('include/container.php');?>