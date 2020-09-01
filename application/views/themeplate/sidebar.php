<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url('assets/themeplate/img/header.png'); ?>"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-4">
        <li class="nav-item active">
          <a class="nav-link" href="<?= base_url(); ?>"><i class="fa fa-home text-dark"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-star-half-alt text-warning"></i> Ratting</a>
        </li>

        <?php if(!$this->session->userdata('role_id')) : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth'); ?>"><i class="fa fa-sign-in-alt"></i> Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth'); ?>"><i class="fa fa-registered"></i> Register</a>
          </li>
        <?php endif; ?>

        <!-- Administrator -->
        <?php if($this->session->userdata('role_id') == 1) : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi, <?= $user['nama_user']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out-alt"></i> Logout</a>
          </div>
        </li>
        <?php endif; ?>
        <!-- /Administrator -->

        <!-- Member -->
        <?php if($this->session->userdata('role_id') == 2) : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Hi, <?= $user['nama_user']; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url('user/dashboard'); ?>"><i class="fa fa-tachometer-alt"></i> Dashboard</a>
            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out-alt"></i> Logout</a>
          </div>
        </li>
        <?php endif; ?>
        <!-- /Member -->
      </ul>
      <form class="form-inline my-2 my-lg-0" action="<?= base_url('home'); ?>" method="post">
        <input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search Game..." autocomplete="off" autofocus="on">
        <input class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit" value="Search">
      </form>
    </div>
  </div>
</nav>

<!-- AKHIR NAVBAR -->

<!-- CATEGORY -->

<div class="container">
  <div class="row">
    <div class="col-md-2">
      <div class="list-group mt-3">
        <h5 class="list-group-item list-group-item-action bg-success text-light">
          Categories
        </h5>
        <?php foreach($kategori as $k) : ?>
        <a href="<?= base_url('home/categori/') . $k['id_kategori']; ?>" class="list-group-item list-group-item-action"><i class="fa fa-tag"></i> <?= $k['nama_kategori']; ?></a>
        <?php endforeach; ?>
      </div>    
    </div>