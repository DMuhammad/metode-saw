<?php
    session_start();

    include "../koneksi/config.php";

    $alternatif = $_POST['alternatif'];
    $bobot = $_POST['bobot'];
    $skala = $_POST['skala'];

    $sql = "INSERT INTO nilai_matrik(id_alternatif, id_bobot, id_skala) 
            VALUES('".$alternatif."', '".$bobot."', '".$skala."')";
    $a = $koneksi->query($sql);
    if($a == true){
        header("location:../index.php");
    }else{
        header("location:../tampilan/form/formmatrix.php");
    }
?>