<!--***************************************************
	^> File Name: html.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/30 - 11:04:45
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

$br = $doc->createElement('br');

$h1 = $doc->createElement('h1',"Hello only php...");
$body->appendChild($h1);

$p = $doc->createElement('p');
$span = $doc->createElement('span');
$span->nodeValue="php";
$p->appendChild($span);
$p->appendChild($br);
$text = $doc->createTextNode(basename("<!-- -->\n"));
$p->appendChild($text);
$span = $doc->createElement('span');
$span->nodeValue="html";
$p->appendChild($span);
$body->appendChild($p);

$form = $doc->createElement('form');


$p->appendChild($span);
echo "<!doctype html>\n";
echo $doc->saveHTML();
print($p->textContent);
print_r($p);
?>
