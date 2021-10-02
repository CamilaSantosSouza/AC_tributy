<?php

    $con = mysqli_connect("localhost","root","","user_registration");
    if(mysqli_connect()){
        echo "Failed to connect to mySQL". mysqli_connect_error();
    }

?>