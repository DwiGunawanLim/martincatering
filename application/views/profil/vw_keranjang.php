<!--banner-->
<div class="banner">
    <h2>
        <a href="<?= base_url('Profil'); ?>">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Detail</span>
    </h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">

    <div class="blank-page">

        <!-- Begin Page Content -->
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

        <div class="row">
            <div class="col-md-4">
                <img src="<?= base_url('assets/images/makanan/') . $makanan['gambar']; ?>" style="width:auto" class="img-thumbnail">
            </div>
            <div class="col-md-8">
                <form action="" method="POST">
                    <input type="hidden" name="id_makanan" value="<?= $makanan['id']; ?>">
                    <input type="hidden" name="tanggal" value="<?= date('d/m/Y') ?>">
                    <input type="hidden" name="stok" value="<?= $makanan['stok'] ?>">
                    <div class="form-group">
                        <label for="nama">Nama makanan</label>
                        <input name="nama" type="text" value="<?= $makanan['nama']; ?>" readonly class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input name="stok" value="<?= $makanan['stok']; ?>" type="text" readonly class="form-control" id="stok">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input name="harga" value="<?= $makanan['harga']; ?>" type="text" readonly class="form-control" id="harga">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" min='1'>
                        <?= form_error('jumlah', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="total">Total Harga</label>
                        <input type="text" name="total" id="total" readonly class="form-control">
                    </div>
                    <button type="submit" id="tambah" name="tambah" class="btn btn-primary float-right">Tambah Ke Keranjang</button>
                </form>
            </div>
        </div>
        <!-- <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="card-body">
                        <div class="container">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
</div>
<!--//faq-->