<!--***************************************************
	^> File Name: file.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/08/01 - 21:21:27
***************************************************-->
<?php

$doc = new DOMDocument('1.0','utf-8');
$doc->formatOutput=true;
//$doc->encodeing='utf-8';

$html = $doc->createElement('html');
$doc->appendChild($html);

$head = $doc->createElement('head');
$html->appendChild($head);

$meta = $doc->createElement('meta');
$meta->setAttribute("charset","utf-8");
$head->appendChild($meta);

$title = $doc->createElement('title');
$head->appendChild($title);

$text = $doc->createTextNode(basename(__FILE__));
$title->appendChild($text);

$body = $doc->createElement('body');
$html->appendChild($body);

$h1 = $doc->createElement('h1',"source...");
$body->appendChild($h1);

$p = $doc->createElement('p');
$file=fopen(__FILE__,"r");
while(!feof($file))
{
	$span = $doc->createElement('span');
	$span->nodeValue=fgets($file);
	$br = $doc->createElement('br');
	$p->appendChild($span);
	$p->appendChild($br);
}
//*/
fclose($file);

$body->appendChild($p);


echo "<!doctype html>\n";
echo $doc->saveHTML();
?>
