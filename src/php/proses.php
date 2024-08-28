<?php
$sql = "SELECT * FROM `absensi`;";

$host  = "localhost";
$username = "root";
$password = "";
$database = "absen";

$koneksi = new mysqli ($host, $username, $password, $database);
if(isset($_POST['simpan']))

$nama_lengkap = $_POST['nama_lengkap'];
$gender = $_POST['gender'];
$instansi =$_POST['gender'];
$Jabatan = $_POST['Jabatan'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$lokasi = $_POST['lokasi'];


$koneksi = mysqli_query($koneksi," INSERT INTO absensi (nama_lengkap,gender,instansi,jabatan,email,hp,lokasi,ttd) VALUES (,'$nama','$kelamin','$instansi','$jabatan','$telepon','$email','$namakab','$kablain','$signed')");

if($query){
  header('location:index.php');
  echo'berhasil';
}
?>
$stmt->close();
$conn->close();
?>
