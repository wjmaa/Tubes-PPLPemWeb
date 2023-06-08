<?php
include('headerFooter/php-awal.php');
include('db/server.php');

if (!isset($_SESSION['firstName'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

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

    <!-- Pesan Tiket -->
    <section id="pesan-tiket" >
      <div class="container">
        <div class="row">
          <div class="col-12 text-center pt-5 mt-5" style="margin-bottom: 40px;">
            <h2>Pesan Tiket</h2>
          </div>

          <!-- Info Pane -->
          <div class="container" style="margin-bottom: 10px;">
            <div class="row justify-content-center">
              <div class="col-sm-4">
                <h5 style="color: #85c1e9;">Informasi Wahana</h5>
                <table class="table d-inline-block">
                  <thead class="thead-dark">
                    <tr class="table-info">
                      <th scope="col">Nama Wahana</th>
                      <th scope="col">Harga per Orang</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Tidak Memilih</td>
                      <td>Rp. 0</td>
                    </tr>
                    <tr>
                      <td>Aquarium Laut</td>
                      <td>Rp. 20000</td>
                    </tr>
                    <tr>
                      <td>Memberi Makan Rusa</td>
                      <td>Rp. 10000</td>
                    </tr>
                    <tr>
                      <td>Keduanya</td>
                      <td>Rp. 30000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-sm-4" >
                <h5 style="color: #85c1e9;">Informasi Harga & Ketentuan Usia</h5>
                  <table class="table d-inline-block">
                    <thead class="thead-dark">
                      <tr class="table-info">
                        <th scope="col">Kelompok Usia</th>
                        <th scope="col">Harga per Orang</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Anak-Anak (<=10th)</td>
                        <td>Rp. 5000</td>
                      </tr>
                      <tr>
                        <td>Remaja (11-18th)</td>
                        <td>Rp. 6000</td>
                      </tr>
                      <tr>
                        <td>Dewasa (>=19th</td>
                        <td>Rp. 7000</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>

          <form method="post" action="" class="row g-3" >
            <!-- Form Nama -->
            <div class="form-group row" style="margin-bottom: 20px;">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Name of person who books the tickets" value=
                    "<?php 
                      if((isset($_SESSION['firstName']) && isset($_SESSION['lastName']))){
                        echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName'];
                      } else {
                          "";
                      }
                    ?>" readonly>
                </div>
            </div>
            <!-- Form Jumlah anak-anak -->
            <div class="form-group row" style="margin-bottom: 20px;">
                <label for="regular" class="col-sm-2 col-form-label">Anak-Anak:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="anak_anak" value="0" name="anak_anak_num" oninput="Total_Tiket(); Total_Harga()">
                </div>
            </div>
            <!-- Form jumlah remaja -->
            <div class="form-group row" style="margin-bottom: 20px;">
                <label for="student" class="col-sm-2 col-form-label">Remaja:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="remaja" value="0" name="remaja_num" oninput="Total_Tiket(); Total_Harga()">
                </div>
            </div>
            <!-- Form jumlah dewasa -->
            <div class="form-group row" style="margin-bottom: 20px;">
                <label for="child" class="col-sm-2 col-form-label">Dewasa:</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="dewasa" value="0" name="dewasa_num" oninput="Total_Tiket(); Total_Harga()">
                </div>
            </div>
            <!-- Form wahana -->
            <div class="form-group row" style="margin-bottom: 20px;">
                <label for="child" class="col-sm-2 col-form-label">Paket Wahana:</label>
                <div class="col-sm-2">
                    <select name="wahana" id="wahana" class="form-control" onchange="total_harga_wahana()">
                      <option value="default" selected>-- Pilih --</option>
                      <?php 
                        $db = mysqli_connect('localhost', 'root', '', 'kebun_binatang');
                        $sql = "SELECT kode_wahana,nama_wahana FROM wahana ORDER BY kode_wahana ASC";
                        $hasil = $db->query($sql);
                        if ($hasil->num_rows > 0) {
                          while($row = $hasil->fetch_assoc()){
                            echo '<option value="' . $row["kode_wahana"] . '">' . $row["nama_wahana"] . '</option>';
                          }
                        } else {
                          echo "0 result";
                        }
                      ?>
                    </select>
                </div>
                
                <div class="col-sm-1">
                  <input type="text" id="total-tiket" name="total-tiket" class="form-control" onchange="total_harga_wahana()" readonly>
                </div>
                <div class="col-sm-2">
                  <input type="text" id="total-harga-wahana" name="total-harga-wahana" class="form-control" onchange="total_harga_wahana();" readonly value="0">
                </div>
            </div>
            <!-- Form date -->
            <div class="form-group row" style="margin-bottom: 40px;">
                <label for="date" class="col-sm-2 col-form-label">Date:</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" id="jadwal" value="0" name="jadwal" required>
                </div>
            </div>
            <!-- Form total harga -->
            <div class="form-group row" style="margin-bottom: 20px;">
                <label for="name" class="col-sm-2 col-form-label">Total Harga:</label>
                <div class="col-sm-4">
                  <input type="text" id="total-harga" name="total_harga" class="form-control" readonly>
                </div>
            </div>


            <div class="form-group row mt-4">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary" name="reg_tiket">Book Ticket</button>
                </div>
            </div>
          </form>

        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php display_footer(); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script>
      // FUNCTION UNTUK JUMLAH TIKET PER KATEGORI
      function Total_Tiket() {
        // Get the values of the number inputs
        var anak_anak = document.getElementById("anak_anak").value;
        var remaja = document.getElementById("remaja").value;
        var dewasa = document.getElementById("dewasa").value;

        // Add the numbers together
        var total = parseFloat(anak_anak) + parseFloat(remaja) + parseFloat(dewasa);

        // Display the total
        document.getElementById("total-tiket").value = total;
      }

      // FUNCTION UNTUK JUMLAH TOTAL BIAYA WAHANA YANG DIPILIH
      document.getElementById("anak_anak").addEventListener("change", total_harga_wahana);
      document.getElementById("remaja").addEventListener("change", total_harga_wahana);
      document.getElementById("dewasa").addEventListener("change", total_harga_wahana);
      function total_harga_wahana(){
        var dbValue = document.getElementById("wahana").value;
        var totalTiket = document.getElementById("total-tiket").value;

        if (dbValue == 'W0') {
          var total = parseFloat(totalTiket) * 0;
        } else if (dbValue == 'W1') {
          var total = parseFloat(totalTiket) * 20000;
        } else if (dbValue == 'W2') {
          var total = parseFloat(totalTiket) * 10000;
        } else if (dbValue == 'W3') {
          var total = parseFloat(totalTiket) * 30000;
        } else {
          var total = 0;
        }

        // Display the total
        document.getElementById("total-harga-wahana").value =  total;
      }

      // FUNCTION UNTUK MENAMPILKAN TOTAL HARGA TIKET
      document.getElementById("anak_anak").addEventListener("change", Total_Harga);
      document.getElementById("remaja").addEventListener("change", Total_Harga);
      document.getElementById("dewasa").addEventListener("change", Total_Harga);
      document.getElementById("wahana").addEventListener("change", Total_Harga);
      function Total_Harga(){
        //get the values of number inputs
        var anak_anak = document.getElementById("anak_anak").value;
        var remaja = document.getElementById("remaja").value;
        var dewasa = document.getElementById("dewasa").value;
        var wahana = document.getElementById("total-harga-wahana").value;

        //total tiap kategori
        var total_anak = parseFloat(anak_anak)*5000;
        var total_remaja = parseFloat(remaja)*6000;
        var total_dewasa = parseFloat(dewasa)*7000;
        

        // sum all the numbers together
        var subTotal = parseFloat(total_anak) + parseFloat(total_remaja) + parseFloat(total_dewasa);
        var total = parseFloat(subTotal)+parseFloat(wahana);

        // Display the total
        document.getElementById("total-harga").value = "Rp. " + total;
      }
      
      


      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
