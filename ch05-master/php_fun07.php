<?php
	
	// 區域變數與全域變數

	$msg = "這是全域變數<br/>";

	function showMsg(){

		//global $msg;   


		/* $GLOBALS['msg'] = "這是區域變數<br/>";

		echo $GLOBALS['msg'];

		*/


		$msg = "這是區域變數<br/>";

		echo $msg;

	}

	echo $msg;

	showMsg();

	echo $msg;  

	/*  在函式中如果加上 global $msg; 定義為全域變數後,此時 msg 顯示的結果變為 這是區域變數

		如果加上 $GLOBALS[''] 定義為全域變數,此時 msg 顯示的結果變為 這是區域變數
	*/
?>	