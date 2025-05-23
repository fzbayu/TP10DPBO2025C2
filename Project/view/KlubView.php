<?php
require_once 'view/template/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Klub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Data Klub</h2>
    <a href="index.php?entity=klub&action=add" class="btn btn-primary mb-3">+ Tambah Klub</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Benua</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($KlubList as $klub): ?>
                    <tr>
                        <td><?= htmlspecialchars($klub['nama_klub']) ?></td>
                        <td><?= htmlspecialchars($klub['benua_klub']) ?></td>
                        <td>
                            <a href="index.php?entity=klub&action=edit&id=<?= $klub['id_klub'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?entity=klub&action=delete&id=<?= $klub['id_klub'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus klub ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($KlubList)): ?>
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data klub.</td>
                    </tr>
                <?php endif; ?>
            </tbody>    
        </table>
    </div>
</div>

</body>
</html>
