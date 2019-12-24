<!-- Modal Tambah Menu -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="menuId">
                    <div class="form-group row">
                        <label for="menu" class="col-sm-3 col-form-label">Nama Menu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="menu" name="menu" placeholder="namaMenu"
                                autocomplete="off" required>
                            <small id="menu" class="form-text text-muted">
                                * Pastikan Nama Menu dan (uri->segment(2)) sama
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="icon" class="col-sm-3 col-form-label">Icon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="icon" name="icon"
                                placeholder="fas fa-ellipsis-h" required>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



<?php foreach ($menus as $mu) : ?>
<!-- Modal Edit Menu-->
<div class="modal fade" id="modalEdit<?= $mu->id ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Edit Menu (<?= $mu->menu ?>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="menuId" value="<?= $mu->id ?>">
                    <div class="form-group row">
                        <label for="menu" class="col-sm-3 col-form-label">Nama Menu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="menu" name="menu" placeholder="namaMenu"
                                value="<?= $mu->menu ?>" autocomplete="off" required>
                            <small id="menu" class="form-text text-muted">
                                * Pastikan Nama Menu dan (uri->segment(2)) sama
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="icon" class="col-sm-3 col-form-label">Icon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="icon" name="icon"
                                placeholder="fas fa-ellipsis-h" value="<?= $mu->icon ?>" required>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" name="edit" value="Simpan">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>