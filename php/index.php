<!--***************************************************
	^> File Name: index.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/23 - 19:11:56
****************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>index.php</title>
</head>
<html>
	<body>
		<h1>Hello php</h1>
		<p id="top">php的学习，</p>
		<p>
<?php
echo "Hello,your IP: ".$_SERVER["REMOTE_ADDR"]." : ".$_SERVER["REMOTE_PORT"]."<br/>\n";
echo $_SERVER["HTTP_USER_AGENT"]."<br/>\n";
?>
		</p>
<?php
function li2($href,$inner)
{
	echo "<li><a href=\"".$href."\">".$inner."...</a></li>";
}
function li($page)
{
	li2($page.".php",$page);
}
echo "<ol>\n";
li2("..","go back");
li2("#bottom","goto bottom");
li2("./webshell_b374k/","webshell_b374k");
li2("./ebookdownloader/","ebookdownloader");
li("phpinfo");
li("hello");
li("global");
li("static");
li("print");
li("class");
li("define");
li("string");
li("array");
li("serverinfo");
li("request");
li("namespace");
li("html");
li("file");
li("dr_com");
li("constants");
echo "</ol>\n";
?>
		
		</p>
		<p id="bottom">
		bottom...<br/>
		<a href="#top">goto top...</a><br/>
		</p>
	</body>
</html>

