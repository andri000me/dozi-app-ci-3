<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                <small class="muted text-danger"><?= form_error('username'); ?></small>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                                <small class="muted text-danger"><?= form_error('password'); ?></small>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        