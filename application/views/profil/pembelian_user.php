        <style>
            .table>tbody>tr>td {
                vertical-align: middle;
            }
        </style>
        <!--banner-->
        <div class="banner">
            <h2>
                <a href="<?= base_url('Dashboard'); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Makanan</span>
            </h2>
        </div>
        <!--//banner-->

        <!--faq-->
        <div class="blank">

            <div class="blank-page">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <?= $this->session->flashdata('message');
                                ?>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pembelian</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pembelian as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['no_penjualan']; ?></td>
                                                <td><?= $us['tanggal']; ?></td>
                                                <td><?= $us['total_bayar']; ?></td>
                                                <td><?= $us['status']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Profil/statusbeli/') . $us['no_penjualan']; ?>" class="badge badge-info">Detail</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>