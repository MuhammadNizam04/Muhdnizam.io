<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
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

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            text-decoration: none;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Tambah Data</h1>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        
        <label for="pesanan">Pesanan:</label>
        <input type="text" name="pesanan" id="pesanan" required>
        
        <button type="submit">Tambahkan Data</button>
    </form>

    <div class="button-container">
        <a href="read.php">Lihat Data</a>
        <a href="update.php">Update Data</a>
        <a href="delete.php">Hapus Data</a>
    </div>
</body>
</html>
