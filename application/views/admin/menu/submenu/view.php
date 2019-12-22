<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>">Admin</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/menu') ?>">Menu</a></li>
                    <li class=" breadcrumb-item active">Submenu</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#modalTambah">
                        Tambah Submenu
                    </button>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid ">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Tabel Menu User</h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Submenu</th>
                                <th>Menu</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($submenus as $sm) : ?>
                            <tr>
                                <td><?= $sm->title ?></td>
                                <td><?= $sm->menu ?></td>
                                <td align="center">
                                    <input type="checkbox" class="form-check-input check-submenu"
                                        <?= sub_menu($sm->id) ?> data-submenu="<?= $sm->id ?>">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#modalEdit<?= $sm->id ?>">
                                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                    </button>

                                    <a href="<?= site_url('admin/menu/del/' . $sm->id) ?>"
                                        onclick="return confirm('Anda ingin menghapus menu ini ?');"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<?php $this->load->view('admin/menu/submenu/modalSubmenu'); ?>