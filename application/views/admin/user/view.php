<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>">Admin</a></li>
                    <li class=" breadcrumb-item active">Users</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div> <a name="" id="" class="btn btn-primary float-right"
                        href="<?= site_url('admin/users?page=add') ?>" role="button"> <i class="fa fa-plus"
                            aria-hidden="true"></i> Tambah User</a></div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid ">

        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Tabel User</h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Tgl Daftar</th>
                                <th>Last Update</th>
                                <th>Last Login</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $u) : ?>
                            <tr>
                                <td><?= $u->name ?></td>
                                <td><?= $u->email ?></td>
                                <td><?= $u->role ?></td>
                                <td><?= date('d-m-Y', $u->created_at); ?></td>
                                <td><?= date('d-m-Y', $u->updated_at); ?></td>
                                <td><?= date('d-m-Y', $u->last_login); ?></td>
                                <td>
                                    <a href="<?= site_url('admin/users?page=edit&id=' . $u->id_user) ?>"
                                        class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Edit User"><i class="fa fa-pencil-alt" aria-hidden="true"></i>
                                    </a>

                                    <?php if ($myData->id_user != $u->id_user) : ?>
                                    <a href="<?= site_url('admin/users?page=delete&id=' . $u->id_user) ?>"
                                        onclick="return confirm('Anda ingin menghapus user ini ?');"
                                        class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                    <?php else : ?>
                                    <a href="#" class="btn btn-danger btn-sm disabled"><i class="fa fa-trash-alt"
                                            aria-hidden="true"></i></a>
                                    <?php endif ?>

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