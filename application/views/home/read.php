    <div class="col-md-10">
      <div class="row">
        <div class="col-md mt-3">
        	<div class="card">
			  <div class="card-header bg-success text-light">
			    <h3><?= $artikel['judul_artikel']; ?></h3>
			  </div>
			  <div class="card-body">
			    <p class="card-text blockquote-footer">Posted by <?= $artikel['nama_user']; ?>, <?= date('d-m-Y', strtotime($artikel['tgl_post'])); ?></p>
			    <div class="row">
			    	<div class="col-md-6">
			    		<img src="<?= base_url('assets/img/berita/') . $artikel['foto_artikel']; ?>" class="img-thumbnail">
			    	</div>
			    	<div class="col-md-6">
			    		<ul class="list-group list-group-flush">
						  <li class="list-group-item"><strong>Title</strong> <i class="fa fa-caret-right" aria-hidden="true"></i> <?= $artikel['judul_artikel']; ?></li>
						  <li class="list-group-item"><strong>Posted By</strong> <i class="fa fa-caret-right" aria-hidden="true"></i> <?= $artikel['nama_user']; ?></li>
						  <li class="list-group-item"><strong>Category</strong> <i class="fa fa-caret-right" aria-hidden="true"></i> <?= $artikel['nama_kategori']; ?></li>
						  <li class="list-group-item"><strong>Date</strong> <i class="fa fa-caret-right" aria-hidden="true"></i> <?= date('d-m-Y', strtotime($artikel['tgl_post'])); ?></li>
						</ul>
			    	</div>
			    </div>
			    <!-- deskripsi -->
			    <h6 class="text-muted mt-3">Description Game <?= $artikel['judul_artikel']; ?></h6>
			    <p class="lead"><?= $artikel['deskripsi_artikel']; ?></p>
			    <!-- /deskripsi -->
			    <!-- profil yang posting -->
			    <div class="card mb-3" style="max-width: 540px;">
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="<?= base_url('assets/img/user/') . $artikel['foto_user']; ?>" class="card-img">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title"><?= $artikel['nama_user']; ?></h5>
				        <p class="card-text"><?= $artikel['email']; ?></p>
				        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				      </div>
				    </div>
				  </div>
				</div>
			    <!-- profil yang posting -->
			  </div>
			</div>
        </div>
      </div> <!-- row -->

    </div> <!-- col-md-10 -->
  </div> <!-- row -->
</div> <!-- container -->

    <!-- AKHIR POST -->




