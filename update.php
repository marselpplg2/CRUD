<?php
include 'conn.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$kelas = $_POST['kelas'];

$sql = "update crud set nama='$nama',umur='$umur',kelas ='$kelas' where id = '$id' ";
$query = mysqli_query($conn, $sql);
if (!$query) {
die(mysqli_error($conn));
}
header("Location: IndexCrud.php");