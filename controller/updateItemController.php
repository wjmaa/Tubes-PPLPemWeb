<?php
    include_once "../config/dbconnect.php";

    $satwa_id = $_POST['id_satwa'];
    $p_name = $_POST['nama_binatang'];
    $p_desc = $_POST['deskripsi_satwa'];

    if(isset($_FILES['newImage'])){
        
        $location = "./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'webp');
        $image = rand(1000, 1000000) . "." . $ext;
        $final_image = $location . $image;
        
        if(in_array($ext, $valid_extensions)){
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir . $image);
        }
    }
    else{
        $final_image = $_POST['existingImage'];
    }

    $query = "UPDATE satwa SET nama_binatang = ?, deskripsi_satwa = ?, gambar = ? WHERE id_satwa = ?";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $p_name, $p_desc, $final_image, $satwa_id);
    $updateItem = mysqli_stmt_execute($stmt);

    if(!$updateItem){
        echo mysqli_stmt_error($stmt);
    }
    else{
        echo "true";
    }
?>
