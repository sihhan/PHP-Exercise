<?php
	
	/*	一維陣列

		陣列中的原宿資料的存取是以索引鍵作為指標，只有一個索引鍵的陣列稱為一維陣列，一維陣列是最緊單的陣列型態。

		PHP 陣列的索引鍵可以是整數或是字串，預設是以零起始的整數來建立。

		一維陣列的宣告語法為：	陣列名稱 [索引鍵] = 元素值;

	*/

	// 整數索引鍵的陣列範例

	$weekArray[] = 'Sunday';

	$weekArray[] = 'Monday';

	$weekArray[] = 'Tuesday';

	$weekArray[] = 'Wednesday';

	$weekArray[] = 'Thursday';

	$weekArray[] = 'Friday';

	$weekArray[] = 'Saturday';

	for ($i=0; $i < 7; $i++) { 
		
		echo $weekArray[$i] . '<br />';

	}

?>

