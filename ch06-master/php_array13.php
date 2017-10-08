<?php

	/*	ksort()、krsort()：可對於陣列中的索印鍵進行遞增與遞減排序。	*/

	//	範例以索引鍵排序

	$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

	ksort($fruits); // 遞增排序

	foreach ($fruits as $key => $value) {
		
		echo "$key = $value <br />";

	}
	
?>	