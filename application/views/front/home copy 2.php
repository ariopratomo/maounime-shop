<style>
.fades {
    position: relative;
    height: 2.6em;
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
    border: none !important;
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
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
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
    <div class="owl-one owl-carousel owl-theme owl-loaded mt-3">
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

    <div class="owl-two owl-carousel owl-theme owl-loaded mt-3">
        <div href="#" class="card card-product-grid shadow-sm">
            <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                    src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title ">Just another product name</a>
                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
        <div href="#" class="card card-product-grid shadow-sm">
            <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                    src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title ">Just another product name</a>
                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
        <div href="#" class="card card-product-grid shadow-sm">
            <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                    src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title ">Just another product name</a>
                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div>



    <div class="row">
        <div class="col-md-3 col-6">
            <div href="#" class="card card-product-grid shadow-sm">
                <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                        src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"> </a>
                <figcaption class="info-wrap">
                    <a href="#" class="title ">Just another product name</a>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div href="#" class="card card-product-grid shadow-sm">
                <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                        src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"> </a>
                <figcaption class="info-wrap">
                    <a href="#" class="title ">Just another product name</a>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div href="#" class="card card-product-grid shadow-sm">
                <a href="#" class="img-wrap"> <span class="badge badge-danger"> NEW </span> <img
                        src="http://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/items/1.jpg"> </a>
                <figcaption class="info-wrap">
                    <a href="#" class="title ">Just another product name</a>
                    <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
                </figcaption>
            </div>
        </div>
    </div>
</div>