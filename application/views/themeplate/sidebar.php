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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><i class="fab fa-facebook text-primary"></i> Facebook</a>
            <a class="dropdown-item" href="#"><i class="fab fa-instagram text-dark"></i> Instagram</a>
            <a class="dropdown-item" href="#"><i class="fab fa-whatsapp text-success"></i> Whatsapp</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-youtube text-danger"></i> Youtube</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search Game..." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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
        <a href="<?= base_url('home/categori/') . $k['id_kategori']; ?>" class="list-group-item list-group-item-action"><?= $k['nama_kategori']; ?></a>
        <?php endforeach; ?>
      </div>    
    </div>