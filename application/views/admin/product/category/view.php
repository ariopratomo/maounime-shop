<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>">Admin</a></li>
                    <li class=" breadcrumb-item active">Kategori</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div>
                    <a href="<?= site_url('admin/product/cat') ?>" class="btn btn-primary float-right">Tambah Produk</a>

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
                <h4 class="text-center">Tabel Produk</h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Kategori</th>
                                <th>Kode Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($category as $c) : ?>
                            <tr>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img class="border rounded" src="<?= base_url('assets/img/') //. //$p->img_product ) 
																													?>" style="width: 50px;">
                                        </div>
                                        <div class="pl-2">
                                            <?= $c->category_name ?>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?= $c->category_code ?>
                                </td>
                                <td><a href="<?= base_url('admin/product/edit/' . $c->id_category) ?>"
                                        class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Edit produk"><i class="fas fa-pen"></i></a>
                                    <a href="<?= site_url('admin/product/del/' . $c->id_category) ?>"
                                        onclick="return confirm('Anda ingin menghapus produk ini ?');"
                                        class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Hapus produk"><i class="fa fa-trash-alt" aria-hidden="true"></i></a>
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

<?php //$this->load->view('admin/menu/modalMenu'); 
?>