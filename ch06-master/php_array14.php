<?php

	/*	自然順序排序

		一般字串在進行排序時，會一個一個以字元進行比對。如 img1、img2、img11 在一般排序時，其順序為 img1、img11、img2。

		若更貼近人類排序的想法，會將相同的字串先去除再以剩下的數字進行排列，結果為 img1、img2、img11，這就是自然順序排序。


		可以使用 natsort(陣列) 及 natcasesort(陣列) 兩個韓式進行陣列值得自然順序排序。差別在於 natcasesort(陣列) 會區分英文大小寫	

	*/
	
	$testArray = array("img1","img2","img11");

	sort($testArray);

	print_r($testArray);

	echo "<br />";

	natsort($testArray);

	print_r($testArray);

?>