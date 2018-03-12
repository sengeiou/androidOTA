<?php
$link=mysql_connect("localhost:3306","root","123456");
//mysql_query("SET NAMES utf8");
mysql_select_db("fota",$link);
$sql=mysql_query("insert into WatchLocations (userid,longitude,latitude,datetime) values('123451234512345','99.00888','99.0099','60')",$link);
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
//echo "aaaatest";


?>
