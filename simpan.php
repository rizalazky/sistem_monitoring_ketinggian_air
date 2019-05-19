<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="demo";

    $con=new mysqli($host,$user,$pass,$db);

    if($con){
        echo "Koneksi Berhasil";
    }else{
        echo "koneksi Gagal".mysqli_connect_error();
    }
    
    $nilai=$_GET["suhu"];
    $tinggi_air=$_GET["tinggi_air"];

    $query="INSERT INTO sensor_gas (sensor_gas,tinggi_air) VALUES (".$nilai.",".$tinggi_air.")";

    if($con->query($query)===TRUE){
        echo "Berhasil Insert";
    }else{
        "Gagal Insert";
    }

?>