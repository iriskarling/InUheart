<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	include('sqlconnect.php');
	if(!isset($_POST['select'])){
		echo "	<script>
					alert('请选择一条预约');
					location.href='appoint_condition.php';
				</script>";
	}
	else{
		$select=$_POST['select'];
		// echo "$select";
		$result = mysqli_query($link,"delete from appoint_result where ID=$select") or die(mysqli_error($link));
		mysqli_close($link);
		echo "	<script>
					alert('取消成功');
					location.href='appoint_condition.php';
				</script>";
	}
	?>
</body>
</html>