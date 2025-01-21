<!-- Page Header Start -->
<div class="text-center mb-4">
    <h2 class="section-title px-5"><span class="px-2">Detail Produk</span></h2>
</div>
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="<?php echo base_url('assets/foto_produk/' . $produk->foto); ?>"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold"><?php echo $produk->namaProduk; ?></h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                </div>
                <small class="pt-1"></small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">Rp. <?php echo $produk->harga; ?></h3>
            <p class="mb-4"><?php echo $produk->deskripsiProduk; ?></p>
            <div class="d-flex align-items-center mb-4 pt-2">
                <a href="<?php echo site_url('main/add_cart/' . $produk->idProduk); ?>"><button
                        class="btn text-white btn-primary px-3"><i class="fas text-white fa-plus"></i>
                        Tambah</button></a>
            </div>

            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Bagikan di:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Deskripsi</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Informasi</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Ulasan</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Deskripsi Produk</h4>
                    <?php echo $produk->deskripsiProduk; ?>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Informasi Penting</h4>
                    <p>Mohon di baca informasi penting berikut sebelum memesan suatu produk:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0" style="background-color: #dddddd !important">
                                    Waspada Penipuan: Pastikan Anda hanya bertransaksi melalui situs resmi kami dan
                                    jangan berikan informasi pribadi atau data kartu kredit kepada pihak yang tidak
                                    dikenal.
                                </li>
                                <li class="list-group-item px-0" style="background-color: #dddddd !important">
                                    Kebijakan Pengembalian: Kami menawarkan kebijakan pengembalian barang dalam 30 hari
                                    setelah pembelian. Pastikan produk dalam kondisi asli dan kemasan utuh saat
                                    mengembalikan.
                                </li>
                                <li class="list-group-item px-0" style="background-color: #dddddd !important">
                                    Layanan Pelanggan: Tim layanan pelanggan kami siap membantu Anda 24/7. Hubungi kami
                                    melalui chat, email, atau telepon untuk pertanyaan dan bantuan lebih lanjut.
                                </li>
                                <li class="list-group-item px-0" style="background-color: #dddddd !important">
                                    Keamanan Pembayaran: Kami menggunakan sistem pembayaran yang aman dan terenkripsi
                                    untuk melindungi data pribadi dan finansial Anda.
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6" style="background-color: #dddddd !important">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0" style="background-color: #dddddd !important">
                                    Pengiriman Cepat: Kami bekerja sama dengan berbagai layanan pengiriman terpercaya
                                    untuk memastikan barang Anda sampai tepat waktu dan dalam kondisi baik.
                                </li>
                                <li class="list-group-item px-0" style="background-color: #dddddd !important">
                                    Ulasan dan Rating: Bacalah ulasan dari pembeli lain sebelum melakukan pembelian.
                                    Ulasan yang jujur dan rating dari pengguna dapat membantu Anda membuat keputusan
                                    yang tepat.
                                </li>
                                <li class="list-group-item px-0" style="background-color: #dddddd !important">
                                    Diskon dan Promosi: Jangan lewatkan penawaran diskon dan promosi khusus yang kami
                                    tawarkan setiap minggunya. Daftarkan diri Anda untuk menerima newsletter kami agar
                                    tidak ketinggalan informasi terbaru.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">Ulasan dari berbagai orang</h4>
                            <div class="media mb-4">
                                <img src="<?php echo base_url('assets/home/img/profile.jpg'); ?>" alt="Image"
                                    class="img-fluid mr-3 mt-1" style="width: 45px; border-radius: 50%;">
                                <div class="media-body">
                                    <?php foreach ($rating as $ratings): ?>
                                        <!-- Mengganti "John Doe" dengan data dari database -->
                                        <h6><?php echo $ratings->Nama; ?></h6>
                                        <div class="text-primary mb-2">
                                            <?php
                                            $ratingValue = $ratings->Rating; // Anggap $ratings->Rating berisi nilai rating dalam bentuk integer
                                            $fullStars = floor($ratingValue); // Jumlah bintang penuh
                                            $halfStar = ($ratingValue - $fullStars) >= 0.5; // Apakah terdapat setengah bintang?
                                        
                                            // Tampilkan bintang penuh
                                            for ($i = 0; $i < $fullStars; $i++) {
                                                echo '<i class="fas fa-star"></i>';
                                            }

                                            // Tampilkan setengah bintang jika ada
                                            if ($halfStar) {
                                                echo '<i class="fas fa-star-half-alt"></i>';
                                                $fullStars++; // Tambah jumlah bintang penuh jika ada setengah bintang
                                            }

                                            // Tampilkan bintang kosong jika belum mencapai 5 bintang
                                            for ($i = $fullStars; $i < 5; $i++) {
                                                echo '<i class="far fa-star"></i>';
                                            }
                                            ?>
                                        </div>
                                        <p><?php echo $ratings->Pesan; ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form action="<?= site_url('main/submit_rating') ?>" method="post">
                                <input type="hidden" name="product_id" value="<?= $produk->idProduk ?>">
                                <h4 class="mb-4">Tinggalkan Ulasan</h4>
                                <small>Alamat email Anda tidak akan dipublikasikan. Bidang yang wajib diisi ditandai
                                    *</small>
                                <div class="d-flex my-3">
                                    <p class="mb-0 mr-2">Rating Anda * :</p>
                                    <div class="text-primary">
                                        <select name="rating">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><i class="fas fa-star" style="padding-left:5px"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Ulasan Anda *</label>
                                    <textarea id="pesan" name="pesan" cols="30" rows="5"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Anda *</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Anda *</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Berikan Ulasan" class="btn text-white btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->