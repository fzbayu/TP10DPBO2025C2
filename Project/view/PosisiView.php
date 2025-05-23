<?php
require_once 'view/template/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Posisi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Data Posisi</h2>
    <a href="index.php?entity=posisi&action=add" class="btn btn-primary mb-3">+ Tambah Posisi</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Posisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($PosisiList as $posisi): ?>
                    <tr>
                        <td><?= htmlspecialchars($posisi['nama_posisi']) ?></td>
                        <td>
                            <a href="index.php?entity=posisi&action=edit&id=<?= $posisi['id_posisi'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?entity=posisi&action=delete&id=<?= $posisi['id_posisi'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus posisi ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($PosisiList)): ?>   
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data posisi.</td>
                    </tr>
                <?php endif; ?>
            </tbody>    
        </table>
    </div>
</div>

</body>
</html>
