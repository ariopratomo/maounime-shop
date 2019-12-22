<section class="content-header">
    <div class="container-fluid">
        <h1></h1>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid ">
        <div class="card">
            <div class="card-header text-center h4  ">Tambah User</div>

            <?= form_open(base_url('admin/users?page=add'), 'class="form-horizontal"'); ?>
            <div class="card-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama">
                        <?= form_error('name', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <?= form_error('email', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Password">
                        <?= form_error('password', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="passwordconf" class="col-sm-2 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="passconf" id="passwordconf"
                            placeholder="Password">
                        <?= form_error('passconf', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="role" id="role">
                            <option value="">Pilih Role</option>
                            <?php foreach ($role as $r) : ?>
                            <option value="<?= $r->id ?>"> <?= $r->role ?></option>
                            <?php endforeach ?>
                        </select>
                        <?= form_error('role', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right ml-2">Tambah</button>
                <a href="<?= site_url('admin/users') ?>" type="button" class="btn btn-default float-right ">Batal</a>
            </div>
            <!-- /.card-footer -->
            <?= form_close(); ?>

        </div>
    </div>

    </div>
</section>