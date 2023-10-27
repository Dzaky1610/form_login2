<?php

$conn=mysqli_connect("localhost","root","","login_db");

if(!$conn){
 die("Koneksi Gagal". mysqli_connect_error());
}else{
    echo"koneksi Berhasil";
}





?>