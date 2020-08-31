<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Change Password <?= $user['nama_user']; ?></h3>
                </div>
                <div class="panel-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form role="form" method="post" action="<?= base_url('auth/change'); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Old Password" name="oldpassword" type="password" autofocus>
                                <small class="muted text-danger"><?= form_error('oldpassword'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="New Password" name="password1" type="password">
                                <small class="muted text-danger"><?= form_error('password1'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="password2" type="password">
                                <small class="muted text-danger"><?= form_error('password2'); ?></small>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Change Password</button>
                            <?php if($this->session->userdata('role_id') == 1) : ?>
                            <a href="<?= base_url('admin/dashboard'); ?>" class="btn btn-danger btn-lg btn-block">Cancel</a>
                            <?php else : ?>
                                
                            <a href="<?= base_url('admin/user'); ?>" class="btn btn-danger btn-lg btn-block">Cancel</a>
                            <?php endif; ?>
                                                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        