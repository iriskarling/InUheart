<!DOCTYPE html>
<html>
<head>
	<title>提交</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
	include('sqlconnect.php');
	
	$userid=$_COOKIE['userid'];
	$date = $_POST['onlinedate'];

	$result = mysqli_query($link,"insert into online_appoint(User,Date) values ($userid,'$date')") or die(mysqli_error($link));
	if($result)
    {
       	echo "<script>
       		  alert('预约成功！');
       		  history.back(-1);
       		  </script>";
    }
    else
    {
       	echo "<script>
       		  alert('出错，请重试！');
       		  history.back(-1);
       		  </script>";
    }
    mysqli_close($link);
	?>
</body>
</html>