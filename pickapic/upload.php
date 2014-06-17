

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
 Select Image1: <br />
 <input type="file" name="image" class="ed"><br />
 Caption<br />
 <input name="caption" type="text" class="ed" id="brnu" />
 <br />
Select Image 2: <br />
 <input type="file" name="image2" class="ed"><br />
 Caption<br />
 <input name="caption2" type="text" class="ed" id="brnu" />
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </form>
<br />
Photo Archieve
<br />
<br />
<?php

include ('dbc.php');

$email = $_SESSION['email'];
	echo "You are logged in as ".$_SESSION['email'];
	$query = mysql_query("SELECT user_id FROM users WHERE email = '$email'");
	$row=mysql_fetch_array($query);
	echo "you are logged in as gffffdf " .$row['user_id'];
$result = mysql_query("SELECT * FROM photos");

while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '<p><img src="'.$row['location2'].'"></p>';
echo '<p id="caption">'.$row['caption2'].' </p>';
echo '</div>';
}
?>
