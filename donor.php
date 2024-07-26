<?php

require "private/conn.php";
session_start();


if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Proses Tambah Siwak
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $goldar = $_POST['goldar'];
    $tempat = $_POST['tempat'];
   


    // Assuming your table name is "Siwak"
    $query = "INSERT INTO donor (nama, goldar, tempat) 
          VALUES ('$nnama', '$goldar', '$tempat')";

    $result = mysqli_query($koneksi, $query);
    var_dump($query);

    if ($result) {
        echo "Query executed successfully!";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONOR</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">

</head>

<style>
    .form-simkah {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .simkah-container {
        margin: 2rem 0;
    }

    .simkah-container h1 {
        font-size: 2rem;
    }

    .simkah-container .card-box {
        display: flex;
        gap: 1.25rem;
        flex-wrap: wrap;
        margin: 2rem 0;
    }

    .simkah-container .card-box .card-header {
        font-size: 1.25rem;
        font-weight: 600;
    }

    .simkah-container .simkah-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="/">
                <img src="src/assets/donor.png" height="50" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
            </a>

            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-1">
                    <li class="nav-item">
                        <a data-mdb-ripple-init class="btn btn-light" href="index.php" role="button">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-mdb-ripple-init class="btn btn-light" href="relawan.php" role="button">SRELAWAN</a>
                    </li>
                    <li class="nav-item">
                        <a data-mdb-ripple-init class="btn btn-danger" href="donor.php" role="button">DONOR</a>
                    </li>
                    <li class="nav-item">
                        <a data-mdb-ripple-init class="btn btn-light" href="panduan.php" role="button">PANDUAN</a>
                    </li>

                </ul>

                <!-- Left links -->

                <div class="d-flex align-items-center">
                    <a data-mdb-ripple-init class="btn btn-danger  px-3 me-2" href="logout.php" role="button">Logout</a>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>

    <!-- Main -->
    <div class="container">
        <div class="simkah-container">
            <div class="simkah-header">
                <h1>Program Siwak</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
                    Daftar Disini
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Siwak</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="siwak.php" method="post">

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="nama_barang" class="form-control" name="nama_barang" required />
                                        <label class="form-label" for="nama_barang">Nama Barang</label>
                                    </div>
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="jumlah_barang" class="form-control" name="jumlah_barang" required />
                                        <label class="form-label" for="jumlah_barang">Jumlah Barang</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="nama_pemberi" class="form-control" name="nama_pemberi" required />
                                        <label class="form-label" for="nama_pemberi">Nama Pemberi</label>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <input type="text" id="tujuan" class="form-control" name="tujuan" required />
                                        <label class="form-label" for="tujuan">Tujuan</label>
                                    </div>


                                    <!-- Submit button -->
                                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Daftar</button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-box">
                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Apa itu wakaf?</div>
                    <div class="card-body">
                        <p class="card-text">Wakaf adalah suatu bentuk persembahan atau sumbangan yang diberikan oleh
                            seseorang atau sekelompok orang untuk tujuan amal atau kepentingan umum, terutama dalam konteks
                            keagamaan dan kemanusiaan. Wakaf biasanya melibatkan penyisihan atau dedikasi aset tertentu,
                            seperti tanah, bangunan, atau aset keuangan lainnya, untuk digunakan demi kesejahteraan
                            masyarakat.</p>
                    </div>
                </div>

                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Hadist wakaf?</div>
                    <div class="card-body">
                        <h5 class="card-title" style="padding-bottom: 1.25rem;">إِذَا مَاتَ الْإِنْسَانُ انْقَطَعَ عَمَلُهُ
                            إِلَّا مِنْ ثَلَاثَةٍ مِنْ صَدَقَةٍ جَارِيَةٍ وَعِلْمٍ يُنْتَفَعُ بِهِ وَوَلَدٍ</h5>
                        <p class="card-text">“Jika seseorang meninggal dunia, maka terputuslah amalannya kecuali tiga
                            perkara (yaitu): sedekah jariyah, ilmu yang dimanfaatkan, atau do’a anak yang shalih” (HR.
                            Muslim no. 1631)</p>
                    </div>
                </div>

                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Tentang Siwak</div>
                    <div class="card-body">
                        <p class="card-text">Kami memperkenalkan Sistem Wakaf (Waqf), suatu platform yang memungkinkan Anda
                            memberikan kontribusi untuk proyek-proyek amal dan kebaikan umum.</p>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>


</body>

</html>