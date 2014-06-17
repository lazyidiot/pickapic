
<style type="text/css">
<!--
.ed{
	position: auto;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
position: auto;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 20px;
  font-weight: 350;
border-color:#00CCFF;
padding:30px;
background-color:#00CCFF;
height: 36px;

}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
height:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
position: auto;
text-align: center;
font-style: italic;
font-size: smaller;
text-indent: 0;
}
#caption{
margin-top: 5px;
}
img{
height: 225px;
}
-->
</style>
 <body style="background-image:url(backgroundimage.jpg);
 background-size: cover;
    background-position: center center;
    background-attachment: fixed;">
 <form action="members.php" method="post" enctype="multipart/form-data" name="addroom">
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
<br />
<br />
</body>

<?php

session_start();
include ('dbc.php');
echo"done";

if(isset($_SESSION['email']))
{ 			echo "hello";
$email = $_SESSION['email'];
	echo "You are logged in as ".$_SESSION['email'];
	$query = mysql_query("SELECT user_id FROM users WHERE email = '$email'");
	$row=mysql_fetch_array($query);
	echo "you are logged in as gffffdf " .$row['user_id'];
	$abc =$row['user_id'];
	echo "idk" .$abc;


if ((!isset($_FILES['image']['tmp_name'] ))&&(!isset($_FILES['image2']['tmp_name'] ))) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$file2=$_FILES['image2']['tmp_name'];
	$image2= addslashes(file_get_contents($_FILES['image2']['tmp_name']));
	$image_name2= addslashes($_FILES['image2']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			move_uploaded_file($_FILES["image2"]["tmp_name"],"photos/" . $_FILES["image2"]["name"]);

			$location="photos/" . $_FILES["image"]["name"];
			$location2="photos/" . $_FILES["image2"]["name"];
			$caption=$_POST['caption'];
			$caption2=$_POST['caption2'];
			

			$save=mysql_query("INSERT INTO photos (location, caption,location2,caption2,user_id,counter1,counter2) VALUES ('$location','$caption','$location2','$caption2','$abc','0','0')");
		require "display.php";
		echo "done";

		

}
}
else
{
	header("header:index.php?notify=Oops! Something went wrong.");
}


?>