<?php
$conn = mysqli_connect("localhost","root","","dbmahasiswa");
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>