<style>
.price-old {
    color: #969696;
    margin-left: 3px;
    font-size: 85%;
}
</style>

<div class=" content ">

    <div class="bg-white pt-3">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produk</li>
                </ol>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title font-weight-bold">
                                Kategori
                            </div>
                            <ul class="list-unstyled">
                                <?php foreach ($category as $cat) : ?>
                                <li>
                                    <a href="" class="text-decoration-none text-muted"><?= $cat->category_name ?> <span
                                            class="badge  badge-maou float-right py-1"><?= $cat->jumlah ?></span></a>
                                </li>
                                <?php endforeach ?>
                            </ul>
                            <hr>
                            <div class="card-title  font-weight-bold">
                                Harga
                            </div>

                            <div class="input-group input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-0" id="inputGroup-sizing">Rp</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing" placeholder="Minimum">
                            </div>
                            <div class="input-group input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-0" id="inputGroup-sizing">Rp</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing" placeholder="Maximum">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <header class="border-bottom mb-4 pb-3">
                        <div class="form-inline">
                            <span>Urutkan:</span>
                            <select class="mx-2 form-control">
                                <option>Terbaru</option>
                                <option>Penjualan Terbanyak</option>
                                <option>Harga Tertinggi</option>
                                <option>Harga Terendah</option>
                            </select>
                        </div>
                    </header>
                    <div id="load_data" class="row scrollspy-example"></div>
                    <div id="load_data_message" class="mb-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>