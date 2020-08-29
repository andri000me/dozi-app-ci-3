    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Article</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary tombolTambahArtikel" data-toggle="modal" data-target="#formModal">Tambah Data Artikel</button>
                                    <?= $this->session->flashdata('message') ?>
                                    <form action="<?= base_url('admin/artikel'); ?>" method="post">
                                        <div class="input-group">
                                          <input type="text" class="form-control" placeholder="cari berita..." name="keyword">
                                          <span class="input-group-btn">
                                            <input class="btn btn-default" name="submit" type="submit" value="Cari" autocomplete="off" autofocus="on">
                                          </span>
                                        </div><!-- /input-group -->
                                    </form>
                                </div>
                            </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Article
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <h6>Total <?= $total_rows; ?> Artikel</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Di Post</th>
                                                <th>Tanggal</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($artikel as $a) : ?>
                                                <tr>
                                                    <td><?= ++$start; ?></td>
                                                    <td><?= $a['judul_artikel']; ?></td>
                                                    <td><?= $a['deskripsi_artikel']; ?></td>
                                                    <td><?= $a['nama_kategori']; ?></td>
                                                    <td>
                                                        <?php if($a['status_artikel'] == '0') : ?>
                                                            <span class="badge badge-warning">Menuggu Review</span>
                                                            <?php else: ?>
                                                                <a href="" class="btn btn-primary" target="_blank"><i class="fa fa-eye"></i></a>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?= $a['nama_user']; ?></td>
                                                    <td><?= $a['tgl_post']; ?></td>
                                                    <td>
                                                        <img src="<?= base_url('assets/img/berita/') . $a['foto_artikel']; ?>" width="80">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info tombolUbahArtikel" data-toggle="modal" data-target="#formModal" data-id="<?= $a['id_artikel']; ?>"><i class="fa fa-edit"></i></button>
                                                        <a href="<?= base_url('admin/artikel/hapus/') . $a['id_artikel']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ?')"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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
            <input type="text" name="id_artike" id="id_artikel">
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
                <input type="text" name="fotoLama" id="fotoLama">
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