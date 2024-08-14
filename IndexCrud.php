<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Tampil semua Siswa</title>
</head>
<body>
<div class="container" style="margin:0 auto; width:50%">
<a href="tambah-siswa.php">Tambah siswa</a>
<table border="1" align="center" width="50% ">
<tr>
<td>id</td>
<td>Nama</td>
<td>Umur</td>
<td>kelas</td>
</tr>
<?php
include 'conn.php';
$query = mysqli_query($conn, 'select * from crud');
while ($siswa = mysqli_fetch_array($query)) {
?>
<tr>
<td><?= $siswa['id'] ?></td>
<td><?= $siswa['nama'] ?></td>
<td><?= $siswa['umur'] ?></td>
<td><?= $siswa['kelas'] ?></td>
<td>
<a href="edit.php?id=<?= $siswa['id'] ?>"><button type="submit">Edit</button></a>
<a href="proses-hapus.php?nama=<?= $siswa['nama'] ?>"><button type="submit">Hapus</button></a>

</td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>