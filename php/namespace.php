<?php
namespace A;
function name()
{
	return "a";
}
?>
<!doctype html>
<head>
	<meta charset="utf-8" />
	<title>namespace.php</title>
</head>
<html>
	<body>
		<p>

<?php
use A;
echo name();
echo "奇怪的namespace，用不来，不看了，";
?>
		</p>
	</body>
</html>
