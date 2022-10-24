<?php
    session_start();

    if(isset($_GET['metode'])){
        $_SESSION['metode'] = $_GET['metode'];
    }else{
        $_SESSION['metode'] = "saw";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <title>Beranda</title>
    </head>
    <body>
    <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <?php
                    if(isset($_SESSION['metode'])){
                      if($_SESSION['metode'] == "wp"){ ?>
                        <a class="navbar-brand" href="index.php">Metode WP</a>
                      <?php
                      } else if($_SESSION['metode'] == "saw"){ ?>
                        <a class="navbar-brand" href="index.php">Metode SAW</a>
                      <?php
                      } else{ ?>
                        <a class="navbar-brand" href="index.php">Metode SAW</a>
                      <?php
                      }
                    }
                ?>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="btn btn-dark" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tampilan/data/dtalternatif.php">Data Alternatif</a></li>
                            <li><a class="dropdown-item" href="tampilan/data/dtkriteria.php">Data Kriteria</a></li>
                            <li><a class="dropdown-item" href="tampilan/data/dtbobot.php">Data Bobot</a></li>
                            <li><a class="dropdown-item" href="tampilan/data/dtskala.php">Data Skala</a></li>
                            <li><a class="dropdown-item" href="tampilan/data/dtmatrix.php">Data Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Formulir</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tampilan/form/formalternatif.php">Formulir Alternatif</a></li>
                            <li><a class="dropdown-item" href="tampilan/form/formkriteria.php">Formulir Kriteria</a></li>
                            <li><a class="dropdown-item" href="tampilan/form/formbobot.php">Formulir Bobot</a></li>
                            <li><a class="dropdown-item" href="tampilan/form/formskala.php">Formulir Skala</a></li>
                            <li><a class="dropdown-item" href="tampilan/form/formmatrix.php">Formulir Matrix Keputusan</a></li>
                        </ul>
                    </li>
                    <?php
                        if(isset($_SESSION['metode'])){
                            if($_SESSION['metode'] == "wp"){ ?>
                                <li class="nav-item dropdown">
                                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-nilaiS/result.php">Nilai S</a></li>
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-nilaiV/result.php">Nilai V</a></li>
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-normalisasiterbobot/result.php">Normalisasi Terbobot</a></li>
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-pangkat/result.php">Pangkat</a></li>
                                    </ul>
                                </li>
                            <?php
                            } else if($_SESSION['metode'] == "saw"){ ?>
                                <li class="nav-item dropdown">
                                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-detailmatrixkeputusan/result.php">Detail Matrix Keputusan</a></li>
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-normalisasi/result.php">Normalisasi</a></li>
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-perangkingan/result.php">Perankingan</a></li>
                                    </ul>
                                </li>
                                <?php
                            } else{ ?>
                                <li class="nav-item dropdown">
                                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-detailmatrixkeputusan/result.php">Detail Matrix Keputusan</a></li>
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-normalisasi/result.php">Normalisasi</a></li>
                                        <li><a class="dropdown-item" href="tampilan/menu/menu-perangkingan/result.php">Perankingan</a></li>
                                    </ul>
                                </li>
                            <?php
                            }
                        }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Metode</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?metode=saw">SAW</a></li>
                            <li><a class="dropdown-item" href="index.php?metode=wp">WP</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--akhir navbar-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="jumbotron jumbotron-fluid">
                        <div class="container">
                            <h1 class="display-6"><b>Selamat Datang di Metode SAW</b></h1><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">What are you looking for?</h5>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Data Kriteria</h5>
                            <p class="card-text" style="text-align: center;">Click on this!</p>
                            <h4 style="text-align: center;"><a href="tampilan/data/dtkriteria.php" class="btn btn-dark">Data Kriteria</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Data Bobot</h5>
                            <p class="card-text" style="text-align: center;">Click on this!</p>
                            <h4 style="text-align: center;"><a href="tampilan/data/dtbobot.php" class="btn btn-dark">Data Bobot</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Data Skala</h5>
                            <p class="card-text" style="text-align: center;">Click on this!</p>
                            <h4 style="text-align: center;"><a href="tampilan/data/dtskala.php" class="btn btn-dark">Data Skala</a>
                        </div>
                    </div>
                </div>
                <br>
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