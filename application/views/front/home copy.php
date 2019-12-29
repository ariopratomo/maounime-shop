<style>
.fades {
    position: relative;
    height: 2.5em;
    overflow: hidden;
    font-size: 0.857143rem;
}

.fades:after {
    content: "";
    text-align: right;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 70%;
    height: 1.2em;
    background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) 50%);
}

.card-product-grid {
    margin-bottom: 20px;
}

.card .img-wrap {
    overflow: hidden;
}

.card-product-grid .img-wrap {
    border-radius: 0.2rem 0.2rem 0 0;
    height: 220px;
}

[class*='card-product'] .img-wrap {
    overflow: hidden;
    position: relative;
}

.img-wrap {
    text-align: center;
    display: block;
}

[class*='card-product'] .img-wrap img {
    height: 100%;
    max-width: 100%;
    width: auto;
    display: inline-block;
    -o-object-fit: cover;
    object-fit: cover;
}

.card-product-grid .info-wrap {
    overflow: hidden;
    padding: 18px 20px;
}

[class*='card-product'] a.title {
    color: #212529;
    display: block;
}

.rating-stars {
    display: inline-block;
    vertical-align: middle;
    list-style: none;
    margin: 0;
    padding: 0;
    position: relative;
    white-space: nowrap;
    clear: both;
}

.rating-stars li.stars-active {
    z-index: 2;
    position: absolute;
    top: 0;
    left: 0;
    overflow: hidden;
}

.rating-stars li {
    display: block;
    text-overflow: clip;
    white-space: nowrap;
    z-index: 1;
}

.label-rating {
    margin-left: 7px;
    display: inline-block;
    vertical-align: middle;
}

.price {
    font-weight: 600;
    color: #212529;
}

[class*='card-product'] .badge {
    top: 10px;
    left: 10px;
    position: absolute;
}
</style>

