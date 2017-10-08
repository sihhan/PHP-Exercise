<?php

	// 亂數函式

	/*
		srand((double)microtime()*1000000) 使用 srand 來改變亂數的起始值。

		為了能取得更隨機的數字，所以利用目前的時間戳記取得百萬分之一秒再乘以一百萬，再轉換為double型態帶入，如此能將亂數因子打得更亂
	*/

	srand((double)microtime()*1000000);

	$randval = rand(0,5);

	switch ($randval) {

		case '0':

			echo "知足常樂，甘願做、歡喜愛。";

			break;
		
		case '1':

			echo "生氣是拿別人的過錯來逞乏自己。";

			break;

		case '2':

			echo "人生多一份感恩，就多一份美化。";	

			break;	

		case '3':
			
			echo "縮小自我、擴大心胸，工作要歡喜，人與人要感恩。";

			break;	

		case '4':
			
			echo "愛與感恩，能洗淨心中的煩惱，";

			break;	

		case '5':
			
			echo "做好是要騰出時間，這是人生的目的，也是人生的義務。";

			break;	
	}

?>