


  <!-- Corosel -->
    <div class="col-md-10">
      <?php if(!$this->input->post('submit')) : ?>
      <div id="carouselExampleControls" class="carousel slide mt-3" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('assets/themeplate/img/arti-thumb-2.jpg'); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/themeplate/img/arti-thumb-3.jpg'); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/themeplate/img/arti-thumb-1.jpg'); ?>" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <?php endif; ?>
    <!-- /Corosel -->  

       <!-- POST -->
       <?php if($this->input->post('submit')) : ?>
         <h4 class="mt-4 font-weight-bold text-center text-black-50">Search <?= set_value('keyword'); ?></h4>
        <?php else : ?>
      <h4 class="mt-4 font-weight-bold text-center text-black-50">All Game Mod</h4>
       <?php endif; ?>
        <?php if(empty($artikel)) : ?>
          <div class="alert alert-danger text-center" role="alert">Search not found.</div>
        <?php endif; ?>
      <div class="row">
        <?php foreach($artikel as $a) : ?>
        <div class="col-md-4">
          <div class="card ml-4 mt-4" style="width: 16rem;">
            <img src="<?= base_url('assets/img/berita/') . $a['foto_artikel']; ?>" class="card-img-top" alt="...">
              <a href="<?= base_url('home/categori/') . $a['id_kategori']; ?>" class="badge badge-success"><?= $a['nama_kategori']; ?></a>
              <p class="blockquote-footer mb-0">Posted by <?= $a['nama_user']; ?> | <?= date('d-m-Y', strtotime($a['tgl_post'])); ?></p>
            <div class="card-body bg-light">
              <h6 class="card-title"><?= $a['judul_artikel']; ?></h6>
              <p class="card-text"><?= substr($a['deskripsi_artikel'], 0,80); ?> ...</p>
            <a href="<?= base_url('artikel/read/') . $a['id_artikel']; ?>" class="btn btn-success">Read More</a>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div> <!-- row -->
      <!-- Pagination -->
      <div class="row">
        <div class="col-md-4 offset-md-5">
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>
      <!-- Pagination -->

    </div> <!-- col-md-10 -->
  </div> <!-- row -->
</div> <!-- container -->

    <!-- AKHIR POST -->

