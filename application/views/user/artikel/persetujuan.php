<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Artikel Menunggu Persetujuan</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Artikel Belum Di Setujui Postingan <?= $user['nama_user']; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori</th>
                                            <th>Di Post</th>
                                            <th>Tanggal</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1; foreach($persetujuan as $a) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $a['judul_artikel']; ?></td>
                                            <td><?= substr($a['deskripsi_artikel'], 0,100); ?> ...</td>
                                            <td><?= $a['nama_kategori']; ?></td>
                                            <td><?= $a['nama_user']; ?></td>
                                            <td><?= date('d-m-Y', strtotime($a['tgl_post'])); ?></td>
                                            <td>
                                                <img src="<?= base_url('assets/img/berita/') . $a['foto_artikel']; ?>" width="80">
                                            </td>
                                            <td>
                                                <?php if($a['status_artikel'] == '0') : ?>
                                                <a href="<?= base_url('user/artikel/review/') . $a['id_artikel']; ?>" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Belum Dipublikasikan"><i class="fa fa-eye fa-fw"></i></a>
                                                
                                                <?php else : ?>
                                                    <a href="<?= base_url('user/artikel/review/') . $a['id_artikel']; ?>" target="_blank" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Sudah Dipublikasikan"><i class="fa fa-eye fa-fw"></i></a>
                                                <?php endif; ?>
                                                <a href="<?= base_url('user/artikel/hapus/') . $a['id_artikel']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                    <?php if(empty($persetujuan)) : ?>
                                        <div class="alert alert-danger" role="alert">Data tidak ditemukan.</div>
                                    <?php endif; ?>
                            </div>
                            <!-- /.table-responsive -->
                            
                        <?= $this->pagination->create_links(); ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_artike" id="id_artikel">
            <div class="form-group">
                <label for="judul">Judul Berita</label>
                <input type="text" name="judul" id="judul" class="form-control">
                <small class="muted text-danger"><?= form_error('judul'); ?></small>
            </div>
            <div class="form-group">
                <label for="deskripsi">Isi Berita</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                <small class="muted text-danger"><?= form_error('deskripsi'); ?></small>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    <?php foreach($kategori as $k) : ?>
                        <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                    <?php endforeach; ?>
                </select>
                <small class="muted text-danger"><?= form_error('kategori'); ?></small>
            </div>
            <div class="form-group">
                <label for="foto">foto Berita</label><br>
                <img src="" width="80" id="tampilFoto">
                <input type="hidden" name="fotoLama" id="fotoLama">
                <input type="file" name="foto" id="foto" class="form-control-file">
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>