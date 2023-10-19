<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "posttest5";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $pesanan = $_POST["pesanan"];

    $sql = "UPDATE tambah SET nama='$nama', pesanan='$pesanan' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil diperbarui.";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Perbarui Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            width: 300px;
            margin: 50 auto;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Perbarui Data</h1>
    <form method="post" action="">
        <label for="id">ID Pengguna:</label>
        <input type="text" name="id" id="id" required>
        
        <label for="nama">Nama Baru:</label>
        <input type="text" name="nama" id="nama" required>
        
        <label for="pesanan">Pesanan Baru:</label>
        <input type="text" name="pesanan" id="pesanan" required>
        
        <button type="submit">Perbarui Data</button>
    </form>
</body>
</html>
