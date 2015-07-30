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
	<form method="post" action="<?php echo $_SERVER["SCRIPT_NAME"]?>">
<span>user<br/>
</span><input type="text" name="puser" value="AoEiuV"/><br/>
<span>passwd<br/>
</span><input type="password" name="ppasswd" value="aoeiuv"/><br/>
<input type="submit" value="post"/>
		</form>
		<form method="get">
<span>user<br/>
</span><input type="text" name="guser" value="AoEiuV"/><br/>
<span>passwd<br/>
</span><input type="password" name="gpasswd" value="aoeiuv"/><br/>
<input type="submit" value="get"/>
		</form>
		<p>

<?php
if(count($_REQUEST))
{
	echo $_SERVER["QUERY_STRING"]."<br/>\n";
	foreach ($_POST as $key => $val)
	{
		echo $key."-->".$val."<br/>\n";
	}
	echo "<br/>\n";
	foreach ($_GET as $key => $val)
	{
		echo $key."-->".$val."<br/>\n";
	}
	echo "<br/>\n";
	foreach ($_REQUEST as $key => $val)
	{
		echo $key."-->".$val."<br/>\n";
	}
}
?>
		</p>
	</body>
</html>
