<section class="content-header">
    <div class="container-fluid">
        <h1></h1>
    </div><!-- /.container-fluid -->
</section>
<section class="content">
    <div class="container-fluid ">
        <div class="card">
            <div class="card-header text-center h4  ">Tambah Produk</div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name_product">Nama Produk</label>
                        <input type="text" class="form-control" name="name_product" id="name_product"
                            placeholder="Nama Produk" value="<?= set_value('name_product') ?>" required>
                        <?= form_error('name_product', '<small class="text-danger pl-1">', '</small>') ?>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="stock_product">Stok</label>
                                <input type="number" class="form-control" name="stock_product" id="stock_product"
                                    value="<?= set_value('stock_product') ?>" min="1">
                                <?= form_error('stock_product', '<small class="text-danger pl-1">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="weight_product">Berat (gr)</label>
                                <input type="number" class="form-control" name="weight_product" id="weight_product"
                                    value="<?= set_value('weight_product') ?>" min="1">
                                <?= form_error('weight_product', '<small class="text-danger pl-1">', '</small>') ?>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="id_category">Kategori</label>
                                <select class="form-control" name="id_category" id="id_category">
                                    <option value="">Pilih Kategori</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="first_price">Harga Awal</label>
                                <input type="number" class="form-control" name="first_price" id="first_price"
                                    value="<?= set_value('first_price') ?>" min="1">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="discount">Diskon %</label>
                                <input type="number" class="form-control" name="discount" id="discount" min="0"
                                    max="100" value="<?= set_value('discount') ?>">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="last_price">Harga Akhir</label>
                                <input type="number" class="form-control" name="last_price" id="last_price"
                                    value="<?= set_value('last_price') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="summernote">Deskripsi Produk</label>
                            <textarea class="form-control" name="desc_product" id="summernote" rows="3"
                                required><?= set_value('desc_product') ?></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="imgProduct">Foto Produk</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="imgProduct" name="image"
                                            accept="image/*">
                                        <label class="custom-file-label" for="imgProduct">Pilih Foto Produk</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center">
                            <img src="<?= base_url('assets/img/no-preview.jpg') ?>"
                                class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|} d-flex justify-content-center"
                                id="prevImg" alt="" width="200">
                        </div>
                    </div>

                    <div class="float-right mt-3">
                        <a href="<?= site_url('admin/product') ?>" type="button" class="btn btn-default">Batal</a>
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