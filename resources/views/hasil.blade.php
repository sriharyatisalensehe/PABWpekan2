<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Laporan</title>

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

        p {
            margin: 15px 0;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Konfirmasi Laporan Banjir</h2>

    <p>
        <strong>Nama Pelapor:</strong>
        {{ $nama }}
    </p>

    <p>
        <strong>Lokasi Kejadian:</strong>
        {{ $lokasi }}
    </p>

    <p>
        <strong>Tinggi Genangan:</strong>
        {{ $tinggi }}
    </p>

    <p>Laporan berhasil diproses.</p>

    <a href="/form">Kembali ke Form</a>

</div>

</body>
</html>