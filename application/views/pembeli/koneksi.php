<?php
$koneksi = mysqli_connect("localhost","root","","db_taufik_juice");
if (mysqli_connect_error()){
	echo "Koneksi dengan database gagal : ".mysqli_connect_error();
}
?>