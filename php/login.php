<!--***************************************************
	^> File Name: login.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/30 - 10:33:14
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>login.php</title>
</head>
<html>
	<body>
		<p>
		<form method="post" onsubmit="return <?php validate();?>">
			<input type="text" name="user" value="AoEiuV"/><br/>
			<input type="password" name="password" value="aoeiuv"/><br/>
			<input type="submit" value="Submit"/><br/>
		</form>
		
<?php
function validate()
{
	
	return true;
}
function getInput($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
		</p>
	</body>
</html>
