<?php
	class Car {
		$t = 523,$u=432;
		function test() {
			//global $t,$u;
			//echo "$t+$u";
			$this->model="Toyota";
		}
	}
	$obj1 = new Car();
	echo "$obj1->model";
?>
