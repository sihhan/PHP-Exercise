<?php
	
	/*  可變動函式

		利用可變動函式的設定方式，動態的設定函式名稱。

		在定義變數時，若指定的值為字串，而該字串又為某個自訂函式的名稱時，就能利用該變數來呼叫函式。

	*/

	function testfun1(){

		echo "目前執行自訂函式一 <br/>";

	}

	function testfun2(){

		echo "目前執行自訂函式二 <br/>";

	}


	$CallTest = "testfun1";


	// function_exists() 檢察函式是否存在(防呆用意)

	if (function_exists($CallTest)) { 
		$CallTest();
	}
	

	$CallTest = "testfun2";

	$CallTest();

?>	