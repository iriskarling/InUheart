<?php
	include('sqlconnect.php');

    header("Access-Control-Allow-Origin: http://106.15.199.175:5959");

    $result = mysqli_query($link,"select * from mute") or die(mysqli_error($link));
    if(mysqli_num_rows($result)>0){
        $list = "";
        while($row = mysqli_fetch_array($result,MYSQLI_BOTH)){
            $user = $row['user'];
            $list=$list.",\"".$user."\":\"1\"";
        }
        echo $list;
    }
    else
        echo "1";
    mysqli_close($link);
?>