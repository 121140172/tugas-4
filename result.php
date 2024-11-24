<?php
session_start();
if (!isset($_SESSION["formData"])) {
    die("Data tidak ditemukan. Silakan kembali ke form.");
}

$data = $_SESSION["formData"];
$fileContent = $_SESSION["fileContent"] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <style>
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Hasil Pendaftaran</h1>
    <table>
        <tr><th>Field</th><th>Data</th></tr>
        <tr><td>Nama</td><td><?= htmlspecialchars($data["name"]) ?></td></tr>
        <tr><td>Tanggal Lahir</td><td><?= htmlspecialchars($data["birthdate"]) ?></td></tr>
        <tr><td>Jenis Kelamin</td><td><?= htmlspecialchars($data["gender"]) ?></td></tr>
        <tr><td>Alamat</td><td><?= htmlspecialchars($data["address"]) ?></td></tr>
        <tr><td>Pekerjaan</td><td><?= htmlspecialchars($data["job"]) ?></td></tr>
    </table>

    <h2>Isi File</h2>
    <table>
        <?php foreach ($fileContent as $index => $line): ?>
            <tr><td>Baris <?= $index + 1 ?></td><td><?= htmlspecialchars($line) ?></td></tr>
        <?php endforeach; ?>
    </table>

    <h2>Informasi Browser</h2>
    <table>
        <tr><td>Browser</td><td><?= $_SERVER["HTTP_USER_AGENT"] ?></td></tr>
        <tr><td>IP Address</td><td><?= $_SERVER["REMOTE_ADDR"] ?></td></tr>
    </table>
</body>
</html>
