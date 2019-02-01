<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	if(!isset($_POST['select2'])){
		echo "	<script>
					alert('请选择一条预约');
					location.href='appoint_condition.php';
				</script>";
	}
	else{
		$select=$_POST['select2'];
		// echo "$select";
		//连接数据库
		include('sqlconnect.php');
		
		$result = mysqli_query($link,"delete from online_appoint where ID=$select") or die(mysqli_error($link));
		mysqli_close($link);
		echo "	<script>
					alert('取消成功');
					location.href='appoint_condition.php';
				</script>";
	}
	?>
</body>
</html>