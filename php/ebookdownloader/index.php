<!--***************************************************
	^> File Name: index.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/08/27 - 21:21:27
***************************************************-->
<?php

$doc = new DOMDocument('1.0','utf-8');
$doc->formatOutput=true;

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


$h1 = $doc->createElement('h1',"Ebook Downloader...");
$body->appendChild($h1);

//p1 hello...
$p = $doc->createElement('p');
$span = $doc->createElement('span');
$span->nodeValue="Hello,your IP: ".$_SERVER["REMOTE_ADDR"]." : ".$_SERVER["REMOTE_PORT"];
$p->appendChild($span);
$br = $doc->createElement('br');
$p->appendChild($br);
$span = $doc->createElement('span');
$span->nodeValue="your user agent: ".$_SERVER["HTTP_USER_AGENT"];
$p->appendChild($span);
$body->appendChild($p);

//p2 form index...
$p = $doc->createElement('p');
	$form = $doc->createElement('form');
		$form->setAttribute("method","get");
		$form->setAttribute("action","download.php");
		$span = $doc->createElement('span');
			$span->nodeValue="Name:";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","name");
			$input->setAttribute("style","width:40%");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$span = $doc->createElement('span');
			$span->nodeValue="Index URL:";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","url");
			$input->setAttribute("style","width:40%");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$span = $doc->createElement('span');
			$span->nodeValue="Attributes:";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","attributes");
			$input->setAttribute("style","width:40%");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","submit");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);
	$p->appendChild($form);
$body->appendChild($p);


echo "<!doctype html>\n";
echo $doc->saveHTML();
?>
