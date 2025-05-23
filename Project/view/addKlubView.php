<?php
require_once 'view/template/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Klub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Tambah Klub</h2>
    <form method="post" action="index.php?entity=klub&action=save">
        <div class="mb-3">
            <label class="form-label">Nama Klub</label>
            <input type="text" name="nama_klub" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Benua Klub</label>
            <input type="text" name="benua_klub" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
        <a href="index.php?entity=klub" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>
