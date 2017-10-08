<?php

	/*	print_r()：可以顯示指定的陣列或物件的內容，但是只能指定一個變數。

					格式為：print_r(變數)

		var_dump()：可以顯示指定的陣列或物件的資料型別、大小及內容，而且能指定多個變數，對於程式測試與偵錯時特別有用。

					格式為：var_dump(變數1 [,變數2] [....,變數n])

		var_export()：可以將指定的陣列或物件內容以PHP的合法程式碼返回。

					格視為：var_export(變數)

	*/
	
	$testArray = array("甲", "乙", "丙", "丁");

	echo "print_r() 的結果：";

	print_r($testArray);

	echo "<br /> var_dump() 的結果：";

	var_dump($testArray);

	echo "<br /> var_export() 的結果：";

	var_export($testArray);




