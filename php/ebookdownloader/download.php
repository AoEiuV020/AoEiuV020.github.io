<!--***************************************************
	^> File Name: download.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/08/27 - 22:48:04
***************************************************-->

<?php
echo "POST"."<br/>"."\n";
$name=$_REQUEST["name"];
$url=$_REQUEST["url"];
$attributes=$_REQUEST["attributes"];
$url_info=parse_url($url);
echo $name."<br/>"."\n";
echo $attributes."<br/>"."\n";
var_dump($url_info);

$content=file_get_contents($url);
$content=mb_convert_encoding($content,"UTF-8","GBK");
$doc=new DOMDocument();
$doc->loadHTML($content);
echo $doc->saveHTML();

echo "end..."."<br/>"."\n";
?>
