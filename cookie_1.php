<?php

	/*
	 * Trying to use cookie and session at same fucking time
	 * Possible memory leak, bad for browser!
	 */
	 
	session_start();	// session started
	
	echo "Entry count ";
	
	if(isset($_COOKIE["test_cookie2"])) {
		$_SESSION["refresh"]=$_COOKIE["test_cookie2"];
		$_SESSION["refresh"]++;
	} else {
		$_SESSION["refresh"]="1";
	}
	
	setcookie("test_cookie2", $_SESSION["refresh"], time()+3600);
	echo $_SESSION["refresh"];
	echo "<br>";
	echo "Values will persist till ";
	echo time()+3600;
?>
	
 
