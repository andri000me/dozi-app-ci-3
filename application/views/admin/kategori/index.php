    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Kategori</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" style="margin-bottom: 10px;" class="btn btn-primary tombolTambahKategori" data-toggle="modal" data-target="#formModal">Tambah Data Kategori</button>
                                    <?= $this->session->flashdata('message') ?>
                                    <form action="<?= base_url('admin/kategori'); ?>" method="post">
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
                                All Kategori
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <h6>Total <?= $total_rows; ?> Kategori</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kategori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($kategori as $k) : ?>
                                                <tr>
                                                    <td><?= ++$start; ?></td>
                                                    <td><?= $k['nama_kategori']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-info tombolUbahKategori" data-toggle="modal" data-target="#formModal" data-id="<?= $k['id_kategori']; ?>"><i class="fa fa-edit"></i></button>
                                                        <a href="<?= base_url('admin/kategori/hapus/') . $k['id_kategori']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ?')"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <input type="hidden" name="id_kategori" id="id_kategori">
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control">
                <small class="muted text-danger"><?= form_error('kategori'); ?></small>
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