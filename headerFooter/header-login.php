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
    <link rel="icon" src="assets/img/Logo.png" href="index.php" type="image/x-icon" />

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
            <li class="nav-item  mx-2">
              <a class="nav-link active" aria-current="page" href="tiket.php"
                >Tiket</a>
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

            <!-- BAGIAN USERNAME DAN LOGOUT -->
            <li class="nav-item mx-2">

              <!-- information of the user logged in -->
              <!-- welcome message for the logged in user -->
              <?php if (isset($_SESSION['firstName'])) : ?>
                <p >
                  Welcome,
                  <strong>
                    <?php echo $_SESSION['firstName']; ?>
                  </strong>
              </p>

                
              <?php endif ?>
              </li>
              <li class="nav-item mx-2">
                <!-- <p><a 
                  href="index.php?logout='1'" 
                  style="color: red; margin-top: 2px;">
                    Logout
                </a></p> -->
                <p><a href="index.php?logout='1'" type="button" class="btn btn-outline-danger" >Logout</a></p>
            </li>
          </ul>
      </div>
    </nav>
