<?= view('layout/header') ?>
<?= view('layout/sidebar') ?>

<div class="flex-fill p-4">
  <div class="d-flex justify-content-between align-items-center">
    <div>
      <h3>Dashboard User</h3>
      <p>Hai, <strong><?= esc($username) ?></strong>! Anda login sebagai <strong><?= esc($role) ?></strong>.</p>
      <p>Selamat datang di Skincare Glow. Yuk rawat kulitmu!</p>
    </div>
    <a href="/logout" class="btn btn-outline-secondary">Logout</a>
  </div>

  <hr>

  <h4 class="mt-4 mb-3">Daftar Produk</h4>
  <div class="row">
    <?php foreach ($produk as $p): ?>
      <div class="col-md-4 mb-4">

      <div class="card shadow-sm h-100">
<img src="<?= base_url('images/' . $p['gambar']) ?>" class="card-img-top" alt="<?= $p['nama'] ?>" style="height: 150px; width: 100%; object-fit: contain;">

  <div class="card-body d-flex flex-column">
    <h5 class="card-title"><?= $p['nama'] ?></h5>
    <p class="card-text">Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
    <a href="/user/addToCart/<?= $p['id'] ?>" class="btn btn-pink mt-auto">Tambah ke Keranjang</a>
  </div>
</div>

      </div>
    <?php endforeach ?>
  </div>

  <a href="/user/cart" class="btn btn-outline-dark">Lihat Keranjang</a>
</div>

<?= view('layout/footer') ?>
