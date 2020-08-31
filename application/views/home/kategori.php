    <div class="col-md-10">
       <!-- POSTING -->
      <h4 class="mt-4 font-weight-bold text-center text-black-50">Catagory <?= $judulkategori['nama_kategori']; ?></h4>
      <hr>
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

    </div> <!-- col-md-10 -->
  </div> <!-- row -->
</div> <!-- container -->

    <!-- AKHIR POST -->




