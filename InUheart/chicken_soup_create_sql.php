<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php 
	include('sqlconnect.php');

	$title = $_POST['title'];
	$content = $_POST['content'];

	$result = mysqli_query($link,"insert into chicken_soup(Title,Content) values ('$title','$content')") or die(mysqli_error($link));
	if($result){
		echo "	<script>
				alert('添加成功');
				history.back(-1);
				</script>";
	}
	else{
		echo "	<script>
				alert('添加失败');
				history.back(-1);
				</script>";
	}
	mysqli_close($link);
?>
</body>
</html>
