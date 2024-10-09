<?php
$myArray = array(); //array kosong
if (empty($myArray)){
    echo "Array tidak terdefinisikan atau kosong.<br>";
} else {
    echo "Array terdefinisikan dan tidak kosong.<br>";
}

if (empty($nonExistentVar)){
    echo "Variabel tidak terdefinisikan atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>