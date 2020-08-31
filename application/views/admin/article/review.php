<div class="container">
	<div class="row">
		<h2 class="text-center" style="margin-bottom: 30px;"><?= $artikel['judul_artikel']; ?></h2>
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
					<label for="kategori">kategori Artikel</label>
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
				<label for="status">Terbitkan ?</label>
				<select name="status" id="status" class="form-control">
					<option value="">-- Pilih --</option>
					<option value="1">Ya</option>
					<option value="0">Tidak</option>
					<small class="muted text-danger"><?= form_error('status'); ?></small>
				</select>
			</div>
		</div>
		<div class="col-md-2">
				<div class="form-group">
					<label for="foto">Foto</label><br>
					<img src="<?= base_url('assets/img/berita/') . $artikel['foto_artikel']; ?>" width="80">
					<input type="file" name="foto" id="foto" class="form-control-file">
					<input type="hidden" name="fotoLama" id="fotoLama" value="<?= $artikel['foto_artikel']; ?>" class="form-control-file">
				</div>
		</div>
		<div class="col-md-2">
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Publikasikan</button>
					<a href="<?= base_url('admin/artikel'); ?>" class="btn btn-default">Batal</a>
				</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md">
			<textarea name="deskripsi" id="editor1"><?= $artikel['deskripsi_artikel']; ?></textarea>
		</div>
		</form>
	</div>
</div>