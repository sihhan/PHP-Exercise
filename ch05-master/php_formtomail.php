<?php
	// 製作 Form To Mail 的聯絡表單
	if (isset($_POST['sendmail']) && ($_POST['sendmail'] == "true")) {

		$mailForm = "=?UTF-8?B?" . base64_encode($_POST['fromname']) . "?= <" . $_POST['frommail']. ">"; 

		$mailto = "sword801128@gmail.com";  // 收件者

		$mailSubject = "=?UTF-8?B?" . base64_encode($_POST['mailsubject']) . "?="; // 郵件標題

		$mailHeader = "From:" . $mailForm . "\r\n";

		$mailHeader .= "Content-type:text/html;charset=UTF-8";

		mail($mailto, $mailSubject, $_POST['mailcontent'], $mailHeader);

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>聯絡表單</title>
</head>
<body>

	<?php if (isset($_POST['sendmail']) && ($_POST['sendmail'] == "true")) { ?>

		寄送成功，<a href="php_formtomail.php">再寄一次</a>。

	<?php }else{ ?>

		<form name="form1" method="post" action="">
			<table border="0" cellpadding="4" cellspacing="0">
				<tr>
					<td>寄件人姓名</td>
					<td><input type="text" name="fromname" id="fromname"></td>
				</tr>

				<tr>
					<td>寄件人郵件</td>
					<td><input type="text" name="frommail" id="frommail"></td>
				</tr>

				<tr>
					<td>主旨</td>
					<td><input type="text" name="mailsubject" id="mailsubject"></td>
				</tr>

				<tr>
					<td colspan="2">
						<textarea name="mailcontent" id="mailcontent" cols="45" rows="5"></textarea>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<input type="submit" name="button" id="button" value="送出">
						<input type="hidden" name="sendmail" id="sendmail" value="true">
					</td>
				</tr>
			</table>
		</form>
	<?php } ?>
</body>
</html>	