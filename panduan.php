<?php

require "private/conn.php";
session_start();


if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Proses Tambah Simas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = $_POST['nama_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $nama_pemberi = $_POST['nama_pemberi'];
    $tujuan = $_POST['tujuan'];


    print_r($_POST);

    // Assuming your table name is "Siwak"
    $query = "INSERT INTO simas (nama_barang, jumlah_barang, nama_pemberi, tujuan) 
          VALUES ('$nama_barang', '$jumlah_barang', '$nama_pemberi', '$tujuan')";

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
    <title>PANDUAN</title>
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
                        <a data-mdb-ripple-init class="btn btn-light" href="relawan.php" role="button">RELAWAN</a>
                    </li>
                    <li class="nav-item">
                        <a data-mdb-ripple-init class="btn btn-light" href="donor.php" role="button">DONOR</a>
                    </li>
                    <li class="nav-item">
                        <a data-mdb-ripple-init class="btn btn-danger" href="panduan.php" role="button">PANDUAN</a>
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
                <h1>Program Simas</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#exampleModal">
                    Daftar Disini
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Formulir Pendaftaran</h5>
                                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="simas.php" method="post">

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
                    <div class="card-header">Apa itu simas?</div>
                    <div class="card-body">
                        <p class="card-text">Sistem Kemasjidan, atau yang disingkat SIMAS, adalah suatu sistem informasi yang dirancang untuk mengelola dan memfasilitasi berbagai kegiatan atau layanan yang terkait dengan masjid di suatu wilayah atau lembaga, termasuk di simerah_ambon (Kantor Urusan Agama). Meskipun tidak ada detail spesifik yang diberikan, namun umumnya sistem semacam ini dirancang untuk membantu dalam administrasi dan pengelolaan kegiatan keagamaan di masjid.</p>
                    </div>
                </div>

                <div class="card text-bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header">Cara kerja simas?</div>
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1rem; font-weight: 600;">
                            Berikut adalah beberapa cara umum cara kerja SIMAS di simerah_ambon:

                        </h5>
                        <p class="card-text">
                        <ol>
                            <li>Pendaftaran Acara Keagamaan</li>
                            <li>Manajemen Keanggotaan Masjid</li>
                            <li>Pengelolaan Keuangan</li>
                            <li>Pendaftaran Pernikahan</li>
                        </ol>
                        </p>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>

</body>

</html>