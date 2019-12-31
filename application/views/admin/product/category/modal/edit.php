<?php foreach ($category as $c) : ?>
<!-- Modal -->
<div class="modal fade" id="editKategori<?= $c->id_category ?>" tabindex="-1" role="dialog"
    aria-labelledby="editKategoriLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editKategoriLabel">Edit Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_category" value="<?= $c->id_category ?>">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="category_name"
                                value="<?= $c->category_name ?>">
                            <?= form_error('category_name', '<small class="text-danger pl-1">', '</small>') ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Foto Kategori</label>
                        <div class="col-sm-8">
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
                                width="75">
                        </div>
                    </div>
                    <div class="float-right mt-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary  ml-2" name="submit" value="editCat">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>