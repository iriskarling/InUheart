<!DOCTYPE html>
<html>
<head>
	<title>update</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php 
	include('sqlconnect.php');
	
	if(!isset($_POST['select2'])){
		echo "	<script>
					alert('请选择一条预约');
					location.href='teacher_manage_appointment.php';
				</script>";
	}
	else{
		$select=$_POST['select2'];
		if(isset($_POST['complete']))$judge="complete";
		if(isset($_POST['accept']))$judge="accept";
		if(isset($_POST['unaccept']))$judge="unaccept";
		if(isset($_POST['uncomplete']))$judge="uncomplete";
		
		if($judge=="accept")
			mysqli_query($link,"update online_appoint set Accept=1 where ID=$select") or die(mysqli_error($link));
		else if($judge=="complete")
			mysqli_query($link,"update online_appoint set Complete=1 where ID=$select") or die(mysqli_error($link));
		else if($judge=="unaccept")
			mysqli_query($link,"update online_appoint set accept=0 where ID=$select") or die(mysqli_error($link));
		else if($judge=="uncomplete")
			mysqli_query($link,"update online_appoint set Complete=0 where ID=$select") or die(mysqli_error($link));
	}
	mysqli_close($link);
	echo "<script>location.href='teacher_manage_appointment.php';</script>";
	?>
	
</body>
</html>