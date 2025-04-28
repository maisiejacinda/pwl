<div class="sidebar vh-100 p-3">
  <h5 class="text-center text-pink">Skincare Glow</h5>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a class="nav-link <?= (uri_string() === session()->get('role')) ? 'active' : '' ?>"
         href="/<?= session()->get('role') ?>">
        Dashboard
      </a>
    </li>
    <li class="nav-item mt-2">
      <a class="nav-link text-danger" href="/logout">Logout</a>
    </li>
  </ul>
</div>
