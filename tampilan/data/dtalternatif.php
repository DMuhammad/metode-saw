<?php
    session_start();
    include "../../koneksi/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Data Alternatif</title>
    </head>
    <body>
    <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../../index.php">Metode SAW</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="btn btn-dark" aria-current="page" href="../../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="dtalternatif.php">Data Alternatif</a></li>
                            <li><a class="dropdown-item" href="dtkriteria.php">Data Kriteria</a></li>
                            <li><a class="dropdown-item" href="dtbobot.php">Data Bobot</a></li>
                            <li><a class="dropdown-item" href="dtskala.php">Data Skala</a></li>
                            <li><a class="dropdown-item" href="dtmatrix.php">Data Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Formulir</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../form/formalternatif.php">Formulir Alternatif</a></li>
                            <li><a class="dropdown-item" href="../form/formkriteria.php">Formulir Kriteria</a></li>
                            <li><a class="dropdown-item" href="../form/formbobot.php">Formulir Bobot</a></li>
                            <li><a class="dropdown-item" href="../form/formskala.php">Formulir Skala</a></li>
                            <li><a class="dropdown-item" href="../form/formmatrix.php">Formulir Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../menu/menu-detailmatrixkeputusan/result.php">Detail Matrix Keputusan</a></li>
                            <li><a class="dropdown-item" href="../menu/menu-normalisasi/result.php">Normalisasi</a></li>
                            <li><a class="dropdown-item" href="../menu/menu-perangkingan/result.php">Perankingan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--akhir navbar-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-2" style="min-height: 515px;">
                    <div class="card">
                        <div class="card-header">
                            Data Alternatif
                        </div>
                        <div class="card-body">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID Alternatif</th>
                                                <th>Nama Alternatif</th>
                                            </tr>                  
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT id_alternatif, nama_alternatif FROM alternatif";
                                                $a = $koneksi->query($sql);
                                                while($data = $a->fetch_array()){
                                                    $id = 1; ?>
                                                    <tr>
                                                        <td><?= $data['id_alternatif'] ?></td>
                                                        <td><?= $data['nama_alternatif'] ?></td>
                                                    </tr>
                                                <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <footer class="mt-2 bg-dark p-3 text-center" style="color: white; font-weight: bold;">
            <p>Metode SAW &copy; 2022</p>
        </footer>
        <!--akhir footer-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>