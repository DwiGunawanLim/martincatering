        <style>
            .table>tbody>tr>td {
                vertical-align: middle;
            }
        </style>
        <!--banner-->
        <div class="banner">
            <h2>
                <a href="<?= base_url('Profil'); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Keranjang</span>
            </h2>
        </div>

        <!--faq-->
        <div class="blank">

            <div class="blank-page">
                <?= $this->session->flashdata('message'); ?>
                <table class="table">
                    <thead>
                        <tr>
                            <td>Tanggal</td>
                            <td>Nama Barang</td>
                            <td>Harga</td>
                            <td>Jumlah</td>
                            <td>Sub Total</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?= base_url('Profil/pesanan'); ?>" method="post" enctype="multipart/form-data">
                            <?php
                            function rupiah($angka)
                            {
                                $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
                                return $hasil_rupiah;
                            }
                            $i = 1;
                            $total_bayar = 0;
                            $total_p = 0; ?>
                            <?php foreach ($keranjang as $us) :
                                $total_bayar += $us['total'];
                            ?>
                                <tr>
                                    <td><?= $us['tanggal']; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td>Rp<?= $us['harga']; ?></td>
                                    <td><?= $us['jumlah']; ?></td>
                                    <td>Rp<?= $us['total']; ?></td>
                                    <td><a href="<?= base_url('Profil/delkeranjang/') . $us['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></td>
                                </tr>
                                <input type="hidden" name="makanan[]" value="<?= $us['id_makanan']; ?>">
                                <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                                <input type="hidden" name="harga" value="<?= $us['harga']; ?>">
                                <input type="hidden" name="jumlah_p[]" value="<?= $us['jumlah']; ?>">
                                <input type="hidden" name="total_p[]" value="<?= $us['total']; ?>">
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            <tr>
                                <td>Alamat Pengiriman</td>
                                <td colspan="5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <input type="text" name="alamat" value="<?= set_value('harga'); ?>" class="form-control1" id="alamat" placeholder="Alamat">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Pembayaran</td>
                                <td colspan="5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-money"></i>
                                        </span>
                                        <select name="pembayaran" id="pembayaran" class="form-control">
                                            <option value="">Pilih Bank</option>
                                            <option value="BRI">BRI - 1111-1111-1111-1111-1111</option>
                                            <option value="MANDIRI">MANDIRI - 2222-2222-2222-2222</option>
                                            <option value="BNI">BNI - 3333-3333-3333-3333-3333</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bukti Transfer</td>
                                <td colspan="5">
                                    <div class="custom-file">
                                        <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td colspan="5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" align="right"><strong>Total : </strong></td>
                                <td><?= rupiah($total_bayar); ?></td>
                                <td>
                                    <input type="hidden" name="no_penjualan" value="PJ<?= time() ?>" readonly class="form-control">
                                    <input type="hidden" name="bayar" value="<?= $total_bayar; ?>">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Pesan</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>