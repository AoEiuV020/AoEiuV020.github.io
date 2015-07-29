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
print_r(str_split($string));
echo strlen($string),"<br/>\n";
echo strpos($string,"lo"),"<br/>\n";
echo str_shuffle($string),"<br/>\n";
printf("%u<br/>\n",crc32($string));
echo bin2hex($string),"<br/>\n";
echo hex2bin(bin2hex($string)),"<br/>\n";
echo convert_uuencode($string),"<br/>\n";
echo convert_uudecode(convert_uuencode($string)),"<br/>\n";
echo "<br/>\n";
echo md5($string),"<br/>\n";
echo sha1($string),"<br/>\n";
echo chr(48),"<br/>\n";
echo ord("0"),"<br/>\n";
echo "<br/>\n";
$string="!@#$%^&*()<>?:|{}";
echo $string,"<br/>\n";
echo htmlentities($string),"<br/>\n";
echo html_entity_decode(htmlentities($string)),"<br/>\n";
echo "<br/>\n";
$string="?user=AoEiuV020&password=aoeiuv";
foreach(get_html_translation_table(HTML_ENTITIES) as $key => $val)
{
	printf("[%s] --> [%s]<br/>\n",htmlentities($key),htmlentities($val));
}
?>
		</p>
	</body>
</html>
