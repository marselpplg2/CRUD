<?php

    $conn = mysqli_connect("localhost","root","","sekolah_marsel");
    if(!$conn){
        die(mysqli_connect_error($conn));
    }

?>