<?php
$database_name=$_GET["db"];
$table_name=$_GET["table"];

$con = mysql_connect("localhost","root","");
$con1=mysql_select_db("$database_name", $con);
$con2 = "select * from $table_name";
$result2 = mysql_query("$con2");
/*$row = mysql_fetch_array($result2);
foreach($row as $value) {
	echo $value;
}*/
while ($row = mysql_fetch_array($result2)) {
	echo $row['name'].$row['name'].$row['number'].$row['number'];
	}
?>
