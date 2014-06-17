<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}
p{
margin:0;
padding:0;
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
<html>
<body style="background-image:url(backgroundimage.jpg);
 background-size: cover;
    background-position: center center;
    background-attachment: fixed;">
    </body>
    </html>
<?php
require "dbc.php";
$query="SELECT * FROM photos ORDER BY RAND() limit 0,1";
$result=mysql_query($query);
while($row = mysql_fetch_array($result))
{echo "hi";
$abc=$row['battle_id'];
echo  "battle id is ";
echo $abc;
echo '<div id="imagelist">';
echo '<table><tr><td><p><a href="' . htmlspecialchars("counter.php?stage=23&pass=" .
        urlencode($abc)) . '"><img src="'.$row['location'].'"></a></p></td>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '<td><p><a href="' . htmlspecialchars("counter2.php?stage=23&pass=" .
        urlencode($abc)) . '"><img src="'.$row['location2'].'"></p></td>';

echo '<p id="caption">'.$row['caption2'].' </p>';
echo '</div>';
}
?>

