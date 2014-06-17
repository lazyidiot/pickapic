
<?php
require "registerstyle.php";

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	$email = $_POST['email'];
	if($username && $password && $password1 && $email)
	{


	    if($password==$password1)
		{
		    require "dbc.php";
		    $password=md5($password);

			$query = mysql_query("INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
			if(isset($_POST['submit'])){
				require "members.php";

			}
			else 
			{
				echo "what r u dng ?";
			}
		}
		else
		{
		    echo "Password must match.";
		}
	}
	else
	{
	    echo "All fields are required.";
	}
}

?>