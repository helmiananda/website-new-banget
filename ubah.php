<?php
require 'function.php';


//ambil data di url

$id = $_GET["id"];

// query data siswa berdasarkan id
$input_data_surat = query("SELECT * FROM input_data_surat WHERE id = $id")[0];


// mengecek tombol submit apakah sudah di pencet apa belom
if (isset($_POST["submit"])) {


    // mengecek apakah data berhasil ditambahkan atau tidak

    if (ubah($_POST) > 0) {
    } else {
    }
}
?>
<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data | Surat Online RT. 07</title>
    <link rel="stylesheet" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">
    <title>
        Input Data Surat
    </title>
</head>

<body>
    <nav class="background">
        <div class="wrapper">
            <div class="logo">
                Surat Online RT. 07</div>
            <div class="menu">
                <ul>
                    <li class="hover"><a href="admin.php"> Data Pengisi Surat</a></li>

                    <li><a href="logout-admin.php" class="btn-pink">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="margin">
            <div class="kolom">

                <h1> Ubah Data </h1>
                <br>
                <form action="" method="post">
                    <table border="0">
                        <tr>
                            <th width="300px"></th>
                            <th width="1000px"> </th>
                            <th width="100px">
                            </th>
                        </tr>
                        <input type="hidden" name="id" value="<?= $input_data_surat["id"]; ?> ">
                        <tr>
                            <td height="50px"> <label for="">NIK</label>
                            </td>
                            <td> : <input type="text" class="input" name="nik" id="nik" required value="<?= $input_data_surat["nik"]; ?> ">

                        </tr>

                        <tr>
                            <td height="50px"> <label for="">Nama</label>
                            </td>
                            <td> : <input type="text" class="input" name="nama" id="nama" required value="<?= $input_data_surat["nama"]; ?>">
                        </tr>

                        <tr>
                            <td height="50px"> <label for="">Jenis Kelamin</label>
                            </td>
                            <td> : <input type="text" class="input" name="jk" id="jk" required value="<?= $input_data_surat["jk"]; ?>">
                        </tr>

                        <tr>
                            <td height="50px"> <label for="">Nomor Rumah</label>
                            </td>
                            <td> : <input type="text" class="input" name="no_rumah" id="no_rumah" required value="<?= $input_data_surat["no_rumah"]; ?>">
                        </tr>

                        <tr>
                            <td height="50px"> <label for="">Jenis Surat</label>
                            </td>
                            <td> : <input type="text" class="input" name="jenis_surat" id="jenis_surat" required value="<?= $input_data_surat["jenis_surat"]; ?>">
                        </tr>

                        <tr>
                            <td height="50px"> <label for=""> No Surat</label>
                            </td>
                            <td> : <input type="text" class="input" name="no_surat" id="no_surat" required value="<?= $input_data_surat["no_surat_keterangan"], $input_data_surat["no_surat_pengantar"], $input_data_surat["no_surat_keterangan_berdomisili"]; ?>">
                        </tr>

                        <tr>
                            <td></td>
                            <td> <button type="submit" name="submit" class="button-submit-ubahdata"> Ubah data anda !</button> </td>

                        </tr>


                </form>

</body>



</html>