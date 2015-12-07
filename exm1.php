<?php
$database_name=$_GET["db"];
$table_name=$_GET["table"];

$con = mysql_connect("localhost","root","");
$con1=mysql_select_db("$database_name", $con);

if(isset($_GET["INSERT"])) {
	
	$first=$_GET["first"];
	$last=$_GET["last"];
	$sap=$_GET["sap"];
	$roll=$_GET["roll"];
	$query1="INSERT INTO $table_name values('$first','$last','$sap','$roll')";
	mysql_query($query1);
	echo "INSERTED";
}

?>
