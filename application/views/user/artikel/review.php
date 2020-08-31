<div class="container">
	<div class="row" style="margin-top: 10px;">
		<h2 class="text-center">Ubah Artikel <?= $artikel['judul_artikel']; ?></h2>
		<div class="col-md-2">
			<form method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label for="judul">Judul Artikel</label>
					<input type="text" name="judul" id="judul" class="form-control" value="<?= $artikel['judul_artikel']; ?>">
					<small class="muted text-danger"><?= form_error('judul'); ?></small>
				</div>
		</div>
		<div class="col-md-2">
				<div class="form-group">
					<label for="kategori">Kategori Artikel</label>
					<select name="kategori" id="kategori" class="form-control">
						<option value="">-- Pilih Kategori --</option>
						<?php foreach($kategori as $k) : ?>
							<?php if($k['id_kategori'] == $artikel['id_kategori']) : ?>
                        <option value="<?= $k['id_kategori']; ?>" selected><?= $k['nama_kategori']; ?></option>
                            <?php else : ?>
                            	<option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                            <?php endif; ?>
						<?php endforeach; ?>
					</select>
					<small class="muted text-danger"><?= form_error('kategori'); ?></small>
				</div>
		</div>
		<div class="col-md-2">
				<div class="form-group">
					<label for="foto">Foto</label><br>
					<img src="<?= base_url('assets/img/berita/') . $artikel['foto_artikel']; ?>" width="80" style="display: block;">
					<input type="file" name="foto" id="foto" class="form-control-file">
					<input type="hidden" name="fotoLama" id="fotoLama" value="<?= $artikel['foto_artikel']; ?>" class="form-control-file">
				</div>
		</div>
		<div class="col-md-2">
				<div class="form-group" style="margin-top: 27px;">
					<button type="submit" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Simpan Perubahan">Simpan</button>
					<a href="<?= base_url('user/artikel'); ?>" class="btn btn-default">Batal</a>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<?php if($artikel['status_artikel'] == '0') : ?>
				<div class="alert alert-info" role="alert"><i class="fa fa-info-circle fa-fw"></i> <strong>Sedang direview oleh admin.</strong> anda bisa mengedit beberapa kata, tetapi tidak disarankan dan pastikan sudah benar sebelum membuat postingan.</div>
				<?php else: ?>
					<div class="alert alert-success"><i class="fa fa-info-circle fa-fw"></i><strong>Sudah Di Publikasan.</strong> Anda bisa mengubah isi artikel.</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md">
			<textarea name="deskripsi" id="editor1"><?= $artikel['deskripsi_artikel']; ?></textarea>
		</div>
		</form>
	</div>
	<div class="row">
		<div class="col-md" style="margin-top: 50px;">
			<div class="panel panel-default">
			  	<div class="panel-heading"><?= $artikel['judul_artikel']; ?></div>
			  	<div class="panel-body">
			    <?= $artikel['deskripsi_artikel']; ?>
			  	</div>
			</div>
		</div>
	</div>
</div>