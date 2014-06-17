<?php

session_start();


if(isset($_SESSION['email']) )
{ echo "hello";
	$email = $_SESSION['email'];
	
	echo "<br><br><a href='logout.php'>LogOut</a>";
	echo "<title>$email </title>";
}
else
{
	header("header:index.php?notify=Oops! Something went wrong.");
}


?>