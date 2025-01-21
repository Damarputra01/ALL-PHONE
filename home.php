<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Produk Baru</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?php foreach ($produk as $val) { ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="<?php echo base_url('assets/foto_produk/' . $val->foto); ?>"
                            alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $val->namaProduk; ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6>Rp <?php echo $val->harga; ?></h6>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h6><?php echo $val->namaToko; ?> </h6>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h6>
                                <?php
                                $this->load->helper('toko');
                                $city = getDetailCity($val->idKota);
                                if (isset($city['rajaongkir']['results']['city_name'])) {
                                    echo $city['rajaongkir']['results']['city_name'] . ", " . $city['rajaongkir']['results']['province'];
                                } else {
                                    echo "City Name Not Found"; // Provide a default message or handle the error as per your application logic
                                }
                                ?>
                            </h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="<?php echo site_url('main/detail_produk/' . $val->idProduk); ?>"
                            class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Lihat Detail</a>
                        <a href="<?php echo site_url('main/add_cart/' . $val->idProduk); ?>"
                            class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Masukan
                            Keranjang</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- Products End -->




<!-- Products Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Produk Trending</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="<?php echo base_url('assets/home/img/Produk-1.png'); ?>" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Iphone 14 Pro</h6>
                    <div class="d-flex justify-content-center">
                        <h6>Rp 16.100.000</h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Lihat
                        Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-shopping-cart text-primary mr-1"></i>Masukan Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="<?php echo base_url('assets/home/img/Produk-2.png'); ?>" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Samsung Galaxy A05 </h6>
                    <div class="d-flex justify-content-center">
                        <h6>Rp 1.299.000</h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Lihat
                        Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-shopping-cart text-primary mr-1"></i>Masukan Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="<?php echo base_url('assets/home/img/Produk-3.png'); ?>" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Xiaomi 13T</h6>
                    <div class="d-flex justify-content-center">
                        <h6>Rp 6.499.000</h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Lihat
                        Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-shopping-cart text-primary mr-1"></i>Masukan Keranjang</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="<?php echo base_url('assets/home/img/Produk-4.png'); ?>" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">Vivo V30 5G</h6>
                    <div class="d-flex justify-content-center">
                        <h6>Rp 6.599.000</h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Lihat
                        Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-shopping-cart text-primary mr-1"></i>Masukan Keranjang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

<!-- Subscribe Start -->
<div class="container-fluid bg-bodyam mt-5">
    <div class="row justify-content-md-center py-5 px-xl-5">
        <div class="col-md-6 col-12 py-5">
            <div class="text-center mb-2 pb-2">
                <h2 class="section-title px-5 mb-3"><span class="px-2">Dapatkan Info Terbaru</span></h2>
                <p>Dengan memasukan email anda di bawah ini, berarti anda setuju untuk diberikan info terbaru dari kami
                    untuk kedepannya.</p>
            </div>
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control border-white rounded-3 p-4" placeholder="Masukan Email Anda">
                    <div class="input-group-append">
                        <button class="btn btn-primary text-white rounded-3 px-4">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe End -->