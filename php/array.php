<!--***************************************************
	^> File Name: array.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/29 - 12:54:52
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>array.php</title>
</head>
<html>
	<body>
		<p>
<?php
$arr=array("one","two","three");
var_dump($arr);
echo "<br/>\n";
echo $arr[0].count($arr);
echo "<br/>\n";
$keyarr=array("one"=>"aoeiuv","two"=>"AoEiuV","three"=>"AOEIUV");
var_dump($keyarr);
echo "<br/>\n";
echo $keyarr["two"].count($keyarr);
echo "<br/>\n";
echo array_search("AOEIUV",$keyarr);
echo "<br/>\n";
(sort($arr))&&(print "<br/>\n")&&(print_r($arr))&&(print "<br/>\n");
(rsort($arr))&&(print "<br/>\n")&&(print_r($arr))&&(print "<br/>\n");
(asort($arr))&&(print "<br/>\n")&&(print_r($arr))&&(print "<br/>\n");
(ksort($arr))&&(print "<br/>\n")&&(print_r($arr))&&(print "<br/>\n");
(arsort($arr))&&(print "<br/>\n")&&(print_r($arr))&&(print "<br/>\n");
(krsort($arr))&&(print "<br/>\n")&&(print_r($arr))&&(print "<br/>\n");
?>
		</p>
	</body>
</html>
