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
                        <label class="col-sm-3 col-form-label">Nama Submenu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="menu" placeholder="namaMenu"
                                autocomplete="off" required>
                            <small class="form-text text-muted">
                                * Pastikan Nama Menu dan (uri->segment(2)) sama
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pilih Menu</label>
                        <div class="col-sm-9">
                            <select class="custom-select required">
                                <option selected value="">Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
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



<?php foreach ($submenus as $sm) : ?>
<!-- Modal Edit Menu-->
<div class="modal fade" id="modalEdit<?= $sm->id ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditLabel">Edit Menu (<?= $sm->title ?>)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="menuId" value="<?= $sm->id ?>">
                    <div class="form-group row">
                        <label for="menu" class="col-sm-3 col-form-label">Nama Menu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="menu" placeholder="namaMenu"
                                value="<?= $sm->title ?>" autocomplete="off" required>
                            <small class="form-text text-muted">
                                * Pastikan Nama Menu dan (uri->segment(2)) sama
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pilih Menu</label>
                        <div class="col-sm-9">
                            <select class="custom-select">
                                <option selected value="">Open this select menu</option>
                                <?php foreach ($menus as $m) : ?>
                                <option value="<?= $m->id ?>"><?= $m->menu ?></option>

                                <?php endforeach ?>
                            </select>
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