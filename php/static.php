<!--***************************************************
	^> File Name: static.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/24 - 17:14:04
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>static.php</title>
</head>
<html>
	<body>
		<p>
<?php
function fun()
{
	static $x=0;
	echo ++$x.",";
}
fun();
fun();
fun();
fun();
?>
		</p>
	</body>
</html>
