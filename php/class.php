<!--***************************************************
	^> File Name: class.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/07/25 - 03:28:12
***************************************************-->
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>class.php</title>
</head>
<html>
	<body>
		<p>
		
<?php
class A
{
	var $name;
	function A($name="aoeiuv")
	{
		$this->name=$name;
	}
	function output()
	{
		echo $this->name,"<br/>\n";
		foreach($this as $key => $val)
		{
			echo $key."-->".$val,"<br/>\n";
		}
	}
}
$a=new A("AoEiuV");
$a->output();
?>
		</p>
	</body>
</html>
