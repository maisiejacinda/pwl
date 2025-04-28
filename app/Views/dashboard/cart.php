<?= view('layout/header') ?>
<?= view('layout/sidebar') ?>

<div class="flex-fill p-4">
  <h2>Keranjang Kamu</h2>
  <?php if (empty($cart)): ?>
    <p>Keranjang kosong.</p>
  <?php else: ?>
    <ul class="list-group">
      <?php foreach ($cart as $item): ?>
        <li class="list-group-item d-flex justify-content-between">
          <?= $item['nama'] ?>
          <span>Rp <?= number_format($item['harga'], 0, ',', '.') ?></span>
        </li>
      <?php endforeach ?>
    </ul>
    <p class="mt-3 fw-bold">Total: Rp <?= number_format(array_sum(array_column($cart, 'harga')), 0, ',', '.') ?></p>
  <?php endif ?>
  <a href="/user" class="btn btn-pink mt-3">Kembali</a>
</div>

<?= view('layout/footer') ?>
