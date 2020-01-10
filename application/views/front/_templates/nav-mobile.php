<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    left: 0;
    top: 0;
    z-index: 1031;
    background-color: #fff;
    overflow-x: hidden;
    transition: 0.5s;
}


.sidenav .closebtn {
    position: absolute;
    top: 0PX;
    left: -30px;
    font-size: 36px;
    margin-left: 50px;
}

.head-sidenav {
    background: rgb(186, 183, 255);
    background: linear-gradient(319deg, rgba(186, 183, 255, 1) 12%, rgba(99, 148, 248, 1) 45%, rgba(48, 116, 255, 1) 100%);
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
}
</style>
<div class="nav-mobile">
    <nav class="navbar navbar-expand-lg navbar-light  bg-white fixed-top shadow-sm ">
        <?php if ($this->uri->segment(1) == true) : ?>
        <?php // Back link to previous page.

			// If current page has been called by a hyperlink.
			if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != '') echo '<a href="' . $_SERVER['HTTP_REFERER'] . '"><i class="fas fa-arrow-left  fa-1-5 text-secondary  "></i></a>';

			// If current page has NOT been called by a hyperlink.
			else return;
			?>
        <form class="form-inline w-search  my-lg-0 px-1">
            <div class="input-group w-group">
                <input type="text" class="form-control  rounded" placeholder="Cari Produk...">
                <div class="input-group-append">
                    <button class="btn btn-form btn-sm rounded-lg" type="button"> <i class="fas fa-search m-1"></i>
                    </button>
                </div>
            </div>
        </form>
        <a href="<?= base_url() ?>"><i class="fas fa-home  fa-1-5 text-secondary  "></i></a>
        <button id="m-cart" class="btn btn-primary-outline"><i class="fas fa-shopping-cart fa-1-5 text-secondary ">
                <span class="badge badge-maou badge-pill">1</span></i></button>
        <?php else : ?>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
        <form class="form-inline w-search  my-lg-0 px-1">
            <div class="input-group w-group">
                <input type="text" class="form-control  rounded" placeholder="Cari Produk...">
                <div class="input-group-append">
                    <button class="btn btn-form btn-sm rounded-lg" type="button"> <i class="fas fa-search m-1"></i>
                    </button>
                </div>
            </div>
        </form>

        <button id="m-cart" class="btn btn-primary-outline"><i class="fas fa-shopping-cart fa-1-5 text-secondary ">
                <span class="badge badge-maou badge-pill">1</span></i></button>
        <?php endif ?>





    </nav>
    <div id="mySidenav" class="sidenav">
        <div class="head-sidenav p-4 text-white">
            <a href="javascript:void(0)" class="closebtn text-white text-decoration-none"
                onclick="closeNav()">&times;</a>
            <br>
            <span class="h1">M-SHOP</span>
            <p style="font-size: 14px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi quae,
                laudantium qui optio quia ullam
                sequi, nulla earum fugit eligendi sit est tenetur deleniti corrupti ipsa, vero consectetur labore
                nam.</p>
        </div>

        <div class="body-sidenav p-4">
            <span class="h4 text-dark">Informasi</span><br>
            <ul class="list-unstyled">
                <li><a href="" class="text-muted">Tentang Kami</a></li>
                <li><a href="" class="text-muted">Blog</a></li>
            </ul>
            <span class="h4 text-dark ">Link Bantuan</span><br>
            <ul class="list-unstyled">
                <li><a href="" class="text-muted">Cara Bayar</a></li>
                <li><a href="" class="text-muted">Konfirmasi Pembayaran</a></li>
            </ul>

        </div>
        <div class="footer-sidenav p-4">
            <span class="text-dark d-flex justify-content-center">
                &copy; 2019 <a href="<?= base_url() ?>" class="text-decoration-none text-dark px-1"> M-SHOP</a>
            </span>
        </div>
    </div>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>