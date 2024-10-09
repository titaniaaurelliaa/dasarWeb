<?php
$pattern = '/[a-z]/'; //cocokkan huruf kecil
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)){
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil!<br>";
}

$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)){
    echo "Cocokkan : " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}

$pattern = '/apple/';
$replacment = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacment, $text);
echo $new_text; //output : "I like banana pie."
?>