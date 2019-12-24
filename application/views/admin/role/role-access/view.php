<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>">Admin</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/role') ?>">Role</a></li>
                    <li class=" breadcrumb-item active">Role Akses</li>
                </ol>
            </div>
            <div class="col-sm-6">

            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid ">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">Role Akses : <?= $role->role ?></h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Akses</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menus as $m) : ?>
                            <tr>
                                <td><?= $m->menu ?> </td>
                                <td align="center">
                                    <input type="checkbox" class="form-check-input check-access"
                                        <?= role_access($role->id, $m->id) ?> data-menu="<?= $m->id ?>"
                                        data-role="<?= $role->id ?>">
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

<?php //$this->load->view('admin/role/modalRole');