<!--***************************************************
	^> File Name: print.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/25 - 03:04:59
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>print.php</title>
</head>
<html>
	<body>
		<p>
<?php
echo "hello..."."<br/>\n";
echo "hello...","<br/>\n";
print "hello..."."<br/>\n";
(print "hello...")&&(print "<br/>\n");
print_r([1,2,3,4])&&print "<br/>\n";
printf ("%d:%d:%d,%s",03,10,29,"now")&&print "<br/>\n";
echo sprintf("%s return %s...","sprintf","string"),"<br/>\n";
var_dump("string")||print "<br/>\n";
var_dump(['a','r','r','a','y'])||print "<br/>\n";
?>
		</p>
	</body>
</html>
