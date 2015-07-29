<!--***************************************************
	^> File Name: serverinfo.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/29 - 13:30:21
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>serverinfo.php</title>
</head>
<html>
	<body>
		<p>
<?php 
echo $_SERVER['PHP_SELF'];
echo "<br/>\n";
echo $_SERVER['SERVER_NAME'];
echo "<br/>\n";
echo $_SERVER['HTTP_HOST'];
echo "<br/>\n";
echo $_SERVER['HTTP_REFERER'];
echo "<br/>\n";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br/>\n";
echo $_SERVER['SCRIPT_NAME'];
echo "<br/>\n";
echo "<br/>\n";
foreach ($_SERVER as $key => $val)
{
	echo $key."-->".$val."<br/>\n";
}
echo "<br/>\n";
echo "<br/>\n";
var_dump($_SERVER);
?>
		</p>
	</body>
</html>
