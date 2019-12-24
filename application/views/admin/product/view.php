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
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                        data-target="#modalTambah">
                        Tambah Produk
                    </button>
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
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Berat</th>
                                <th>Foto</th>
                                <th>Tgl Tambah</th>
                                <th>Tgl Update</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($product as $p) : ?>
                            <tr>
                                <td><?= $p->name_product ?></td>
                                <td><?= $p->price_product ?></td>
                                <td><?= $p->stock_product ?></td>
                                <td><?= $p->weight_product ?></td>
                                <td><?= $p->img_product ?></td>
                                <td><?= $p->created_at ?></td>
                                <td><?= $p->updated_at ?></td>
                                <td></td>
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