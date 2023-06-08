
<div class="container p-5">

<h4>Edit Product Detail</h4>
<?php
  include_once "../config/dbconnect.php";
	if (!empty($_POST['record'])) {
  $ID = mysqli_real_escape_string($conn, $_POST['record']);
  $query = "SELECT * FROM satwa WHERE id_satwa='$ID'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);

?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
<div class="form-group">
<input type="text" class="form-control" id="product_id" value="<?= $row['id_satwa'] ?>" hidden>
</div>
<div class="form-group">
<label for="name">Nama Binatang:</label>
<input type="text" class="form-control" id="p_name" value="<?= $row['nama_binatang'] ?>">
</div>
<div class="form-group">
<label for="desc">Deskripsi:</label>
<input type="text" class="form-control" id="p_desc" value="<?= $row['deskripsi_satwa'] ?>">
</div>
<div class="form-group">
<img width='200px' height='150px' src='<?= $row["gambar"] ?>'>
<div>
<label for="file">Choose Image:</label>
<input type="text" id="existingImage" class="form-control" value="<?= $row['gambar'] ?>" hidden>
<input type="file" id="newImage" value="">
</div>
</div>
<div class="form-group">
<button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
</div>
</form>

  <?php
      }
    }
    mysqli_close($conn);
  ?>
</div>