<?php
    session_start();

    include "../koneksi/config.php";

    $nama_skala = $_POST['nama_skala'];
    $value = $_POST['value'];

    $sql = "INSERT INTO skala(nama_skala, value) 
            VALUES('".$nama_skala."', '".$value."')";
    $a = $koneksi->query($sql);
    if($a == true){
        header("location:../index.php");
    }else{
        header("location:../tampilan/form/formskala.php");
    }
?>