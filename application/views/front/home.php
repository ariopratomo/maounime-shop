<div class="container content">
    <!-- Set up your HTML -->
    <div class="owl-one owl-carousel  owl-loaded mt-3">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="owl-item"><img src="http://localhost:8080/maounime-shop/assets/img/slide-default.png"
                        class="rounded-lg">
                </div>
                <div class="owl-item"><img src="http://localhost:8080/maounime-shop/assets/img/slide-default.png"
                        class="rounded-lg">
                </div>
                <div class="owl-item"><img src="http://localhost:8080/maounime-shop/assets/img/slide-default.png"
                        class="rounded-lg">
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 mb-3">
        <a href="<?= site_url('product') ?>" class="btn btn-outline-primary float-right">Lihat Semua</a>
        <h5 class="section-title mt-3 mb-3">Produk</h5>
    </div>
    <div class="row mt-4">
        <?php
        foreach ($RandomProduct as $rProd) : ?>

        <div class="col-md-3 col-6">
            <figure class="card card-product-grid rounded-lg">
                <div class="img-wrap">
                    <img src="<?= base_url('assets/img/' . $rProd->img_product) ?>">
                </div> <!-- img-wrap.// -->

                <figcaption class="info-wrap">
                    <div class="fix-height">
                        <a href="<?= site_url('product/detail/' . $rProd->slug_product) ?>"
                            class="title"><?= $rProd->name_product ?></a>
                        <div class="price-wrap mt-2">
                            <span class="price"><?= rupiah($rProd->last_price) ?></span>
                        </div> <!-- price-wrap.// -->
                    </div>

                </figcaption>
            </figure>
        </div>
        <?php endforeach ?>
    </div>
</div>