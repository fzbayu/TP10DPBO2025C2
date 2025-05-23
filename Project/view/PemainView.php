<?php
require_once 'view/template/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Pemain Bola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    

<div class="container mt-5">
    <h2 class="mb-4">Data Pemain Bola</h2>
    <a href="index.php?entity=pemain&action=add" class="btn btn-primary mb-3">+ Tambah Pemain</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover bg-white">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Negara</th>
                    <th>Usia</th>
                    <th>Posisi</th>
                    <th>Klub</th>
                    <th>Harga Pasar (EURO)</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($PemainList as $pemain): ?>
                    <tr>
                        <td><?= htmlspecialchars($pemain['nama_pemain']) ?></td>
                        <td><?= htmlspecialchars($pemain['asal_negara']) ?></td>
                        <td><?= $pemain['usia'] ?></td>
                        <td><?= htmlspecialchars($pemain['nama_posisi']) ?></td>
                        <td><?= htmlspecialchars($pemain['nama_klub']) ?></td>
                        <td>€ <?= '&nbsp;' . number_format($pemain['harga_pasar'], 2, ',', '.') ?></td>
                        <td>
                            <a href="index.php?entity=pemain&action=edit&id=<?= $pemain['id_pemain'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="index.php?entity=pemain&action=delete&id=<?= $pemain['id_pemain'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus pemain ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php if (empty($PemainList)): ?>
                    <tr>
                        <td colspan="7" class="text-center">Tidak ada data pemain.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
