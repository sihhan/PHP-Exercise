<?php
	
	/*	以 array() 函式建立一維陣列
		
		語法格式： 陣列名稱 = array{ 索引鍵 1 => 元素值 1, 索引鍵 2 => 元素值 2, 索引鍵 3 => 元素值 3 }

		每一個陣列元素在 array() 函式中以「，」號區隔索引鍵可以省略。

	*/

	// 字串索引鍵的陣列範例(此範例省略索引鍵)

	$myArray = array('myName'=>'David', 'myHeight'=>181, 'myWeight'=>78);

	echo "大家好，我的名字是" . $myArray['myName']. "。身高" . $myArray['myHeight'] . "公分，體重" . $myArray['myWeight'] . "公斤。" ;

?>