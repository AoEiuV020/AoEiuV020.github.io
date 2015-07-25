<!--***************************************************
	^> File Name: global.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/24 - 16:57:03
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>global.php</title>
</head>
<html>
	<body>
		<p>
<?php
$n=10;
$m=20;
$br="<br/>\n";
function fun1()
{
	$n=15;
	$m=25;
	echo "fun1:".$n.$m.$GLOBALS['br'];
}
function fun2()
{
	global $n,$m,$br;
	$n=17;
	$m=27;
	echo "fun2:".$n.$m.$br;
}
fun1();
echo "global:".$n.$m.$br;
fun2();
echo "global:".$n.$m.$br;
?>
		</p>
	</body>
</html>
