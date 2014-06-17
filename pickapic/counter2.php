<?php
require "dbc.php";
$abc2=$_GET['pass'];

	$query = mysql_query("SELECT * FROM photos where battle_id='$abc2'");
	$row=mysql_fetch_array($query);
	$abc =$row['counter2'];
	$count=$abc;
	$count=$count + 1;
	mysql_query("UPDATE photos SET counter2 = '$count' where battle_id='$abc2'");
	echo "<p><a href='display.php'>next</a></p>";
	

?>