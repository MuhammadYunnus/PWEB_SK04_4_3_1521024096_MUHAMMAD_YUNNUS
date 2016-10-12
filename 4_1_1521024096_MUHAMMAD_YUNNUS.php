<doctype html>
<?php
	$A = "99";
	if (($A >=0) && ($A <59)) {
		echo $A , "  => CUKUP";
	}
	else if (($A >59) && ($A <85)) {
		echo $A , "  => BAIK";
	}
	else if (($A >85) && ($A <=100)) {
		echo $A , "  => BAIK SEKALI";
	}
	else if ($A >100) {
		echo $A , "  => BAIK SEKALI";
	}
	else if ($A <0) {
		echo $A , "  => MASUKKAN NILAI YANG BENAR !";
	}