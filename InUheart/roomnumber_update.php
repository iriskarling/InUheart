 <?php
 	include('sqlconnect.php');

  	header("Access-Control-Allow-Origin: http://106.15.199.175:5959");

    if(isset($_POST['roomnumber']))
        $roomnumber = $_POST['roomnumber'];

    mysqli_query($link,"update room set roomnumber=$roomnumber where ID=1");
    mysqli_close($link);
?>