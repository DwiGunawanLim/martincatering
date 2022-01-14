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
                <span>Penjualan</span>
            </h2>
        </div>
        <!--//banner-->

        <!--faq-->
        <div class="blank">

            <div class="blank-page">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="clearfix">
                        <div class="float-left">
                            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
                        </div>
                        <div class="float-right">
                            <a href="<?= base_url('Penjualan/export') ?>" style="margin-top: 0.5rem; margin-right: 1rem;" class="btn btn-success"><i class="fa fa-file-pdf">&nbsp;&nbsp;Export</i></a>
                        </div>
                    </div>
                    <!-- <table class="table"> -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Pembelian</th>
                                            <th>Tanggal</th>
                                            <th>Pelanggan</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($penjualan as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['no_penjualan']; ?></td>
                                                <td><?= $us['tanggal']; ?></td>
                                                <td><?= $us['nama']; ?></td>
                                                <td><?= $us['total_bayar']; ?></td>
                                                <td><?= $us['status']; ?></td>
                                                <td>
                                                    <a href="<?= base_url('Penjualan/detail/') . $us['no_penjualan']; ?>" class="badge badge-info">Detail</a>
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