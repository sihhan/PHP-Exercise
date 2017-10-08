<?php
	// 參數的傳值呼叫
	$x = 2;

	function showDouble($x){

		$x = $x * 2;

		echo "函式中的值為：" . $x . "<br/>" ;

	}

	showDouble($x);

	echo "函式外的值為：" . $x . "<br/>" ;

	// 函式內與函式外的變數並沒有因為變數相同而混淆

?>