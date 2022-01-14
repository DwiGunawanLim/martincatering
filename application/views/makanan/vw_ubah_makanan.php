        <!--banner-->
        <div class="banner">
            <h2>
                <a href="<?= base_url('Dashboard'); ?>">Home</a>
                <i class="fa fa-angle-right"></i>
                <a href="<?= base_url('Makanan'); ?>">Makanan</a>
                <i class="fa fa-angle-right"></i>
                <span>Ubah</span>
            </h2>
        </div>
        <!--//banner-->

        <!--faq-->
        <div class="blank">
            <!-- item card -->
            <div class="grid-form1">
                <h3>Form Ubah Data Makanan</h3>
                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <form role="form" action="" class="form-horizontal" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $makanan['id']; ?>">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Nama Makanan</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-cutlery"></i>
                                        </span>
                                        <input type="text" name="nama" value="<?= $makanan['nama']; ?>" class="form-control1" id="nama" placeholder="Nama">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Stok Makanan</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-plus"></i>
                                        </span>
                                        <input type="number" name="stok" value="<?= $makanan['stok']; ?>" class="form-control1" id="stok" placeholder="Stok">
                                        <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Harga Makanan</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-money"></i>
                                        </span>
                                        <input type="number" name="harga" value="<?= $makanan['harga']; ?>" class="form-control1" id="harga" placeholder="Harga">
                                        <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Foto Makanan</label>
                                <div class="col-md-8">
                                    <img src="<?= base_url('assets/images/makanan/') . $makanan['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
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
                                            <a class="btn-default btn" href="<?= base_url('Makanan') ?>">Cancel</a>&emsp;&emsp;
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