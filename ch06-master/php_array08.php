<?php

	/*	foreach 迴圈的使用

		語法格式：不使用陣列索引建

				若程式中並不需要使用到陣列的索引建，其使用的格式如下：

					foreach ( 陣列名稱 as 自訂變數名稱 ) {
	
						執行的程式內容;

					}

	*/

	$season = array('春', '夏', '秋', '冬');

	echo "每年的四季分別為：";

	foreach ($season as $value) {

		echo $value;

	}


	// 以 for 迴圈來改寫 foreach 迴圈

	$season = array('春', '夏', '秋', '冬');

	$aNum = count($season); //	使用 count() 函式取陣列元素的數量

	echo "每年的四季分別為：";

	for ($i=0; $i < $aNum; $i++) { 
		
		echo $season[$i];

	}

?>