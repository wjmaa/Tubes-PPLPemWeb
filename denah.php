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

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <!-- My Style -->
    <link rel="stylesheet" href="css/style-denah.css" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/Logo.png" type="image/x-icon" />

    <title>Lurizoo</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav
      class="navbar navbar-expand-lg navbar-dark position-fixed w-100 shadow"
    >
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img
            src="assets/img/LOGO.png"
            alt=""
            width="30"
            class="d-inline-block align-text-top me-3"
          />
          Lurizoo</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-3 mx-auto">
            <li class="nav-item mx-2">
              <a class="nav-link active" aria-current="page" href="tiket.php"
                >Tiket</a
              >
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="about.php">Tentang</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="satwa.php">Satwa</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="denah.php">Denah</a>
            </li>
          </ul>

          <div>
            <button class="button-secondary">
              <a style="text-decoration: none; color: #fff" href="login.php"
                >Masuk</a
              >
            </button>
            <button class="button-primary">
              <a
                style="text-decoration: none; color: #85c1e9"
                href="signin.php"
                >Daftar</a
              >
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- Hiro Section -->
    <section id="hero">
      <div class="container-fluid">
        <img class="img-fluid" src="assets/img/denah.jpg">
      </div>
    </section>


    <div class="container">
      <div class="col-md-11 tentang-tagline end-1 mt-4">
        <p class="text-tentang">
          Beberapa hal yang harus ditaati pada saat dikebun binatang : <br>
          1. Jangan memberi makanan dan minuman sembarang kepada hewan.<br>
          2. Jika hewan ditempatkan pada kandang kaca hindari untuk mengetuknya. Sebab hewan juga butuh waktu untuk istirahat.<br>
          3. Buang Sampah di Tempatnya.<br>
          4. Dilarang melempar benda apapun ke dalam kandang, karena satwa bisa menganggapnya sebagai makanan lalu ditelan.<br>
          5. Demi keamanan, pengunjung dilarang berinteraksi langsung dengan beberapa jenis satwa karena bisa membahayakan keselamatan.<br>
        </p>
      </div>
    </div>

     <!-- Footer -->
     <footer class="text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); color: #fff;">
        © 2022 Copyright Lurizoo
        <a class="text-white" href="tiket.php">Tiket</a>
        <a class="text-white" href="about.php">Tentang Kami</a>
        <a class="text-white" href="satwa.php">Satwa Kami</a>
        <a class="text-white" href="denah.php">Denah</a>
      </div>
      <!-- Copyright -->
    </footer>

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
