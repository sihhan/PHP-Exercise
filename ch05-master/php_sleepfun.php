<?php
	// sleep(延遲秒數) 延遲程式執行

	echo date('h:i:s') . '<br />';	// 顯示目前系統時間的時分秒

	sleep(10);	// 延遲10秒後在執行

	echo date('h:i:s') . "<br />";	// 再顯是一次

?>
