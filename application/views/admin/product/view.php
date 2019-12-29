<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb ">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home') ?>">Admin</a></li>
                    <li class=" breadcrumb-item active">Product</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <div>
                    <a href="<?= site_url('admin/product/add') ?>" class="btn btn-primary float-right">Tambah Produk</a>

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
                                <th>Produk</th>
                                <th>Harga awal</th>
                                <th>Diskon</th>
                                <th>Harga akhir</th>
                                <th>Stok</th>
                                <th>Berat</th>
                                <th>Tgl Tambah</th>
                                <th>Tgl Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product as $p) : ?>
                            <tr>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div>
                                            <img class="border rounded"
                                                src="<?= base_url('assets/img/' . $p->img_product) ?>"
                                                style="width: 50px;">
                                        </div>
                                        <div class="pl-2">
                                            <?= $p->name_product ?>
                                        </div>
                                    </div>
                                </td>
                                <td><?= rupiah($p->first_price) ?></td>
                                <td><?= $p->discount ?>%</td>
                                <td><?= rupiah($p->last_price) ?></td>
                                <td><?= $p->stock_product ?></td>
                                <td><?= $p->weight_product ?> gr</td>
                                <td><?= date('d-m-Y', $p->created_at) ?></td>
                                <td><?= date('d-m-Y', $p->updated_at) ?></td>

                                <td><a href="<?= base_url('admin/product/edit/' . $p->id_product) ?>"
                                        class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Edit produk"><i class="fas fa-pen"></i></a>
                                    <a href="<?= site_url('admin/product/del/' . $p->id_product) ?>"
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