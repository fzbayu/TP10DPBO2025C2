<?php
require_once 'view/template/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Posisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Tambah Posisi</h2>
    <form method="post" action="index.php?entity=posisi&action=save">
        <div class="mb-3">
            <label class="form-label">Posisi</label>
            <input type="text" name="nama_posisi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
        <a href="index.php?entity=posisi" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
