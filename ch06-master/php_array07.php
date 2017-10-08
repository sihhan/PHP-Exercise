<?php
	
	/*	二維陣列的範例

		此例使用 array() 函式崁套的方式來宣告陣列

	*/

	// 先把學生資料分別建立一個一維陣列

	$a = array('學號'=>101, '姓名'=>'李雲毓', '性別'=>'女', '生日'=>'2000/3/15', '電話'=>'(02)2701-5521');	// 學生一的基本資料

	
	$b = array('學號'=>102, '姓名'=>'黃冠尼', '性別'=>'女', '生日'=>'2000/5/01', '電話'=>'(02)2457-6621');	// 學生二的基本資料

	
	$c = array('學號'=>103, '姓名'=>'為國書', '性別'=>'男', '生日'=>'2000/7/06', '電話'=>'(04)2723-5562');	// 學生三的基本資料

	
	$d = array('學號'=>104, '姓名'=>'劉子芸', '性別'=>'女', '生日'=>'2000/11/20', '電話'=>'(02)2541-8856');	// 學生四的基本資料

	
	$e = array('學號'=>105, '姓名'=>'李正雲', '性別'=>'男', '生日'=>'2000/12/25', '電話'=>'(02)2235-7754');	// 學生五的基本資料


	$student = array($a, $b, $c, $d, $e);

	echo "學號：" . $student[2]['學號'] . "<br />";
	echo "姓名：" . $student[2]['姓名'] . "<br />";
	echo "性別：" . $student[2]['性別'] . "<br />";
	echo "生日：" . $student[2]['生日'] . "<br />";
	echo "電話：" . $student[2]['電話'];

?>