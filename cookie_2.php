<html>
<?php
	echo "Cookie value ";
	/*if(isset($_COOKIE["test_cookie"])) {
		echo ++$_COOKIE["test_cookie"];
	} else {
		
		
		echo $_COOKIE["test_cookie"];
	}*/
	setcookie("test_cookie", 1, time()+3600);
?>
<br/>
<a href="cookie_2.php">Reload this sh!t</a>
</html>
