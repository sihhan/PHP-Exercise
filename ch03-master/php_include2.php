<?php 

	echo "載入前....";

	require 'inc3.php'; // 當引用的檔案不存在時,require 會產生錯誤訊息並停止程式執行

	//include 'inc3.php'; // 當引用的檔案不存在時,include 會產生錯誤訊息,但程式會繼續往下執行

	echo "載入後....";