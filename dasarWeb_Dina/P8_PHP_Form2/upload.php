<?php
if(isset($_POST["submit"])) {
    $targetdir = "uploads/"; //Direktori tujuan untuk menyimpan file 
    $targetfile = $targetdir. basename($_FILES["myfile"]["name"]);
    $fileType =strtolower(pathinfo($targetfile, PATHINFO_EXTENSION)); 

    // $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    // $maxsize = 5*1024*1024;
    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 3*1024*1024; 
    
    if(in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
            echo "File berhasil diunggah.<br>";

            // soal 5 gambar lebar 200 & tinggi otomatis
            // echo "<img src='" . $targetfile . "' width='200' alt='Thumbnail' style='height:auto;'>";
        } else {
            echo "Gagal mengunggah file.";
        }
    }
    else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>