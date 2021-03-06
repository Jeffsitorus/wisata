<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
  <div class="container-fluid">
    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
      <li class="nav-item dropdown hidden-caret">
        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
          <div class="avatar-sm">
            <img src="<?= base_url('assets/upload/wisata/' . $wisata['gambar']); ?>" alt="Profil" class="avatar-img rounded-circle">
          </div>
        </a>
        <ul class="dropdown-menu dropdown-user animated fadeIn">
          <div class="dropdown-user-scroll scrollbar-outer">
            <li>
              <div class="user-box">
                <div class="avatar-lg"><img src="<?= base_url('assets/upload/wisata/' . $wisata['gambar']); ?>" alt="Foto profil" class="avatar-img rounded"></div>
                <div class="u-text">
                  <h4><?= ucwords($wisata['nama']); ?></h4>
                  <p class="text-muted"><?= $wisata['email']; ?></p><a href="<?= site_url('welcome') ?>" class="btn btn-xs btn-secondary btn-sm">Lihat Profil</a>
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?= site_url('welcome'); ?>">Profil</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="<?= site_url('welcome/logout'); ?>">Keluar</a>
            </li>
          </div>
        </ul>
      </li>
    </ul>
  </div>
</nav>