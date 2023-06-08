<?php include('../db/server.php');?>

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

    <title>Lurizoo Ticket</title>
  </head>

  <body>
    <div class="container" style="margin-bottom: 50px;">
      <div class="row justify-content-center" style="margin: 60px;">
        <div style="text-align:center;">
          <h1>Tiket Pass Lurizoo</h1>
        </div>
        <table id="tab" class="table table-bordered mx-auto">
          
          <tbody>
            <tr>
              <td><strong>Nama Lengkap</strong></td>
              <td><?php echo $_SESSION['nama_lengkap']; ?></td>
            </tr>
            <tr>
              <td><strong>Jadwal</strong></td>
              <td><?php echo $_SESSION['jadwal']; ?></td>
            </tr>
            <tr>
              <td><strong>Jumlah Anak-Anak</strong></td>
              <td><?php echo $_SESSION['anak_anak']; ?></td>
            </tr>
            <tr>
              <td><strong>Jumlah Remaja</strong></td>
              <td><?php echo $_SESSION['remaja']; ?></td>
            </tr>
            <tr>
              <td><strong>Jumlah Dewasa</strong></td>
              <td><?php echo $_SESSION['dewasa']; ?></td>
            </tr>
            <tr>
              <td><strong>Wahana Yang Dipilih</strong></td>
              <td><?php echo $_SESSION['kode_wahana']; ?></td>
            </tr>
            <tr>
              <td><strong>Total Harga</strong></td>
              <td><?php echo $_SESSION['total_harga']; ?></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div style="text-align:center;">
        <h1>Pin Anda:</h1>
        <p style="font-size: 100px;"><?php echo $_SESSION['pin']; ?></p>
      </div>
      
    </div>

    <div class="d-flex align-items-center justify-content-center" style="margin-bottom: 20px;">
      <button type="button" class="btn btn-primary" onclick="window.print()">Print</button>
    </div>

    <div class="d-flex align-items-center justify-content-center" style="margin-bottom: 20px;"> 
      <button type="button" class="btn btn-secondary" ><a style="text-decoration: none; color: #fff" href="../index.php">Back To Main Page</a></button>
    </div>
    

    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    >

    
  
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

