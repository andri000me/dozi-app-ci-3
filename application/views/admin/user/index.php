    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All User</h1>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" style="margin-bottom: 10px;" class="btn btn-primary tombolTambahUser" data-toggle="modal" data-target="#formModal">Tambah Data User</button>
                                    <?= $this->session->flashdata('message') ?>
                                    <form action="<?= base_url('admin/user'); ?>" method="post">
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
                                All User
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <h6>Total <?= $total_rows; ?> User</h6>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(empty($users)) : ?>
                                                <div class="alert alert-success" role="alert"><i class="fa fa-info-circle"></i> User yang dicari tidak ada.</div>
                                            <?php endif; ?>
                                            <?php foreach($users as $u) : ?>
                                                <tr>
                                                    <td><?= ++$start; ?></td>
                                                    <td><?= $u['email']; ?></td>
                                                    <td><?= $u['username']; ?></td>
                                                    <td><?= $u['nama_user']; ?></td>
                                                    <td>
                                                        <img src="<?= base_url('assets/img/user/') . $u['foto_user']; ?>" alt="" width="80">
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-info tombolUbahUser" data-toggle="modal" data-target="#formModal" data-id="<?= $u['id_user']; ?>"><i class="fa fa-edit"></i></button>
                                                        <a href="<?= base_url('admin/user/hapus/') . $u['id_user']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ?')"><i class="fa fa-trash"></i></a>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_user" id="id_user">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
                <small class="muted text-danger"><?= form_error('email'); ?></small>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
                <small class="muted text-danger"><?= form_error('username'); ?></small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <small class="muted text-danger"><?= form_error('password'); ?></small>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control">
                <small class="muted text-danger"><?= form_error('nama'); ?></small>
            </div>
            <div class="form-group">
                <label for="foto">foto</label><br>
                <img src="" id="tampilFoto" width="80">
                <input type="file" name="foto" id="foto" class="form-control-file">
                <input type="hidden" name="fotoLama" id="fotoLama">
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