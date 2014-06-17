<?php
session_start();
if(isset($_POST['login']))
{
    $email = $_POST['email'];
	$password = $_POST['password'];
	if($email && $password)
	{
        require "dbc.php";
        $password=md5($password);
		$query = mysql_query("SELECT * FROM users WHERE email = '$email'");
		while($row = mysql_fetch_assoc($query))
		{
		    $email1 = $row['email'];
			$password1 = $row['password'];
		}
		if($email==$email1 && $password==$password1)
		{
		    $_SESSION['email']=$email1;
			$_SESSION['password']=$password1;
			header("location:members.php");
		}
		else
		{
		    header("location:index.php?notify=Wrong Username or Password.");
		}
	}
	else
	{
	    header("location:index.php?notify= All fields required.");
	}
}
?>