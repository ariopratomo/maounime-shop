<style>
[type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}

[type="radio"]:checked+label,
[type="radio"]:not(:checked)+label {
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}

[type="radio"]:checked+label:before,
[type="radio"]:not(:checked)+label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}

[type="radio"]:checked+label:after,
[type="radio"]:not(:checked)+label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #007bff;
    position: absolute;
    top: 3px;
    left: 3px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

[type="radio"]:not(:checked)+label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}

[type="radio"]:checked+label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
</style>

<nav
    class="navbar navbar-expand-lg navbar-light  bg-white fixed-bottom shadow-sm nav-bottom pl-4 pr-4 d-flex justify-content-center">

    <div class="row">
        <div class="col-3 d-flex justify-content-center pl-4">
            <a href="" class="text-secondary text-center"><i class="fas fa-home  fa-1-5"></i></i><br><small
                    class="">Home</small></a>
        </div>
        <div class="col-6 d-flex justify-content-center pl-4">
            <a href="" class="text-secondary text-center"><i class="fas fa-exchange-alt fa-1-5"></i></i><br><small
                    class="">Transaksi</small></a>
        </div>

        <div class="col-3 d-flex justify-content-center pl-4">
            <a href="#loginModal" data-toggle="modal" class="text-secondary text-center"><i
                    class="fas fa-sign-out-alt  fa-1-5 "></i><br><small class="">Masuk</small></a>

        </div>
        <!-- <div class="col-3 d-flex justify-content-center pl-4">
            <a href="#loginModal" data-toggle="modal" class="text-secondary text-center"><i
                    class="fas fa-user fa-1-5 "></i><br><small class="">Akun</small></a>

        </div> -->
    </div>

</nav>


<!-- Modal Login-->
<div class="modal fade animate" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content animate-bottom">
            <div class="modal-header bg-primary d-flex justify-content-center">
                <div class="modal-title text-center text-white">
                    <h5 id="loginModalLabel" class="">Login</h5>
                    <h3>M-SHOP</h3>
                </div>
            </div>
            <div class="modal-body">
                <form class="mt-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control form-control-lg" name="lEmail" aria-describedby="helpId"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control form-control-lg" name="lPassword"
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <button type="button" class="btn btn-primary btn-block">Login</button>
                    <button type="button" class="btn btn-light btn-block" data-dismiss="modal">Batal</button>
                    <div class="mt-3 text-center"><small>Belum punya akun ? <a data-dismiss="modal" data-toggle="modal"
                                href="#registerModal">Daftar</a></small></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- Modal Daftar-->
<div class="modal fade animate" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content animate-bottom">
            <div class="modal-header bg-primary d-flex justify-content-center">
                <div class="modal-title text-center text-white">
                    <h5 id="registerModalLabel" class="">Daftar Akun</h5>
                    <h3>M-SHOP</h3>
                </div>


            </div>
            <div class="modal-body">
                <form class="mt-4">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control form-control-lg" name="rName" aria-describedby="helpId"
                            placeholder="">

                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control form-control-lg" name="rName" aria-describedby="helpId"
                            placeholder="">
                        <small id="helpId" class="form-text text-muted">*tidak dapat diubah!</small>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control form-control-lg" name="rEmail" aria-describedby="helpId"
                            placeholder="">

                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control form-control-lg" name="rPassword"
                            aria-describedby="helpId" placeholder="">
                    </div>
                    <div id="jeniskelamin" class="mb-2">
                        <p>Jenis Kelamin</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                            <label class="form-check-label" for="inlineRadio1">Lai-Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="">Provinsi</label>
                        <select class="form-control" name="" id="">
                            <option value="">Pilih Provinsi</option>
                            <option></option>
                            <option></option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Kabupaten/Kota</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Pilih Kab/Kota</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <select class="form-control" name="" id="">
                                    <option value="">Pilih Kecamatan</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat lengkap</label>
                        <textarea class="form-control" name="" id="" rows="3"></textarea>
                    </div>




                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block">Login</button>
                <button type="button" class="btn btn-light btn-block" data-dismiss="modal">Batal</button>
                <div class="mt-3 text-center"><small>Sudah punya akun ? <a data-dismiss="modal" data-toggle="modal"
                            href="#loginModal">Login</a></small></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<script>

</script>