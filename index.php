<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMERAH AMBON</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<!-- Intro settings -->
<style>
    /* Default height for small devices */
    #intro-example {
        height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
        #intro-example {
            height: 600px;
        }
    }

    .gap-1 {
        gap: 1rem;
    }
</style>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="/">
                    <img src="src/assets/donor.png" height="50" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
                </a>

                <!-- Toggle button -->
                <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#modalbox" aria-controls="modalbox" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="modalbox">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex gap-1">
                        <li class="nav-item">
                            <a data-mdb-ripple-init class="btn btn-danger" href="index.php" role="button">Home</a>
                        </li>
                        <li class="nav-item">
                            <a data-mdb-ripple-init class="btn btn-light" href="relawan.php" role="button">RELAWAN</a>
                        </li>
                        <li class="nav-item">
                            <a data-mdb-ripple-init class="btn btn-light" href="donor.php" role="button">DONOR</a>
                        </li>
                        <li class="nav-item">
                            <a data-mdb-ripple-init class="btn btn-light" href="panduan.php" role="button">PANDUAN</a>
                        </li>

                    </ul>

                    <!-- Left links -->

                    <div class="d-flex align-items-center">
                        <a data-mdb-ripple-init class="btn btn-danger  px-3 me-2" href="registrasi.php" role="button">Daftar</a>
                        <a data-mdb-ripple-init class="btn btn-danger  px-3 me-2" href="login.php" role="button">Login</a>

                        <a data-mdb-ripple-init class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>

        <!-- Background image -->
        <div id="intro-example" class="p-5 text-center bg-image" style="background-image: url('src/assets/bg_donor.jpg');">
           <div class="mask" style="background-color: rgba(255, 99, 71, 0.4);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Layanan SI MERAH AMBON </h1>
                        <h5 class="mb-4">Setetes Darah Untuk Negeri </h5>
                    </div>
                </div>
            </div>
        </div>

         <!--Section: Content-->
    <section>
      <div class="row">
        <div class="col-md-6 gx-5 mb-4">
          <div class="bg-image hover-overlay shadow-2-strong" data-mdb-ripple-init data-mdb-ripple-color="light">
            <img src="src/assets/donor 1.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: #DEB887;"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>AMBON</strong></h4>
          <p class="text-muted">
          Ambon, sebuah pulau yang terhampar di tengah-tengah perairan Maluku, memiliki pesona yang tak terlupakan. Mari kita jelajahi lebih dekat:

Keindahan Alam: Pulau Ambon dikelilingi oleh laut biru yang memukau. Pantainya berpasir putih, dan terumbu karangnya menyimpan kehidupan bawah laut yang berwarna-warni. Anda bisa menyelam atau snorkeling untuk menemukan keajaiban bawah permukaan.
Sejarah yang Kaya: Ambon adalah salah satu pusat perdagangan rempah-rempah di masa lalu. Di sini, Portugis, Belanda, dan Inggris bersaing untuk menguasai sumber-sumber cengkeh dan pala. Jejak-jejak sejarah ini masih terlihat dalam benteng-benteng peninggalan kolonial.
Budaya yang Beragam: Orang Ambon memiliki keberagaman budaya dan adat istiadat. Anda dapat menemukan tarian-tarian tradisional, pakaian adat yang indah, dan festival-festival yang meriah. Masyarakat Ambon juga dikenal ramah dan hangat.
Kuliner yang Menggugah Selera: Jangan lewatkan mencicipi masakan khas Ambon, seperti rica-rica, ikan bakar, dan papeda. Rasa rempah-rempah dan bumbu lokal akan memanjakan lidah Anda.
Jadi, jika Anda berkesempatan mengunjungi Pulau Ambon, siapkan diri Anda untuk terpesona oleh keindahannya dan terhanyut dalam cerita-cerita yang mengalir di antara bukit-bukit hijau dan pantai-pantai yang menawan. 🌴🌊🏝️</p>
        </div>
      </div>
    </section>
    <section>
      <div class="row">
        <div class="col-md-6 gx-5 mb-4">
          <div class="bg-image hover-overlay shadow-2-strong" data-mdb-ripple-init data-mdb-ripple-color="light">
            <img src="src/assets/donor 2.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
        </div>

        <div class="col-md-6 gx-5 mb-4">
          <h4><strong>MUSEUM SIWALIMA JEJAK SEJARAH YANG TEGAK BERDIRI</strong></h4>
          <p class="text-muted">
          Bangunan Museum Siwalima di Ambon adalah lebih dari sekadar dinding dan atap. Ia adalah wadah yang mengandung puluhan tahun sejarah dan kekayaan budaya Maluku. Mari kita lihat lebih dekat:

Arsitektur yang Memikat: Bangunan ini memiliki arsitektur yang khas. Dinding-dindingnya mungkin telah menyaksikan cuaca, hujan, dan matahari selama puluhan tahun. Setiap retakan di tembok mengandung cerita tentang ketahanan dan perubahan zaman.
Jendela Menuju Masa Lalu: Jendela-jendela kaca di Museum Siwalima adalah pintu gerbang menuju masa lalu. Di baliknya, tersembunyi artefak-artefak, pakaian adat, dan senjata-senjata kuno. Ketika Anda melangkah masuk, Anda seolah memasuki portal waktu yang membawa Anda ke zaman Maluku yang berbeda.
Tempat Persembunyian Koleksi: Di dalam bangunan ini, terdapat ruang-ruang pameran yang menampilkan ribuan artefak. Ada ruang untuk busana pengantin, ruang sejarah, dan ruang kelautan. Setiap sudutnya dirancang untuk memamerkan kekayaan budaya dan sejarah Maluku.
Jadi, saat Anda berjalan di koridor-koridor Museum Siwalima, bayangkanlah suara langkah-langkah para pengunjung sebelum Anda dan cerita-cerita yang terpatri dalam tiap bata merah. 🏛️🌟🔍
          </p>
        </div>
      </div>
    </section>

    </header>



    <script src="js/mdb.min.js"></script>
</body>

</html>