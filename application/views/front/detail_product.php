<style>
.price-old {
    color: #969696;
    margin-left: 5px;
    font-size: 90%;
}
</style>
<div class="container content mb-2" id="content">
    <div class="card border-0 shadow-sm">
        <ol class="breadcrumb bg-white ">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item "><a href="#">Library</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page"><?= $detailP->name_product ?></li>
        </ol>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 p-3"><img src="<?= base_url('assets/img/' . $detailP->img_product) ?>"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt=""></div>
                <div class="col-md-6 py-3">
                    <div class="h5 font-weight-bold text-muted"><?= $detailP->name_product ?></div>

                    <div class="py-2">
                        <div class="text-muted">
                            <div class="row">
                                <div class="col-4 col-md-3 col-sm-3 pr-0">Harga : </div>
                                <div class="col pl-0">
                                    <div class="col">
                                        <span
                                            class="h6 font-weight-bold text-maou"><?= rupiah($detailP->last_price) ?></span>
                                    </div>
                                    <div class="col">
                                        <del class=" price-old text-muted"><?= rupiah($detailP->first_price) ?></del>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>