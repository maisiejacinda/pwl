<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kategori</title>
</head>
<body>
    <h1>Ini adalah halaman kategori</h1> 

    <ul>
        <li><a href="<?= base_url('kategori/Alat Tulis') ?>">Alat Tulis</a></li>
        <li><a href="<?= base_url('kategori/Pakaian') ?>">Pakaian</a></li>
        <li><a href="<?= base_url('kategori/Peralatan') ?>">Peralatan</a></li>
        <li><a href="<?= base_url('kategori/Elektronik') ?>">Elektronik</a></li>
        <li><a href="<?= base_url('kategori/Snack') ?>">Snack</a></li>
    </ul>

    <?php if (!is_null($kategori)): ?> 
        <h2>Rincian Kategori: <?= esc($kategori) ?></h2> 

        <ul>
            <?php if ($produk): ?> 
                <?php foreach ($produk as $item): ?>
                    <li><?= esc($item) ?></li>
                <?php endforeach; ?>
            <?php else: ?> 
                <p>Tidak ada data untuk kategori ini.</p> 
            <?php endif; ?>
        </ul>
    <?php endif; ?>

</body>
</html>
