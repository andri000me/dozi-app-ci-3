<body>

<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?= base_url(); ?>">Dozi APK</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">
        <li class="dropdown navbar-inverse">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i><b data-toggle="tooltip" data-placement="bottom" title="<?= $statusartikel; ?> Artikel Menunggu Persetujuan." class="text-danger"><?= $statusartikel; ?></b> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <?php if($this->session->userdata('role_id') == 1) : ?>
                <li>
                    <a href="<?= base_url('admin/artikel/persetujuan'); ?>">
                        <div>
                            <i class="fa fa-list fa-fw"></i> Menunggu Persetujuan
                            <span class="pull-right text-muted small"><?= $statusartikel; ?> Artikel</span>
                        </div>
                    </a>
                </li>
                <?php endif; ?>
                <?php if($this->session->userdata('role_id') == 2) : ?>
                <li>
                    <a href="<?= base_url('user/artikel/persetujuan'); ?>">
                        <div>
                            <i class="fa fa-list fa-fw"></i> Menunggu Persetujuan
                            <span class="pull-right text-muted small"><?= $statusartikel; ?> Artikel</span>
                        </div>
                    </a>
                </li>
                <?php endif; ?>
                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?= $user['nama_user']; ?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
                </li>
                <li><a href="<?= base_url('auth/change'); ?>"><i class="fa fa-key fa-fw"></i> Change Password</a>
                </li>
                <li class="divider"></li>
                <li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <!-- <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </li> -->
                <!-- ADMINISTRATOR -->
                <?php if($this->session->userdata('role_id') == 1) : ?>
                <li>
                    <a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/artikel'); ?>"><i class="fa fa-list fa-fw"></i> Artikel</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/komentar'); ?>"><i class="fa fa-comment fa-fw"></i> Komentar</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/kategori'); ?>"><i class="fa fa-tag fa-fw"></i> Kategori</a>
                </li>
                <li>
                    <a href="<?= base_url('admin/user'); ?>"><i class="fa fa-users fa-fw"></i> User</a>
                </li>
            <?php endif; ?>

            <!-- MEMBER -->
            <?php if($this->session->userdata('role_id') == 2) : ?>
                <li>
                <a href="<?= base_url('user/artikel'); ?>"><i class="fa fa-list fa-fw"></i> Artikel</a>
            </li>
            <?php endif; ?>
            <li>
                <a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>