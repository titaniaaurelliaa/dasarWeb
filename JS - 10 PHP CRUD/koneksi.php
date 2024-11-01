<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

//periksa koneksi
if (mysqli_connect_errno()) {
    die("Koneksi databse gagal: " . mysqli_connect_errno());
}