<?php

	/*	多陣列排序

		array_multisort() 函式可以對有相關的多個陣列或多為陣列藝起進行排序，格式如下：

			array_multisort( 陣列1 [, 排序方式 ][, 模式 ] [ 陣列2 [, 排序方式 ][, 模式 ]]..)

		可指定的排序方式如下：
		
			SORT_ASC：遞增排序(預設)

			SORT_DESC：遞減排序

		可指定的參數及說明如下：

			SORT_REGULAR：標準排序(預設)

			SORT_NUMERICL：數字排序

			SORT_STRING：字串排序

	*/
	
	$a = array(20, 25, 18, 34, 20, 45);		// 商品價格

	$b = array('礦泉水', '泡麵', '洋芋片', '餅乾', '八寶粥', '罐頭');	// 商品名稱

	array_multisort($a,SORT_DESC,$b,SORT_ASC);

	for ($i=0; $i < count($a); $i++) { 
		
		echo $b[$i] . '  售價 $' . $a[$i] . '<br />';

	}

?>

