<!--***************************************************
	^> File Name: string.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/25 - 03:59:43
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>string.php</title>
</head>
<html>
	<body>
		<p>
		
<?php
$string="hello...";
echo strlen($string),"<br/>\n";
echo strpos($string,"lo"),"<br/>\n";
echo bin2hex($string),"<br/>\n";
echo hex2bin(bin2hex($string)),"<br/>\n";
?>
		</p>
	</body>
</html>
