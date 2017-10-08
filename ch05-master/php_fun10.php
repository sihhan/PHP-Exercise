<?php
	
	/*	遞迴函式

		所謂遞迴函式，就是在自訂函式中再呼叫本身的函式。

		※ 自然數位正整數，或非富整數(包含零)。在階層計算上，零的階層是特別定義為 1 的
	*/


	function showResult($Num){

		if ($Num >= 0) {
			
			if ($Num == 0) {
				
				return 1;

			}else{

				$resultNum = 1;

				for ($n = $Num; $n > 0 ; $n--) { 
					
					$resultNum *= $n;

				}

				return $resultNum;
			}	

		}

	}


	echo "5 的階層為：" . showResult(5);

?>