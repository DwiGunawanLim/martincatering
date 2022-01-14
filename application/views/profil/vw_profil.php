<!--banner-->
<div class="banner">
    <h2>
        <span>Home</span>
    </h2>
</div>
<!--//banner-->

<!--faq-->
<div class="blank">

    <div class="blank-page">

        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>" style="height: 10rem;" class="card-img">
                </div>
                <div class="col-md-20">
                    <div class="card-body">
                        <h1 class="card-title"><?= $user['nama'] ?></h1>
                        <h4 class="card-text"><?= $user['email'] ?></h4>
                        <p class="card-text">Anggota Sejak <?= date('d F Y', $user['date_created']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--//faq-->