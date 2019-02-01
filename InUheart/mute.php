 <?php 
 	include('sqlconnect.php');

  	header("Access-Control-Allow-Origin: http://106.15.199.175:8081");

    if(isset($_POST['mute']))
        $mute = $_POST['mute'];

    mysqli_query($link,"insert into mute(user) values ('$mute')");
    mysqli_close($link);
?>