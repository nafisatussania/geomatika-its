<?php
$host = "localhost";
$user ="postgres";
$port = "5432";
$pass = "1234";
$db = "register";
$connect =pg_connect("host=$host port =$port dbname=$db user=$user password=$pass") or die ("Could not connect to Server\n");

if(!$connect){
	echo "Error : Unable to open database\n";
} else {
	$nama = $_POST['nama'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$nik = $_POST['nik'];
	$umur = $_POST['umur'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];

	$query = "INSERT INTO registrasi (nama, jeniskelamin, nik, umur, alamat, email) VALUES('$nama','$jeniskelamin', $nik,'$umur','$alamat','$email')";
	$result = pg_query($connect, $query);
	header("Location: index.html");
		}
pg_close($connect);
?>