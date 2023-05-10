<form method="post" action="proses.php">
    <input type="text" name="nama" placeholder="Nama Anda" onkeyup="checkForm()">
    <button type="submit" id="submit-btn" disabled>Kirim</button>
</form>

<script>
    const submitBtn = document.getElementById('submit-btn');
    const namaInput = document.getElementsByName('nama')[0];

    function checkForm() {
        // Memeriksa apakah input nama telah diisi
        if (namaInput.value.length > 0) {
            // Mengaktifkan tombol submit
            submitBtn.removeAttribute('disabled');
        } else {
            // Menonaktifkan tombol submit
            submitBtn.setAttribute('disabled', true);
        }
    }
</script>