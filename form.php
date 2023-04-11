<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form method="post" action="proses.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim"><br>

        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan"><br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>