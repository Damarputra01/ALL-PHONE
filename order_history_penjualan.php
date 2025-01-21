<!-- application/views/home/order_history.php -->
<div class="container">
    <h2>Riwayat Penjualan</h2>

    <!-- Form Pencarian Resi -->
    <form action="<?= base_url('index.php/main/search_resi') ?>" method="post" class="py-4">
        <input type="text" name="resi" placeholder="Cari Nomor Resi">
        <button class="btn btn-primary text-white" type="submit">Cari</button>
    </form>

    <!-- Tabel Riwayat Penjualan -->
    <table class="table table-bordered bg-white rounded-3 black-bordered-table text-black text-center"
        style="color:black">
        <thead>
            <tr>
                <th class="text-center align-middle">ID Penjualan</th>
                <th class="text-center align-middle">Nama Produk</th>
                <th class="text-center align-middle">Quantity</th>
                <th class="text-center align-middle">Harga</th>
                <th class="text-center align-middle">Total</th>
                <th class="text-center align-middle">Tanggal</th>

            </tr>
        </thead>
        <tbody>
            <?php if (isset($order)): ?>
                <tr>
                    <td><?php echo $order->idHistory; ?></td>
                    <td><?php echo $order->namaProduk; ?></td>
                    <td><?php echo $order->quantity; ?></td>
                    <td><?php echo $order->harga; ?></td>
                    <td><?php echo $order->total; ?></td>
                    <td><?php echo $order->tanggalJual; ?></td>
                </tr>
            <?php elseif (!empty($history_penjualans)): ?>
                <?php foreach ($history_penjualans as $history_penjualanya) { ?>
                    <tr>
                        <td><?php echo $history_penjualanya->idHistory; ?></td>
                        <td><?php echo $history_penjualanya->namaProduk; ?></td>
                        <td><?php echo $history_penjualanya->quantity; ?></td>
                        <td><?php echo $history_penjualanya->harga; ?></td>
                        <td><?php echo $history_penjualanya->total; ?></td>
                        <td><?php echo $history_penjualanya->tanggalJual; ?></td>
                    </tr>
                <?php } ?>
            <?php else: ?>
                <tr>
                    <td class="text-center align-middle" colspan="6">Anda belum mendapatkan pembelian.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>