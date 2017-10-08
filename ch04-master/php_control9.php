<?php
	$i = 1; $j = 0;

	gstar:  // 目標名稱 用法：目標名稱加上冒號「:」

		if ($i>10) goto gend; 

		if ($i % 2 != 0) {
			$j += $i;
		}

		$i++;

		goto gstar;

	gend:  // 目標名稱

		echo $j;

?>