<?php

	/*  變動長度參數列
		
			須依賴以下三個函式：

				func_num_args()  取函式中參數的數量

				func_get_arg(n)  取函式中(n+1)的參數內容

				func_get_args()  將函式的所有參數化為陣列回傳

	*/

	function showData(){

		$i = func_num_args();  // func_num_args 取得函式參數的數量 

		if ($i == 0) {

			echo "沒有指定學生資料！<br/>";

		}else{

			echo "本班學生有：";

			$student = func_get_args();  // func_get_args 將函式的所有參數化為陣列回傳

			foreach ($student as $data) {   // 把 $student 的值存到 $data 裡
				
				echo $data.'，';

			}

			echo "最後一個學生為：" . func_get_arg($i - 1) . "。<br/>";   // func_get_arg(n) 取得函式中第 n + 1 的參數內容。此例以 ($i - 1) 顯示最後一個值

		}

	}

	showData(); // 當沒有設定參數時會顯示「沒有指定學生資料！」的訊息

	showData("李雲毓", "黃冠尼", "韋國書", "劉子芸", "李正雲");  // 當有參數時會一一列出所有學生姓名，並列出最後一個學生的姓名


?>	