<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <script type="text/javascript" nonce="fb49cb2e602a40d8a113bf728c4" src="//local.adguard.org?ts=1665678016596&amp;type=content-script&amp;dmn=uasi.000webhostapp.com&amp;pth=%2Fhome_admin.php&amp;app=chrome.exe&amp;css=3&amp;js=1&amp;rel=1&amp;rji=1&amp;sbe=1"></script>
        <script type="text/javascript" nonce="fb49cb2e602a40d8a113bf728c4" src="//local.adguard.org?ts=1665678016596&amp;name=AdGuard%20Assistant&amp;name=AdGuard%20Extra&amp;name=AdGuard%20Popup%20Blocker&amp;name=Web%20of%20Trust&amp;type=user-script"></script><link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <title>Beranda</title>
    </head>
    <body>
    <!--navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="home.php">Sistem Penilaian Kinerja</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav nav-pills">
                    <li class="nav-item">
                    <a class="btn btn-dark" aria-current="page" href="home_admin.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Data</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="data_alternatif.php">Data Alternatif</a></li>
                        <li><a class="dropdown-item" href="data_kriteria.php">Data Kriteria</a></li>
                        <li><a class="dropdown-item" href="data_bobot.php">Data Bobot</a></li>
                        <li><a class="dropdown-item" href="data_skala.php">Data Skala</a></li>
                        <li><a class="dropdown-item" href="data_matrixkeputusan.php">Data Matrix Keputusan</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="detail_mk.php">Detail Matrix Keputusan</a></li>
                        <li><a class="dropdown-item" href="normalisasi.php">Normalisasi</a></li>
                        <li><a class="dropdown-item" href="perankingan.php">Perankingan</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-dark" aria-current="page" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="btn btn-dark" aria-current="page" href="logout.php">Logout</a>
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
                            <h1 class="display-6"><b>Selamat Datang di Sistem Pendukung Keputusan</b></h1><br>
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
                            <h4 style="text-align: center;"><a href="data_kriteria.php" class="btn btn-dark">Data Kriteria</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Data Bobot</h5>
                            <p class="card-text" style="text-align: center;">Click on this!</p>
                            <h4 style="text-align: center;"><a href="data_bobot.php" class="btn btn-dark">Data Bobot</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">Data Skala</h5>
                            <p class="card-text" style="text-align: center;">Click on this!</p>
                            <h4 style="text-align: center;"><a href="data_skala.php" class="btn btn-dark">Data Skala</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <!--footer-->
        <footer class="mt-2 bg-dark p-3 text-center" style="color: white; font-weight: bold;">
            <p>Sistem Penilaian Kinerja &copy; 2021</p>
        </footer>
        <!--akhir footer-->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>