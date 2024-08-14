<?php
include "conn.php";
$nama = $_GET['nama'];
$sql = "delete from crud where nama='$nama'";
$query = mysqli_query($conn, $sql);
if (!$query) {
 die(mysqli_error($conn));
}
header("Location: IndexCrud.php");
?>