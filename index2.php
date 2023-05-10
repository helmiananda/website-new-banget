<?php
//koneksi
$conn = mysqli_connect("localhost","root","","db_siswa");

$result = mysqli_query($conn, "SELECT * FROM tb_siswa");

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Cari Data Dengan PHP
    </title>
</head>
<body>
    <h1>Data Produk</h1>
    <form method="post" action="">
    <label for="cari"> Cari Produk </label>
    <input type="text" name="query" id="keyword">
    <input type="submit" name="cari" value="Search" id="tombolCari">
    </form>
    <br>
    <div id="container">
    <table border="1">
        <thead>
            <tr>
            <td>No.</td>
            <td>Mengubah Data</td>
              <td> Menghapus Data</td>
                <td>NIS</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>   
                <td>Kelas</td> 
    </tr>
    <?php $no = 1; ?>
    <?php
while ( $row = mysqli_fetch_assoc($result)) : 
?>
<tr>
    <td> <?= $no; ?> </td>
    <td><a href=""> ubah </a>
    <td><a href=""> hapus </a>
    <td> <?= $row ["nik"]; ?> </td>
    <td> <?= $row ["nama"]; ?> </td>
    <td> <?= $row ["jk"]; ?> </td>
    <td> <?= $row ["no_rumah"]; ?> </td>
    <td> <?= $row ["jenis_surat"]; ?> </td>
    <td> <?= $row ["no_surat"]; ?> </td>



</tr>
<?php $no++; ?>
<?php endwhile ?>
<?php
?>
</table>
</div>
<script src="scriptajax.js">
</script>
</body>
</html>