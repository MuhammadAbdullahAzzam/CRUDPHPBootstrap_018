<?php
//Koneksi ke database ("" merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

//cek Koneksi ke Database
//Apabila Error
if(mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysql_connect_error();
}