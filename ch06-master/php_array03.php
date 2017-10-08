<?php
	
	/*	以 array() 函式建立一維陣列
		
		語法格式： 陣列名稱 = array{ 索引鍵 1 => 元素值 1, 索引鍵 2 => 元素值 2, 索引鍵 3 => 元素值 3 }

		每一個陣列元素在 array() 函式中以「，」號區隔索引鍵可以省略。

	*/

	// 整數索引鍵的陣列範例(此範例省略索引鍵)

	$weekArray = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');

	for ($i=0; $i < 7; $i++) { 
		
		echo $weekArray[$i] . '<br />';

	}

?>