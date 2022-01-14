        <!--banner-->
        <div class="banner">
            <h2>
                <a href="<?= base_url('Dashboard'); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
                <a href="<?= base_url('User'); ?>">User</a>
                <i class="fa fa-angle-right"></i>
                <span>Tambah</span>
            </h2>
        </div>
        <!--//banner-->

        <!--faq-->
        <div class="blank">
            <!-- item card -->
            <div class="grid-form1">
                <h3>Form Tambah User</h3>
                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <form role="form" action="" class="form-horizontal" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama User</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control1" id="nama" placeholder="Nama">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Email</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control1" id="email" placeholder="Email">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" name="password1" class="form-control1" id="password1" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Repeat Password</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <input type="password" name="password2" class="form-control1" id="password2" placeholder="Ulangi Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Foto Profil</label>
                                <div class="col-md-8">
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