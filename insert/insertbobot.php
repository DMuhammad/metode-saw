<?php
    session_start();

    include "../koneksi/config.php";

    $kriteria = $_POST['kriteria'];
    $value = $_POST['value'];

    $sql = "INSERT INTO bobot(id_kriteria, value) 
            VALUES('".$kriteria."', '".$value."')";
    $a = $koneksi->query($sql);
    if($a == true){
        header("location:../index.php");
    }else{
        header("location:../tampilan/form/formbobot.php");
    }
?>