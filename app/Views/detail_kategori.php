<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori - <?= esc($kategori) ?></title> <!-- Menampilkan judul halaman berdasarkan kategori -->
</head>
<body>
    <h1>Kategori: <?= esc($kategori) ?></h1> <!-- Menampilkan nama kategori yang dipilih -->
    
    <ul>
        <?php if (!empty($produk)): ?> 
            <?php foreach ($produk as $item): ?> 
                <li><?= esc($item) ?></li> <!-- Menampilkan daftar produk dari kategori -->
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada produk dalam kategori ini.</p> <!-- Menampilkan pesan jika tidak ada produk -->
        <?php endif; ?>
    </ul>

    <!-- Tautan untuk kembali ke halaman daftar kategori -->
    <a href="<?= base_url('kategori') ?>">Kembali ke daftar kategori</a>
</body>
</html>
