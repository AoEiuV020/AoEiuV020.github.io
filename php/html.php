<!--***************************************************
	^> File Name: html.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/30 - 11:04:45
***************************************************-->

<?php

$doc = new DOMDocument('1.0','utf-8');

$html = $doc->createElement('html');
$html = $doc->appendChild($html);

$head = $doc->createElement('head');
$head = $html->appendChild($head);

$title = $doc->createElement('title');
$title = $head->appendChild($title);

$body = $doc->createElement('body');
$body = $html->appendChild($body);

$text = $doc->createTextNode(basename(__FILE__));
$text = $title->appendChild($text);

echo ($doc->saveHTML());
?>
