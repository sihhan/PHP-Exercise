<?php
	// 自訂函式的參數預設值
	function sumNum($num1 = 0, $num2 = 0){

		echo "$num1 + $num2 = ";

		echo $num1 + $num2 . '<br/>';

	}


	sumNum();  // 因函式中的參數有預設值($num1 = 0, $num2 = 0) ,所以在呼叫函式時若沒有給予參數,程式不會發生錯誤

	sumNum(1);

	sumNum(5, 6);
?>