<div class="container content">
    <!-- Set up your HTML -->
    <div class="owl-carousel owl-theme owl-loaded mt-3">
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


    <div class="row">
        <div class=" col-6 col-md-4 col-lg-3 px-2 mb-3">
            <div class="product-card shadow-sm card rounded-lg">
                <div class="card-body ">
                    <span class="text-secondary small text-uppercase">Casual Dress</span>
                    <h3 class=" mb-2 font-weight-bold text-uppercase fades">Dummy Casual Dress Dummy Casual Dress</h3>
                    <div class="d-flex">
                        <h4 class="h5 w-50 font-weight-bold text-primary">$25 <sup><strike
                                    class="text-secondary font-weight-normal">$60</strike></sup></h4>
                        <div class="w-50 text-right">
                            <input data-filled="fas fa-star text-warning" data-empty="fas fa-star-o text-secondary"
                                value="5" type="hidden" class="rating" data-readonly />
                        </div>

                    </div>
                    <img class="w-100 mt-2 mb-3" src="https://pbs.twimg.com/media/D2WhQGKWoAAcREg.jpg" />
                    <button class="btn btn-primary btn-block mb-2">
                        <i class="fa fa-cart-plus mr-1"></i>
                        Add To Cart
                    </button>
                </div>
            </div>
        </div>
        <div class=" col-6 col-md-4 col-lg-3 px-2 mb-3">
            <div class="product-card shadow-sm card rounded-lg">
                <div class="card-body ">
                    <span class="text-secondary small text-uppercase">Casual Dress</span>
                    <h3 class=" mb-2 font-weight-bold text-uppercase fades">Dummy Casual Dress Dummy Casual Dress</h3>
                    <div class="d-flex">
                        <h4 class="h5 w-50 font-weight-bold text-primary">$25 <sup><strike
                                    class="text-secondary font-weight-normal">$60</strike></sup></h4>
                        <div class="w-50 text-right">
                            <input data-filled="fas fa-star text-warning" data-empty="fas fa-star-o text-secondary"
                                value="5" type="hidden" class="rating" data-readonly />
                        </div>
                    </div>
                    <img class="w-100 mt-2 mb-3" src="https://pbs.twimg.com/media/D2WhQGKWoAAcREg.jpg" />
                    <button class="btn btn-primary btn-block mb-2">
                        <i class="fa fa-cart-plus mr-1"></i>
                        Add To Cart
                    </button>
                </div>
            </div>
        </div>
        <div class=" col-6 col-md-4 col-lg-3 px-2 mb-3">
            <div class="product-card shadow-sm card rounded-lg">
                <div class="card-body ">
                    <span class="text-secondary small text-uppercase">Casual Dress</span>
                    <h3 class=" mb-2 font-weight-bold text-uppercase fades">Dummy Casual Dress Dummy Casual Dress</h3>
                    <div class="d-flex">
                        <h4 class="h5 w-50 font-weight-bold text-primary">$25 <sup><strike
                                    class="text-secondary font-weight-normal">$60</strike></sup></h4>
                        <div class="w-50 text-right">
                            <input data-filled="fas fa-star text-warning" data-empty="fas fa-star-o text-secondary"
                                value="5" type="hidden" class="rating" data-readonly />
                        </div>
                    </div>
                    <img class="w-100 mt-2 mb-3" src="https://pbs.twimg.com/media/D2WhQGKWoAAcREg.jpg" />
                    <button class="btn btn-primary btn-block mb-2">
                        <i class="fa fa-cart-plus mr-1"></i>
                        Add To Cart
                    </button>
                </div>
            </div>
        </div>
        <div class=" col-6 col-md-4 col-lg-3 px-2 mb-3">
            <div class="product-card shadow-sm card rounded-lg">
                <div class="card-body ">
                    <span class="text-secondary small text-uppercase">Casual Dress</span>
                    <h3 class=" mb-2 font-weight-bold text-uppercase fades">Dummy Casual Dress Dummy Casual Dress</h3>
                    <div class="d-flex">
                        <h4 class="h5 w-50 font-weight-bold text-primary">$25 <sup><strike
                                    class="text-secondary font-weight-normal">$60</strike></sup></h4>
                        <div class="w-50 text-right">
                            <input data-filled="fas fa-star text-warning" data-empty="fas fa-star-o text-secondary"
                                value="5" type="hidden" class="rating" data-readonly />
                        </div>
                    </div>
                    <img class="w-100 mt-2 mb-3" src="https://pbs.twimg.com/media/D2WhQGKWoAAcREg.jpg" />
                    <button class="btn btn-primary btn-block mb-2">
                        <i class="fa fa-cart-plus mr-1"></i>
                        Add To Cart
                    </button>
                </div>
            </div>
        </div>
        <div class=" col-6 col-md-4 col-lg-3 px-2 mb-3">
            <div class="product-card shadow-sm card rounded-lg">
                <div class="card-body ">
                    <span class="text-secondary small text-uppercase">Casual Dress</span>
                    <h3 class=" mb-2 font-weight-bold text-uppercase fades">Dummy Casual Dress Dummy Casual Dress</h3>
                    <div class="d-flex">
                        <h4 class="h5 w-50 font-weight-bold text-primary">$25 <sup><strike
                                    class="text-secondary font-weight-normal">$60</strike></sup></h4>
                        <div class="w-50 text-right">
                            <input data-filled="fas fa-star text-warning" data-empty="fas fa-star-o text-secondary"
                                value="5" type="hidden" class="rating" data-readonly />
                        </div>
                    </div>
                    <img class="w-100 mt-2 mb-3" src="https://pbs.twimg.com/media/D2WhQGKWoAAcREg.jpg" />
                    <button class="btn btn-primary btn-block mb-2">
                        <i class="fa fa-cart-plus mr-1"></i>
                        Add To Cart
                    </button>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                        src="images/items/1.jpg"> </a>
                <figcaption class="info-wrap">
                    <a href="#" class="title">Just another product name</a>

                    <div class="rating-wrap">
                        <ul class="rating-stars">
                            <li style="width:80%" class="stars-active">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span class="label-rating text-muted"> 34 reviws</span>
                    </div>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div>
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                        src="images/items/1.jpg"> </a>
                <figcaption class="info-wrap">
                    <a href="#" class="title">Just another product name</a>

                    <div class="rating-wrap">
                        <ul class="rating-stars">
                            <li style="width:80%" class="stars-active">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span class="label-rating text-muted"> 34 reviws</span>
                    </div>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div>
        <div class="col-md-3">
            <div href="#" class="card card-product-grid">
                <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                        src="images/items/1.jpg"> </a>
                <figcaption class="info-wrap">
                    <a href="#" class="title">Just another product name</a>

                    <div class="rating-wrap">
                        <ul class="rating-stars">
                            <li style="width:80%" class="stars-active">
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                    class="fa fa-star"></i><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <span class="label-rating text-muted"> 34 reviws</span>
                    </div>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div>
    </div>
</div>