<?php 
include 'conn.php';
$nama = $_POST ['nama'];
$umur = $_POST ['umur'];
$kelas = $_POST ['kelas'];

$sql = "insert into crud values('$nama','$umur','$kelas')";
$query = mysqli_query($conn, $sql);

if (!$query){
    die(mysqli_error($conn));
}
    header("Location: IndexCrud.php");

?>