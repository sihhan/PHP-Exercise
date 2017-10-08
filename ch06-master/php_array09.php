<?php

	/*	foreach 迴圈的使用

		語法格式：使用陣列索引建

				若程式中使用到陣列的索引建，其使用的格式如下：

					foreach ( 陣列名稱 as 索引鍵變數 => 變數値 ) {
	
						執行的程式內容;

					}

	*/

	$weedArray = array('星期日'=>'Sunday', 
		'星期一'=>'Monday', 
		'星期二'=>'Tuesday', 
		'星期三'=>'Wednesday', 
		'星期四'=>'Thursday', 
		'星期五'=>'Friday', 
		'星期六'=>'Saturday');

	foreach ($weedArray as $cweek => $eweek) {
		
		echo $cweek . "的英文是" . $eweek . "<br />" ;

	}

?>