<?php
include "koneksi.php";
$kode_kab=$_POST["kode_kabupaten"];
$kode_kec=$_POST["kode_kecamatan"];
$nama_kecamatan=$_POST["nama_kecamatan"];

$sql="UPDATE kecamatan set nama_kecamatan='$nama_kecamatan' where kode_kec='$kode_kec'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>