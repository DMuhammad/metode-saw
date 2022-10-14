<?php
    session_start();

    include "../koneksi/config.php";

    $nama_alternatif = $_POST['nama_alternatif'];

    $sql = "INSERT INTO alternatif(nama_alternatif) 
            VALUES('".$nama_alternatif."')";
    $a = $koneksi->query($sql);
    if($a == true){
        header("location:../index.php");
    }else{
        header("location:../tampilan/form/formalternatif.php");
    }
?>