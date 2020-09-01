    <div class="col-md-10">
      <div class="row">
        <div class="col-md mt-3">
        	<?= $this->session->flashdata('message'); ?>
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

      <!-- Komentar -->
      <div class="card mt-4">
      	<div class="card-header">
      		<h5>Komentar</h5>
      	</div>
      	<div class="card-body">
      		<form action="<?= base_url('admin/komentar/send'); ?>" method="post">
      			<input type="hidden" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
	      		<div class="row">
	      			<div class="col-md-6">
	      				<div class="form-group">
	      					<label for="nama">Name</label>
	      					<input type="text" name="nama" id="nama" placeholder="full name" class="form-control">
	      				</div>
	      			</div>
	      			<div class="col-md-6">
	      				<div class="form-group">
	      					<label for="email">Email</label>
	      					<input type="text" name="email" id="email" class="form-control" placeholder="email address">
	      				</div>
	      			</div>
	      		</div>
	      		<div class="row">
	      			<div class="col-md">
	      				<div class="form-group">
	      					<label for="komentar">Comment</label>
	      					<textarea name="komentar" id="komentar" class="form-control"></textarea>
	      				</div>
	      				<div class="form-group">
	      					<button type="submit" class="btn btn-success">Send</button>
	      				</div>
	      			</div>
	      		</div>
	      	</form>

	      	<!-- Menampilkan Pesan -->
	      	<hr>
	      	<div class="row">
	      		<div class="col-md">
	      		<?php foreach($komentar as $k) : ?>
	      			<div class="media">
	      				<div class="card w-100 mb-2">
	      					<div class="card-body">
							  	<div class="media-body">
							    <h5 class="mt-0 mb-1"><?= $k['nama_komen']; ?></h5>
							    <?= $k['isi_komen']; ?>
							  	</div>
	      						<button type="button" class="btn btn-success tombolReply" data-toggle="modal" data-target="#replyModal">Reply</button>
	      					</div>
	      				</div>
					</div>
				<?php endforeach; ?>
	      		</div>
	      	</div>
	      	<!-- /Menampilkan Pesan -->
      	</div>
      </div>
      <!-- Komentar -->

    </div> <!-- col-md-10 -->
  </div> <!-- row -->
</div> <!-- container -->

    <!-- AKHIR POST -->



<!-- Modal -->
<div class="modal fade" id="replyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reply Comment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/komentar/reply') ?>" method="post">
        	<input type="hidden" name="id_artikel" value="<?= $artikel['id_artikel']; ?>">
        	<div class="form-group">
        		<label for="nama">Name</label>
        		<input type="text" name="nama" id="nama" placeholder="full name" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="email">Email</label>
        		<input type="email" name="email" id="email" placeholder="email address" class="form-control">
        	</div>
        	<div class="form-group">
        		<label for="komentar">Comment</label>
        		<textarea name="komentar" id="komentar" class="form-control"></textarea>
        	</div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save changes</button>
	      </div>
        </form>
      </div>
    </div>
  </div>
</div>
