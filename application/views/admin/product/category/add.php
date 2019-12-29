<section class="content-header">
    <div class="container-fluid">
        <h1></h1>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid ">
        <div class="card">
            <div class="card-header text-center h4  ">Tambah Kategori</div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="category_name">
                            <?= form_error('category_name', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Kategori</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="category_code" minlength="3" maxlength="3">
                            <?= form_error('category_code', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto Kategori</label>
                        <div class="col-sm">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="imgProduct" name="image"
                                        accept="image/*">
                                    <label class="custom-file-label" for="imgProduct">Pilih Foto Kategori</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm d-flex justify-content-center">
                            <img src="<?= base_url('assets/img/no-preview.jpg') ?>"
                                class="img-fluid img-thumbnail  d-flex justify-content-center" id="prevImg" alt=""
                                width="200">
                        </div>
                    </div>
                    <div class="float-right mt-3">
                        <a href="<?= site_url('admin/product/cat') ?>" type="button" class="btn btn-default">Batal</a>
                        <button type="submit" class="btn btn-primary  ml-2" name="submit">Tambah</button>
                    </div>
                </form>
                <!-- /.card-footer -->
                <?= form_close(); ?>
            </div>

        </div>
        <!-- /.card-body -->



    </div>
    </div>

    </div>
</section>