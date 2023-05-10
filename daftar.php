<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['namawarga'])) {
    
}

if (isset($_POST['submit'])) {
    $namawarga = $_POST['namawarga'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM daftar_akun_warga WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO daftar_akun_warga (namawarga, email, password)
                    VALUES ('$namawarga', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: berhasil_daftar.php");
                $namawarga = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Daftar | Surat Online RT 07</title>
</head>

<body class="body">
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Daftar</p>
            <div class="input-group">
                <input type="text" placeholder="Nama Lengkap Warga" name="namawarga" autocomplete="off" value="<?php echo $namawarga; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" autocomplete="off" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" autocomplete="off" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" autocomplete="off" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Sudah punya akun? <a href="index.php">Login </a></p>
        </form>
    </div>
</body>

</html>