<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Registration</h3>
                </div>
                <div class="panel-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                <small class="muted text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama Lengkap" name="name" type="text">
                                <small class="muted text-danger"><?= form_error('name'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text">
                                <small class="muted text-danger"><?= form_error('username'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password1" type="password">
                                <small class="muted text-danger"><?= form_error('password1'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirm Password" name="password2" type="password">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <a href="<?= base_url('auth'); ?>">Already have an account? login now</a>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Register</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
