<!DOCTYPE html>
<html>
<head>
    <title>LaporBanjir</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6f8;
            margin: 0;
            padding: 40px;
        }

        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h2 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>LaporBanjir</h2>

    <form action="/proses" method="POST">

        @csrf

        <label>Nama Pelapor</label>
        <input type="text" name="nama" required>

        <label>Lokasi Kejadian</label>
        <input type="text" name="lokasi" placeholder="Kecamatan / Desa" required>

        <label>Tinggi Genangan Air</label>
        <input type="text" name="tinggi" placeholder="Contoh: 50 cm" required>

        <button type="submit">Kirim Laporan</button>

    </form>

</div>

</body>
</html>