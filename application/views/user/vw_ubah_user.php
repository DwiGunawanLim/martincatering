        <!--banner-->
        <div class="banner">
            <h2>
                <a href="<?= base_url('Dashboard'); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
                <a href="<?= base_url('User'); ?>">User</a>
                <i class="fa fa-angle-right"></i>
                <span>Ubah</span>
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
                                <label class="col-md-2 control-label">Role</label>
                                <div class="col-sm-10">
                                    <?php if ($usermodel['role'] == "Admin") { ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role" id="role" value="Admin" checked>
                                            <label class="form-check-label" for="Admin">
                                                Admin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role" id="role" value="User">
                                            <label class="form-check-label" for="User">
                                                User
                                            </label>
                                        </div>
                                    <?php } else { ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role" id="role" value="Admin">
                                            <label class="form-check-label" for="Admin">
                                                Admin
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="role" id="role" value="User" checked>
                                            <label class="form-check-label" for="User">
                                                User
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-sm-2">
                                    <p class="help-block">
                                        <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                            <input type="reset" class="btn-inverse btn" placeholder="Reset" />
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