<?php

	// 字串索引鍵的陣列範例

	$myArray['myName'] = 'David';

	$myArray['myHeight'] = 181;

	$myArray['myWeight'] = 78;

	echo "大家好，我的名字叫" . $myArray['myName'] . "。我的身高是" . $myArray['myHeight'] . "公分，體重" . $myArray['myWeight'] . "公斤。 <br />";


	/* 	在雙引號中顯示陣列變數 

		※ 陣列前後須使用大括號 { } ； 大括號與陣列變數間不可以有空白，否則會無法正確顯示。

	*/

	echo "大家好，我的名字叫{$myArray['myName']}。我的身高是{$myArray['myHeight']}公分，體重{$myArray['myWeight']}公斤。 ";

?>


