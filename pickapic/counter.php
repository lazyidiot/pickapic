<?php
require "dbc.php";
$abc2=$_GET['pass'];


echo $abc2;
	$query = mysql_query("SELECT * FROM photos where battle_id='$abc2'");
	$row=mysql_fetch_array($query);
	$abc =$row['counter1'];
	$count=$abc;
	$count=$count + 1;
	mysql_query("UPDATE photos SET counter1 = '$count' where battle_id='$abc2'");
	echo "<p><a href='display.php'>next</a></p>";
	

?>