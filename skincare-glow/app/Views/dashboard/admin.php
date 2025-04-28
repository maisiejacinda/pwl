<?= view('layout/header') ?>
<?= view('layout/sidebar') ?>

<div class="flex-fill p-4">
  <div class="d-flex justify-content-between align-items-center">
    <div>
      <h3>Dashboard Admin</h3>
      <p>Halo, <strong><?= esc($username) ?></strong>! Anda login sebagai <strong><?= esc($role) ?></strong>.</p>
    </div>
    <a href="/logout" class="btn btn-outline-secondary">Logout</a>
  </div>

  <hr>

  <h4 class="mt-4 mb-3">Daftar User</h4>
  <table class="table table-striped">
    <thead class="table-pink">
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>admin</td>
        <td>admin</td>
      </tr>
      <tr>
        <td>2</td>
        <td>user</td>
        <td>user</td>
      </tr>
    </tbody>
  </table>

  <h4 class="mt-5 mb-3">Daftar Produk</h4>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="<?= base_url('images/serum.png') ?>" class="card-img-top" style="height: 150px; object-fit: contain;">
        <div class="card-body">
          <h5 class="card-title">Glow Serum</h5>
          <p class="card-text">Rp 80.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="<?= base_url('images/toner.png') ?>" class="card-img-top" style="height: 150px; object-fit: contain;">
        <div class="card-body">
          <h5 class="card-title">Pink Toner</h5>
          <p class="card-text">Rp 65.000</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm h-100">
        <img src="<?= base_url('images/cleanser.jpg') ?>" class="card-img-top" style="height: 150px; object-fit: contain;">
        <div class="card-body">
          <h5 class="card-title">Soft Cleanser</h5>
          <p class="card-text">Rp 50.000</p>
        </div>
      </div>
    </div>
  </div>

</div>

<?= view('layout/footer') ?>
