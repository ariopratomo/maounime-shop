<div class="container content mb-2" id="content">
    <div class="card border-0 shadow-sm">
        <ol class="breadcrumb bg-white ">
            <li class="breadcrumb-item "><a href="#">Home</a></li>
            <li class="breadcrumb-item "><a href="#">Library</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page"><?= $detailP->name_product ?></li>
        </ol>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4"><img src="<?= base_url('assets/img/' . $detailP->img_product) ?>"
                        class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                        alt=""></div>
                <div class="col"></div>
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