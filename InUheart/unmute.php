 <?php 
 	include('sqlconnect.php');

  	header("Access-Control-Allow-Origin: http://106.15.199.175:5959");

    if(isset($_POST['mute']))
        $mute = $_POST['mute'];

    mysqli_query($link,"delete from mute where user='$mute'");
    mysqli_close($link);
?>