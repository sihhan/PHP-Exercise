<?php

	/*	一般排序函式
		
		sort()、rsort()：排序後無論使用何種索引鍵都會轉換為整數索引鍵，並由零開始編號。

		asort()、arsort()：則保留原主索引鍵，跟著值一起移動。

	*/	

	// 範例以陣列元素值排序	

	$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

	sort($fruits);

	foreach ($fruits as $key => $value) {
		
		echo "$key = $value <br />";

	}

	echo "<hr />";

	$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

	asort($fruits);

	foreach ($fruits as $key => $value) {
		
		echo "$key = $value <br />";

	}

?>	