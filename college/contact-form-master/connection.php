<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'db_contact';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    //echo "Connection Successfull";
    ?>

    <script>
        alert('connection Successfull');
    </script>
    <?php
}else{
    //echo "No Connection";
    die("no connection" . mysqli_connect_error());
}

?>