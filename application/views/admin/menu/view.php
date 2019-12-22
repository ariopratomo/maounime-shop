<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>">Admin</a></li>
                    <li class=" breadcrumb-item active">Menu</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#modalTambah">
                        Tambah Menu
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
                                <th>Nama Menu</th>
                                <th>Icon</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menus as $mu) : ?>
                            <tr>
                                <td><?= $mu->menu ?></td>
                                <td><?= $mu->icon ?></td>
                                <td align="center">
                                    <input type="checkbox" class="form-check-input check-menu" <?= menu($mu->id) ?>
                                        data-menu="<?= $mu->id ?>">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#modalEdit<?= $mu->id ?>">
                                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                    </button>

                                    <a href="<?= site_url('admin/menu/del/' . $mu->id) ?>"
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

<?php $this->load->view('admin/menu/modalMenu'); ?>