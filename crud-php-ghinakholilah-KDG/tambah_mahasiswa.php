<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambahan Data Mahasiswa</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>
        <label>NIM:</label>
        <input type="text" name="nim" required><br>
        <label>Email: </label>
        <input type="text" name="email" required><br>
        <label>Nomor:</label>
        <input type="text" name="nomor" required><br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br>
      
        <input type="submit" value="Tambahan">

    </form>
</body>
</html>