    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Comments</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $this->session->flashdata('message') ?>
                                    <form action="<?= base_url('admin/komentar'); ?>" method="post">
                                        <div class="input-group" style="margin-bottom: 10px;">
                                          <input type="text" class="form-control" placeholder="cari berita..." name="keyword" autocomplete="off" autofocus="on">
                                          <span class="input-group-btn">
                                            <input class="btn btn-default" name="submit" type="submit" value="Cari">
                                          </span>
                                        </div><!-- /input-group -->
                                    </form>
                                </div>
                            </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                All Comments
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Isi</th>
                                                <th>Status</th>
                                                <th>Judul Artikel</th>
                                                <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; foreach($komentar as $k) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $k['nama_komen']; ?></td>
                                                    <td><?= $k['email_komen']; ?></td>
                                                    <td><?= $k['isi_komen']; ?></td>
                                                    <td>
                                                        <?php if($k['status_komen'] == '0') : ?>
                                                            <button data-toggle="modal" data-target="#komentarModal" class="btn btn-warning tombolSetujuiKomentar btn-sm" data-id="<?= $k['id_komentar']; ?>"><i class="fa fa-spinner"></i></button>
                                                            <?php else : ?>
                                                                <span class="badge badge-success" data-toggle="tooltip" data-placement="top" title="Komentar Sudah Ditampilkan"><i class="fa fa-check-circle"></i></span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td><?= $k['judul_artikel']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('admin/komentar/hapus/') . $k['id_komentar']; ?>" data-toggle="tooltip" data-placement="top" title="Hapus Komentar" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ?')"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="komentarModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Persetujuan Komentar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/komentar/status'); ?>" method="post">
            <input type="hidden" name="id_komentar" id="id_komentar">
            <div class="form-group">
                <label for="status">Setujui ?</label>
                <div class="alert alert-warning" role="alert">Apakah anda ingin menampilkan komentar ini di dalam artikel ?</div>
                <select name="status" id="status" class="form-control">
                <option value=""> -- Pilih --</option>
                <option value="1">Tampilkan Komentar</option>
                <option value="0">Belum Ditampilkan</option>
                </select>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
        </form>
      </div>
    </div>
  </div>
</div>