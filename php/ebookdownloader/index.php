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

		$br = $doc->createElement('br');
		$form->appendChild($br);
		$span = $doc->createElement('span');
			$span->nodeValue="Index Page Setting:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$span = $doc->createElement('span');
			$span->nodeValue="Name:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","name");
			$input->setAttribute("value","网游之三国无双");
			$input->setAttribute("style","width:40%");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="Index URL:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","url");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","http://www.biquge.la/book/3867/");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="Path of URL:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","url_dir");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","http://www.biquge.la/book/3867/");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="Tag Name:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","tag");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","div");
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
			$input->setAttribute("value","id=\"list\"");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="Attribute:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","attribute1");
			$input->setAttribute("style","width:18%");
			$input->setAttribute("value","id");
		$form->appendChild($input);
		$span = $doc->createElement('span');
			$span->nodeValue="=";
		$form->appendChild($span);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","value1");
			$input->setAttribute("style","width:18%");
			$input->setAttribute("value","list");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="First Link Value:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","first");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","第1章 ：重新开始");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="Last Link Value:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","last");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","第23章 ：潜入司徒豪宅");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="Encodeing:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","encoding");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","GBK");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="User Agent:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","agent");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value",$_SERVER["HTTP_USER_AGENT"]);
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		//ebook...
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$span = $doc->createElement('span');
			$span->nodeValue="Ebook Page Setting:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$span = $doc->createElement('span');
			$span->nodeValue="Tag Name:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","tagA");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","div");
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
			$input->setAttribute("name","attributesA");
			$input->setAttribute("style","width:40%");
			$input->setAttribute("value","id=\"content\"");
		$form->appendChild($input);
		$br = $doc->createElement('br');
		$form->appendChild($br);

		$span = $doc->createElement('span');
			$span->nodeValue="Attribute:*";
		$form->appendChild($span);
		$br = $doc->createElement('br');
		$form->appendChild($br);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","attributeA");
			$input->setAttribute("style","width:18%");
			$input->setAttribute("value","id");
		$form->appendChild($input);
		$span = $doc->createElement('span');
			$span->nodeValue="=";
		$form->appendChild($span);
		$input = $doc->createElement('input');
			$input->setAttribute("type","text");
			$input->setAttribute("name","valueA");
			$input->setAttribute("style","width:18%");
			$input->setAttribute("value","content");
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
