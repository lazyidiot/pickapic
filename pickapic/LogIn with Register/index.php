<?php
require "home.php";
if(isset($_GET['notify']))
{
	echo $_GET['notify'];
}
?>
<?php

session_start();
if(isset($_SESSION['user_id']) || isset($_SESSION['email']))
{
	header("location:members.php");
}
else
{
	require "loginstyle.php";
}
?>
<br/>
<a href="register.php">Register</a>
