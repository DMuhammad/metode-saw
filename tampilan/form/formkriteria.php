<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Form Kriteria</title>
    </head>
    <body>
    <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <?php
                    if(isset($_SESSION['metode'])){
                      if($_SESSION['metode'] == "wp"){ ?>
                        <a class="navbar-brand" href="../../index.php?metode=<?php echo $_SESSION['metode'] ?>">Metode WP</a>
                      <?php
                      } else if($_SESSION['metode'] == "saw"){ ?>
                        <a class="navbar-brand" href="../../index.php?metode=<?php echo $_SESSION['metode'] ?>">Metode SAW</a>
                      <?php
                      } else{ ?>
                        <a class="navbar-brand" href="../../index.php?metode=<?php echo $_SESSION['metode'] ?>">Metode SAW</a>
                      <?php
                      }
                    }
                ?>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="btn btn-dark" aria-current="page" href="../../index.php?metode=<?php echo $_SESSION['metode'] ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../data/dtalternatif.php">Data Alternatif</a></li>
                            <li><a class="dropdown-item" href="../data/dtkriteria.php">Data Kriteria</a></li>
                            <li><a class="dropdown-item" href="../data/dtbobot.php">Data Bobot</a></li>
                            <li><a class="dropdown-item" href="../data/dtskala.php">Data Skala</a></li>
                            <li><a class="dropdown-item" href="../data/dtmatrix.php">Data Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Formulir</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="formalternatif.php">Formulir Alternatif</a></li>
                            <li><a class="dropdown-item" href="formkriteria.php">Formulir Kriteria</a></li>
                            <li><a class="dropdown-item" href="formbobot.php">Formulir Bobot</a></li>
                            <li><a class="dropdown-item" href="formskala.php">Formulir Skala</a></li>
                            <li><a class="dropdown-item" href="formmatrix.php">Formulir Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <?php
                        if(isset($_SESSION['metode'])){
                            if($_SESSION['metode'] == "wp"){ ?>
                                <li class="nav-item dropdown">
                                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="../menu/menu-nilaiS/result.php">Nilai S</a></li>
                                        <li><a class="dropdown-item" href="../menu/menu-nilaiV/result.php">Nilai V</a></li>
                                        <li><a class="dropdown-item" href="../menu/menu-normalisasiterbobot/result.php">Normalisasi Terbobot</a></li>
                                        <li><a class="dropdown-item" href="../menu/menu-pangkat/result.php">Pangkat</a></li>
                                    </ul>
                                </li>
                            <?php
                            } else if($_SESSION['metode'] == "saw"){ ?>
                                <li class="nav-item dropdown">
                                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="../menu/menu-detailmatrixkeputusan/result.php">Detail Matrix Keputusan</a></li>
                                        <li><a class="dropdown-item" href="../menu/menu-normalisasi/result.php">Normalisasi</a></li>
                                        <li><a class="dropdown-item" href="../menu/menu-perangkingan/result.php">Perankingan</a></li>
                                    </ul>
                                </li>
                                <?php
                            } else{ ?>
                                <li class="nav-item dropdown">
                                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="../menu/menu-detailmatrixkeputusan/result.php">Detail Matrix Keputusan</a></li>
                                        <li><a class="dropdown-item" href="../menu/menu-normalisasi/result.php">Normalisasi</a></li>
                                        <li><a class="dropdown-item" href="../menu/menu-perangkingan/result.php">Perankingan</a></li>
                                    </ul>
                                </li>
                            <?php
                            }
                        }
                    ?>
                </ul>
            </div>
        </nav>
        <!--akhir navbar-->
        <div class="card col-sm-4 mx-auto mt-5" style="margin-bottom: 110px;">
            <div class="card-header">
                Form Kriteria
            </div>
            <div class="card-body">
                <form action="../../insert/insertkriteria.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <input type="text" name="nama_kriteria" class="form-control" placeholder="Nama Kriteria" autofocus><br>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-dark btn-block">Tambah</button>
                </form>
            </div>
        </div>
        <!--footer-->
        <footer class="mt-2 bg-dark p-3 text-center fixed-bottom" style="color: white; font-weight: bold;">
            <p>Metode SAW &copy; 2022</p>
        </footer>
        <!--akhir footer-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>