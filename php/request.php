<!--***************************************************
	^> File Name: request.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/29 - 13:55:03
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>request.php</title>
</head>
<html>
	<body>
		<form>
<span>user<br/>
</span><input type="text" name="user" value="AoEiuV"/><br/>
<span>passwd<br/>
</span><input type="password" name="passwd" value="aoeiuv"/><br/>
<input type="submit" value="submit"/>
		<p>
		
<?php
echo $_SERVER["QUERY_STRING"]."<br/>\n";
foreach ($_REQUEST as $key => $val)
{
	echo $key."-->".$val."<br/>\n";
}
?>
		</p>
	</body>
</html>
