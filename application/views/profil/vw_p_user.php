<!--banner-->
<div class="banner">
    <h2>
        <a href="<?= base_url('Profil'); ?>">Home</a>
        <i class="fa fa-angle-right"></i>
        <span>Belanja</span>
    </h2>
    <?= $this->session->flashdata('message'); ?>
</div>
<!--//banner-->
<?php $i = 1; ?>

<!--faq-->
<div class="gallery">
    <?php foreach ($makanan as $us) : ?>
        <div class="col-md">
            <div class="gallery-img">
                <a href="<?= base_url('assets/images/makanan/') . $us['gambar']; ?>" class="b-link-stripe b-animate-go swipebox" title="Image Title">
                    <img src="<?= base_url('assets/images/makanan/') . $us['gambar']; ?>" style="height: 178px; width:238px;" class="img-responsive" alt="">
                    <span class="zoom-icon"> </span> </a>
                </a>
            </div>
            <div class="text-gallery">
                <h6><?= $us['nama'] ?></h6>
                <h6>Rp.<?= $us['harga'] ?></h6>
                <h6>Stok <a class="label label-primary"><?= $us['stok'] ?></a></h6>
                <br>
                <h6><a href="<?= base_url('Profil/keranjang/') . $us['id'] ?>" class="btn btn-success">Beli</a></h6>
            </div>
        </div>
    <?php endforeach ?>
</div>