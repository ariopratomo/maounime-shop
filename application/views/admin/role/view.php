<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>">Admin</a></li>
                    <li class=" breadcrumb-item active">Role</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#modalTambah">
                        Tambah Role
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
                <h4 class="text-center">Tabel Role</h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($role as $r) : ?>
                            <tr>
                                <td><?= $r->role ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#modalEdit<?= $r->id ?>">
                                        <i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                    </button>
                                    <?php if ($r->id != 1) : ?>
                                    <a href="<?= site_url('admin/role/del/' . $r->id) ?>"
                                        onclick="return confirm('Anda ingin menghapus menu ini ?');"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                    <?php else : ?>
                                    <a href="#" class="btn btn-danger btn-sm " data-toggle="tooltip"
                                        data-placement="top" title="tidak dapat menghapus role Superadmin"><i
                                            class="fa fa-trash-alt" aria-hidden="true"></i></a>
                                    <?php endif ?>

                                    <a href="<?= site_url('admin/role/roleaccess/' . $r->id) ?>"
                                        class="btn btn-default btn-sm">Akses Menu</a>

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

<?php $this->load->view('admin/role/modalRole');