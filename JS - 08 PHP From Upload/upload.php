<?php
if(isset($_POST["submit"])){
    $targetdir = "uploads/"; //direktori untuk menyimpan file
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 3*1024*1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"]<+$maxsize){
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
            echo "File berhasil diunggah";

            //menampilkan thumbnail dengan lebar 200px (tinggi otomatis)
            echo "<p>Thumbnail</p>";
            echo "<img src='$targetfile' style='width: 200px; height: auto;'>";
        } else {
            echo "Gagal mengunggah file";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>