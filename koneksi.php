<?php
$host="localhost";
$user="root";
$password="";
$databse="db_refan";

$koneksi=mysqli_connect($host,$user.$password);
mysqli_select_db($koneksi,$databse);

//cek koneksi
if($koneksi){
echo "Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>
