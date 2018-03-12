<?php
$link=mysql_connect("localhost:3306","root","123456");
//mysql_query("SET NAMES utf8");
mysql_select_db("fota",$link);
$sql=mysql_query("select * from WatchLocations",$link);
while($row=mysql_fetch_assoc($sql))
$output[]=$row;
print(json_encode($output));
mysql_close();
//echo "aaaatest";


?>
