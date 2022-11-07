<?php
    session_start();
    include "../../../koneksi/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Detail Nilai Maksimum dan Minimum</title>
    </head>
    <body>
    <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../../../index.php?metode=<?php echo $_SESSION['metode'] ?>">Metode TOPSIS</a>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="btn btn-dark" aria-current="page" href="../../../index.php?metode=<?php echo $_SESSION['metode'] ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../data/dtalternatif.php">Data Alternatif</a></li>
                            <li><a class="dropdown-item" href="../../data/dtkriteria.php">Data Kriteria</a></li>
                            <li><a class="dropdown-item" href="../../data/dtbobot.php">Data Bobot</a></li>
                            <li><a class="dropdown-item" href="../../data/dtskala.php">Data Skala</a></li>
                            <li><a class="dropdown-item" href="../../data/dtmatrix.php">Data Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Formulir</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../form/formalternatif.php">Formulir Alternatif</a></li>
                            <li><a class="dropdown-item" href="../../form/formkriteria.php">Formulir Kriteria</a></li>
                            <li><a class="dropdown-item" href="../../form/formbobot.php">Formulir Bobot</a></li>
                            <li><a class="dropdown-item" href="../../form/formskala.php">Formulir Skala</a></li>
                            <li><a class="dropdown-item" href="../../form/formmatrix.php">Formulir Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../menu-topsis-maxmin/result.php">Detail Nilai Maksimum dan Minimum</a></li>
                            <li><a class="dropdown-item" href="../menu-topsis-nilaiV/result.php">Detail Nilai Preferensi Alternatif</a></li>
                            <li><a class="dropdown-item" href="../menu-topsis-normalisasi/result.php">Detail Normalisasi</a></li>
                            <li><a class="dropdown-item" href="../menu-topsis-terbobot/result.php">Detail Normalisasi Terbobot</a></li>
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
                            Detail Nilai Maksimum dan Minimum
                          </div>
                          <div class="card-body">
                            <div class="row">
                                <div class="col mt-3">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID Nilai</th>
                                                <th>ID Kriteria</th>
                                                <th>Nama Kriteria</th>
                                                <th>Maksimum</th>
                                                <th>Minimum</th>
                                            </tr>                  
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT id_nilai, id_kriteria, nama_kriteria, maximum, minimum FROM topsis_maxmin";
                                                $a = $koneksi->query($sql);
                                                while($data = $a->fetch_array()){?>
                                                    <tr>
                                                        <td><?= $data['id_nilai'] ?></td>
                                                        <td><?= $data['id_kriteria'] ?></td>
                                                        <td><?= $data['nama_kriteria'] ?></td>
                                                        <td><?= $data['maximum'] ?></td>
                                                        <td><?= $data['minimum'] ?></td>
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