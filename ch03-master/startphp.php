<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP練習</title>
</head>
<body>

	<h1> 第三章 PHP 程式基礎與法 </h1>

	<h2> 3.2.4 預設變數 </h2>

	<ul> <li> $_SERVER['PHP_SELF']：目前網頁的虛擬路徑  </li> </ul>

	<ul> <li> $_SERVER['SERVER_NAME']：目前網頁的伺服器名稱 </li> </ul>

	<ul> <li> $_SERVER['SERVER_PROTOCOL']：請求頁面時通信協定的名稱和版本 </li> </ul>

	<ul> <li> $_SERVER['REQUEST_METHOD']：目前網業請求變數的方法  </li> </ul>

	<ul> <li> $_SERVER['DOCUMENT_ROOT']：目前網頁所在的網站跟目錄  </li> </ul>

	<ul> <li> $_SERVER['HTTP_HOST']：目前網頁的伺服器位置  </li> </ul>

	<ul> <li> $_SERVER['REMOTE_ADDR']：目前網頁客戶端的IP位置  </li> </ul>

	<ul> <li> $_SERVER['REMOTE_PORT']：目前網頁客戶端的連接埠位  </li> </ul>

	<ul> <li> $_SERVER['SCRIPT_FILENAME']：目前網頁的絕對路徑  </li> </ul>

	<ul> <li> $_SERVER['SERVER_PORT']：目前網頁伺服器端連接埠位  </li> </ul>

	<p><b>語法範例</b></p>

	<p>echo "目前網頁的虛擬路徑為：";</p>

	<p>echo $_SERVER['PHP_SELF'];</p>

	<p><b>結果顯示</b></p>

	<?php

		echo "目前網頁的虛擬路徑為：";

		echo $_SERVER['PHP_SELF'].'<br>';

	?>

	<hr>

	<h2> 3.3.1 常數的使用 </h2>

	<ul> <li> define(常數名稱,常數值,大小寫是否區分) </li> </ul>

	<ul> <li> const 常數名稱 = 常數值 </li> </ul>

	<p><b>語法範例</b></p>

	<p>define('eHappy',"文淵閣工作室");</p>

	<p>const eHappyUrl = "http://www.e-happy.com.tw";</p>

	<p>echo "你好，歡迎光臨" . eHappy . "的網站;</p>

	<p>echo "網址為：" . eHappyUrl;</p>

	<p><b>結果顯示</b></p>

	<?php

		define('eHappy',"文淵閣工作室"); // define(常數名稱,常數值,大小寫是否區分)

		const eHappyUrl = "http://www.e-happy.com.tw"; // const 常數名稱 = 常數值

		echo "你好，歡迎光臨" . eHappy . "的網站<br>";

		echo "網址為：" . eHappyUrl;

	?>

	<hr>

	<h2> 3.3.2 預設常數及魔術常數 </h2>

	<h3> 預設常數 </h3>

	<ul> <li> PHP_VERSION ：目前PHP運行的版本 </li> </ul>

	<ul> <li> PHP_OS ：目前伺服器的作業系統 </li> </ul>

	<p><b>語法範例</b></p>

	<P>echo '目前系統的 PHP 版本為：';</P>

	<P>echo PHP_VERSION;</P>

	<p><b>結果顯示</b></p>

	<?php	

		echo "目前系統的 PHP 版本為：";
		echo PHP_VERSION;

	?>

	<h3> 魔術常數 </h3>

	<ul> <li> _ _LINE_ _：取得運行程式行號 </li> </ul>

	<ul> <li> _ _FILE_ _：取建在本機的路徑與檔名 </li></ul>

	<ul> <li> _ _DIR_ _：取得文件在本機的路徑 </li></ul>
	
	<ul> <li> _ _FUNCTION_ _：取得函數名稱 </li></ul>

	<p><b>結果顯示</b></p>

	<?php

		echo "目前執行檔案的的路徑為：";

		echo __FILE__ ;

		echo "<br>";

	?>

	<hr>

</body>
</html>



