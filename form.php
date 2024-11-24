<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }
        .error {
            color: red;
            font-size: 0.9em;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f5;
        }
    </style>
</head>
<body>
    <h1>Form Pendaftaran</h1>
    <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
        <label for="name">Nama Lengkap</label>
        <input type="text" id="name" name="name" required>
        <div class="error" id="errorName"></div>

        <label for="birthdate">Tanggal Lahir</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <div class="error" id="errorBirthdate"></div>

        <label for="gender">Jenis Kelamin</label>
        <select id="gender" name="gender" required>
            <option value="">Pilih</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <div class="error" id="errorGender"></div>

        <label for="address">Alamat</label>
        <textarea id="address" name="address" rows="3" required></textarea>
        <div class="error" id="errorAddress"></div>

        <label for="job">Pekerjaan</label>
        <input type="text" id="job" name="job" required>
        <div class="error" id="errorJob"></div>

        <label for="file">Unggah File (Format .txt)</label>
        <input type="file" id="file" name="file" accept=".txt" required>
        <div class="error" id="errorFile"></div>

        <button type="submit">Kirim</button>
    </form>
    <script src="validation.js"></script>
</body>
</html>
