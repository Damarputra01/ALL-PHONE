<!-- application/views/home/order_history.php -->
<div class="container text-center">
    <h2 class="section-title px-5 mt-4"><span class="px-2">Riwayat Pembelian</h2>
    <table class="table table-bordered bg-white rounded-3 black-bordered-table text-black" style="color:black">
        <thead>
            <tr>
                <th class="text-center align-middle">ID Order</th>
                <th class="text-center align-middle">Tanggal Order</th>
                <th class="text-center align-middle">Status Order</th>
                <th class="text-center align-middle">Kurir</th>
                <th class="text-center align-middle">Ongkir</th>
                <th class="text-center align-middle">Total</th>
                <th class="text-center align-middle">Ulasan</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $order): ?>
                    <tr>
                        <td class="text-center align-middle"><?php echo $order->idOrder; ?></td>
                        <td class="text-center align-middle"><?php echo $order->tglOrder; ?></td>
                        <td class="text-center align-middle"><?php echo $order->statusOrder; ?></td>
                        <td class="text-center align-middle"><?php echo $order->kurir; ?></td>
                        <td class="text-center align-middle"><?php echo $order->ongkir; ?></td>
                        <td class="text-center align-middle">Rp. <?php echo $order->total + $order->ongkir; ?></td>
                        <td class="text-center align-middle"> <a
                                href="<?php echo site_url('main/detail_produk/' . $order->idProduk); ?>"
                                class="btn text-white btn-primary"><i class="fas text-white fa-star pl"
                                    style="margin-right:5px"></i>Beri Rating</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td class="text-center align-middle" colspan="6">Anda belum melakukan pembelian.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>