        <!--banner-->
        <div class="banner">
            <h2>
                <a href="<?= base_url('Dashboard'); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
                <span>Edit Profil</span>
            </h2>
        </div>
        <!--//banner-->

        <!--faq-->
        <div class="blank">
            <!-- item card -->
            <div class="grid-form1">
                <h3>Form Ubah Data User</h3>
                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <form role="form" action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $usermodel['id']; ?>">
                            <input type="hidden" name="role" value="<?= $usermodel['role']; ?>">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama User</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="nama" value="<?= $usermodel['nama']; ?>" class="form-control1" id="nama" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Email</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" name="email" value="<?= $usermodel['email']; ?>" class="form-control1" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Foto Profil</label>
                                <div class="col-md-8">
                                    <img src="<?= base_url('assets/images/profile/') . $usermodel['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                                    <div class="input-group">
                                        <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="col-sm-8 col-sm-offset-2">
                                            <button type="submit" name="tambah" class="btn-primary btn">Submit</button>&emsp;&emsp;
                                            <a class="btn-default btn" href="<?= base_url('User') ?>">Cancel</a>&emsp;&emsp;
                                            <input type="reset" class="btn-inverse btn" placeholder="Reset" />&emsp;&emsp;
                                            <!-- Trigger Hapus -->
                                            <a data-toggle="modal" data-target="#modal-danger<?php echo $usermodel['id']; ?>" class="btn btn-danger">HAPUS AKUN</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-danger<?php echo $usermodel['id']; ?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-danger">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Hapus Data</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5>Anda yakin akan menghapus Akun Anda ?</h5>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
                                                            <a href="<?= base_url('Profil/Hapus/') . $usermodel['id']; ?>" class="btn btn-danger">Hapus</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- //item card -->
        </div>
        </div>
        <!--//faq-->