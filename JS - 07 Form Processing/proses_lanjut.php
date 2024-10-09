<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $selectdBuah = $_POST['buah'];

    if (isset($_POST['warna'])){
        $selectdWarna = $_POST['warna'];
    } else {
        $selectdWarna = [];
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo "Anda memilih buah : " . $selectdBuah . "<br>"; 
    
    if (!empty($selectdWarna)){
        echo "Warna favorit anda : " . implode(", ", $selectdWarna) . "<br>";
    } else {
        echo "Anda tidak memiliki warna favorit. <br>";
    }

    echo "Jenis kelamin anda : " . $selectedJenisKelamin;
}
?>