<?php
require_once 'view/template/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Tambah Pemain</h2>
    <form method="post" action="index.php?entity=pemain&action=save">
        <div class="mb-3">
            <label class="form-label">Nama Pemain</label>
            <input type="text" name="nama_pemain" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Asal Negara</label>
            <input type="text" name="asal_negara" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Usia</label>
            <input type="number" name="usia" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Posisi</label>
            <select name="id_posisi" class="form-select" required>
                <?php foreach ($posisi as $p): ?>
                    <option value="<?= $p['id_posisi'] ?>"><?= $p['nama_posisi'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Klub</label>
            <select name="id_klub" class="form-select" required>
                <?php foreach ($klub as $k): ?>
                    <option value="<?= $k['id_klub'] ?>"><?= $k['nama_klub'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Harga Pasar</label>
            <input type="number" name="harga_pasar" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php?entity=pemain" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
