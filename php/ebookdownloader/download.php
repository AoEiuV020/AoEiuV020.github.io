<!--***************************************************
	^> File Name: download.php
	^> Author: AoEiuV020
	^> Mail: 490674483@qq.com
	^> Created Time: 2015/08/27 - 22:48:04
***************************************************-->

<?php
$name=$_REQUEST["name"];
$url=$_REQUEST["url"];
$url_dir=$_REQUEST["url_dir"];
$attributes=$_REQUEST["attributes"];
$encoding=$_REQUEST["encoding"];
$tag=$_REQUEST["tag"];
$attribute1=$_REQUEST["attribute1"];
$value1=$_REQUEST["value1"];
$first=$_REQUEST["first"];
$last=$_REQUEST["last"];
$agent=$_REQUEST["agent"];
$tagA=$_REQUEST["tag"];
$attributeA=$_REQUEST["attribute1"];
$valueA=$_REQUEST["value1"];
if(!strlen($encoding))
{
	$encoding="UTF-8";
}
echo "POST"."<br/>"."\n";
echo $name."<br/>"."\n";
echo $url."<br/>"."\n";
echo $url_dir."<br/>"."\n";
echo $attributes."<br/>"."\n";
echo $encoding."<br/>"."\n";
echo $tag."<br/>"."\n";
echo $attribute1."<br/>"."\n";
echo $value1."<br/>"."\n";
echo $first."<br/>"."\n";
echo $last."<br/>"."\n";
echo $agent."<br/>"."\n";
echo $tagA."<br/>"."\n";
echo $attributeA."<br/>"."\n";
echo $valueA."<br/>"."\n";
echo "<br/>"."\n";
// */
//function...
function down($url)
{
	static $i=1;
	echo $i." ".$url."<br/>"."\n";
	$curl=curl_init();
	curl_setopt($curl,CURLOPT_URL,$url);
	curl_setopt($curl,CURLOPT_USERAGENT,$agent);
	$content=curl_exec($curl);
	if(curl_errno($curl))
	{
		echo "Curl error...".curl_error($curl)."<br/>"."\n";
	}
	curl_close($curl);

	echo strlen($content);
	$content=mb_convert_encoding($content,"UTF-8",$encoding);
	$content=preg_replace("/<head>/","<head> <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" /> ",$content,1);
	$doc=new DOMDocument();
	$doc->loadHTML($content);
	//extract ebook...
	$list=$doc->getElementsByTagName($tagA);
	foreach($list as $item)
	{
		if($valueA==$item->getAttribute($attributeA))
		{
			break;
		}
	}
		// */
	++$i;
}


//get index page...
$content=file_get_contents($url);

//loadHTML...
//$content=mb_convert_encoding($content,"ISO-8859-1",$encoding);
$content=mb_convert_encoding($content,"UTF-8",$encoding);
//$content=iconv("GBK","UTF-8",$content);
$content=preg_replace("/<head>/","<head> <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" /> ",$content,1);
$doc=new DOMDocument();
$doc->loadHTML($content);

//extract index...
$list=$doc->getElementsByTagName($tag);
foreach($list as $item)
{
	if($value1==$item->getAttribute($attribute1))
	{
		break;
	}
}
$list=$item->getElementsByTagName("a");
$flag=true;
foreach($list as $item)
{
	if($flag&&$item->nodeValue!=$first)
	{
		continue;
	}
	elseif($flag)
	{
		$flag=false;
	}
	down($url_dir.$item->getAttribute("href"));
	if($item->nodeValue==$last)
	{
		break;
	}
}

$file=fopen("/tmp/ebookIndex.html","w");
$num=fwrite($file,html_entity_decode($doc->saveHTML()));
//$num=fwrite($file,html_entity_decode($content));
fclose($file);
echo "OK...size=".$num."<br/>"."\n";
// */
?>
