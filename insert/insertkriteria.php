<?php
    session_start();

    include "../koneksi/config.php";

    $nama_kriteria = $_POST['nama_kriteria'];

    $sql = "INSERT INTO kriteria(nama_kriteria) 
            VALUES('".$nama_kriteria."')";
    $a = $koneksi->query($sql);
    if($a == true){
        header("location:../index.php");
    }else{
        header("location:../tampilan/form/formkriteria.php");
    }
?>