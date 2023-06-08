<?php
include('headerFooter/php-awal.php')
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

     <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/Logo.png" type="image/x-icon" />

    <title>Lurizoo</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php display_header(); ?>

    <!-- Hiro Section -->
    <section id="hero">
      <div class="container-fluid">
        <img class="img-fluid" src="assets/img/Jumbo.jpg">
      </div>

    </section>

    <!--menu-->
    <div id="menu" class="container">
        <div class="row col-12 mt-4">
            <div class="col-md-3">
              <h2 id="text-menu">Tiket</h2>
              <p>Tersedia berbagai jenis pilihan paket tiket untuk anda. Cek detailnya pada menu tiket.</p>
            </div>
            <div class="col-md-3">
              <h2 id="text-menu">Harga</h2>
              <p>Dapatkan penawaran harga terbaik sekarang juga. Anda dapat memilih dengan pilihan paket tiket yang tersedia</p>
            </div>
            <div class="col-md-3">
              <h2 id="text-menu">Waktu</h2>
              <p>Buka setiap hari. Weekdays pukul 08.00 - 16.30 dan Weekends pukul 09.00 - 17.00</p>
            </div>
            <div class="col-md-3">
              <h2 id="text-menu">Denah</h2>
              <p>Adanya fitur denah memudahkan anda dalam mencari lokasi satwa di kebun binatang</p>
            </div>
          </div>
        </div>

    <!-- Tentang -->
    <section id="tentang">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center pt-5 mt-5">
            <h2 class="judul-tentang">TENTANG</h2>
          </div>
        </div>
        <div class="row h-100" style="overflow:auto">
          <div class="col-md-6 mt-4 menu">
            <img width="400" height="400" src="assets/img/LOGO.png" alt="" class="img-fluid"/>
          </div>
          <div class="col-md-6 tentang-tagline end-0 mt-4">
            <p class="text-tentang">
              Selamat datang di Sanggaluri tempat rekreasi terbaik andalan keluarga. Sanggaluri adalah sebuah Kebun Binatang di Purbalingga, Jawa Tengah dengan luas kawasan 10 hektar. Sanggaluri berada di tengah jantung kota Purbalingga dengan koleksi satwa yang menarik,lingkungan yang asri, adem dan nyaman. 
              
            </p>
            <div class="row mt-2">
                <button type="button" class="button-selengkapnya" href="about.php">
                 <a
                    style="text-decoration: none; color: #000"
                    href="about.php"
                  >Selengkapnya
                </a>
                </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Satwa section -->
    <section id="satwa">
     <div class="container">
      <div class="row">
        <div class="col-12 text-center pt-5 mt-5">
          <h2>SATWA KAMI</h2>
          <span class="sub-title">Berikut ini merupakan beberapa jenis satwa yang ada di Lurizoo.</span>
        </div>
      </div>
      <div class="row box">
        <?php 
        include_once "db/dbconnect.php";
          $satwa = mysqli_query($conn, "SELECT * FROM satwa");
          if(mysqli_num_rows($satwa) > 0){
            while($p = mysqli_fetch_array($satwa)){
        ?>  
        <div class="col-4">
          <a href="detail-satwa.php?id=<?php echo $p['id_satwa'] ?>">
            <img height="200px" weight="100%" src="<?php echo $p['gambar']; ?>">
            <p class="nama"><?php echo substr($p['nama_binatang'], 0, 30) ?></p>
          </a>
        </div>
        <?php }}else{ ?>
          <p class="col-12 text-center">Satwa tidak ada</p>
        <?php } ?>
      </div>
      </div>
    </section>


    <!-- Footer -->
    
    <?php display_footer(); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
