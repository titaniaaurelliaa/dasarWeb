<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("jpg", "jpeg", "png", "gif");
    $total_files = count($_FILES['files']['name']);
    
    for ($i = 0; $i < $total_files; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        
        // Perbaikan pada bagian ini
        $file_parts = explode('.', $file_name);
        @$file_ext = strtolower(end($file_parts));
        
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "$file_name memiliki ekstensi yang tidak diizinkan. Ekstensi yang diperbolehkan hanya jpg, jpeg, png, gif.";
        }

        if ($file_size > 2097152) {
            $errors[] = "$file_name terlalu besar. Ukuran maksimal adalah 2MB.";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "$file_name berhasil diunggah.<br>";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
}
?>