<?php
include('common.php');
$id = rand(1111111111,9999999999);
mysql_query("DELETE FROM `chat_event` WHERE `type` <> 'msg' and `time`<'".(time()-30)."'");
$_ip = ip();
$t = time();
if (preg_match_all('/(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})/i',$_ip,$ms))
{
	$len = count($ms[0]);
	for($i=0;$i<$len;$i++)
	{
		$_ip = intval($ms[1][$i])*256*256*256+intval($ms[2][$i])*256*256+intval($ms[3][$i])*256+intval($ms[4][$i]);
	}
}
$ttt = time();
// echo "time = $ttt,foretime = $t";
$r = mysql_query("SELECT * FROM `chat_online` WHERE `to`='0' AND `time`>'".($t-5)."' ORDER BY `time` ASC LIMIT 1");
// print "<script>alert('123');</script>";
if (mysql_num_rows($r) > 0)
{
	$arr = mysql_fetch_assoc($r);
	$to = $arr['id'];
	$target = $arr['source'];
	$oprank = $arr['rank'];
	$to_location = get_location($arr['ip']);
}
else
{
	$to = '0';
}
$userid=$_COOKIE['userid'];
$rank=$_COOKIE['rank'];
$sql = "INSERT INTO `chat_online`(`id`,`to`,`time`,`ip`,`source`,`target`,`rank`) VALUES('$id','$to','$t','$_ip','$userid','$target','$rank')";
if (mysql_query($sql))
{
	if ($to != '0' && $rank != $oprank)
	{
		$my_location = get_location($_ip);
		mysql_query("UPDATE `chat_online` SET `to`='$id' WHERE `id`='$to'");
		mysql_query("UPDATE `chat_online` SET `target`='$userid' WHERE `id`='$to'");
		mysql_query("INSERT INTO `chat_event`(`from`,`to`,`time`,`type`,`content`,`source`,`target`) VALUES "
		."('$id','$to','$t','connected','$my_location','$userid','$target'),"
		."('$to','$id','$t','connected','$to_location','$target','$userid') ");
	}
	echo $id;
	die;
}
else
{
	echo 'error';
}

function get_location($ip)
{
	$r = mysql_query("SELECT * FROM chat_ip WHERE `from`<'$ip' AND `to`>'$ip' ORDER BY `range` ASC LIMIT 1");
	if (mysql_num_rows($r)>0)
	{
		$arr = mysql_fetch_assoc($r);
		return $arr['name']?$arr['name']:'';
	}
	else return '';
}

function ip()
{
	if(getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown'))
	{
		$ip = getenv('HTTP_CLIENT_IP');
	}
	elseif(getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown'))
	{
		$ip = getenv('HTTP_X_FORWARDED_FOR');
	}
	elseif(getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown'))
	{
		$ip = getenv('REMOTE_ADDR');
	}
	elseif(isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown'))
	{
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	return preg_match("/[\d\.]{7,15}/", $ip, $matches) ? $matches[0] : 'unknown';
}
?>