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
                <span>User</span>
            </h2>
        </div>
        <!--//banner-->

        <!--faq-->
        <div class="blank">

            <div class="blank-page">

                <!-- Tabel Makanan -->
                <div class="container-fluid">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="clearfix">
                        <div class="float-left">
                            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
                        </div>
                        <div class="float-right">
                            <a href="<?= base_url('User/tambah'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;&nbsp;Tambah User</a>
                        </div>
                    </div>
                    <!-- <table class="table"> -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td align="center">No</td>
                                            <td align="center">Gambar</td>
                                            <td align="center">Nama</td>
                                            <td align="center">Email</td>
                                            <td align="center">Role</td>
                                            <td align="center">Tanggal Daftar</td>
                                            <td align="center">Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($usertotal as $us) : ?>
                                            <tr align="center">
                                                <td class="align-middle"><?= $i; ?>.</td>
                                                <td class="align-middle"><img src="<?= base_url('assets/images/profile/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
                                                <td class="align-middle"><?= $us['nama']; ?></td>
                                                <td class="align-middle"><?= $us['email']; ?></td>
                                                <td class="align-middle"><?= $us['role']; ?></td>
                                                <td class="align-middle"><?= date('d F Y', $us['date_created']); ?></td>
                                                <td class="align-middle">
                                                    <a href="<?= base_url('User/edit/') . $us['id']; ?>" class="label label-warning">Edit</a>
                                                    <!-- Trigger Hapus -->
                                                    <a data-toggle="modal" data-target="#modal-danger<?php echo $us['id']; ?>" class="label label-danger">Hapus</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="modal-danger<?php echo $us['id']; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content bg-danger">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Hapus Data</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5>Anda yakin akan menghapus data user <b><?= $us['nama']; ?></b> ?</h5>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
                                                                    <a href="<?= base_url('User/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal -->
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
                <!-- //Tabel Makanan -->
            </div>
        </div>
        <!--//faq-->