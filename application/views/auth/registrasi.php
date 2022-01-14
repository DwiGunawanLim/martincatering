<body>
    <div class="login">
        <h1><a href="index.html">Martin Catering</a></h1>
        <div class="login-bottom">
            <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>" enctype="multipart/form-data">
                <h2>Register</h2>
                <div class="col-md-6">
                    <div class="login-mail">
                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" id="nama" placeholder="Nama Lengkap">
                        <i class="fa fa-user"></i>
                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="login-mail">
                        <input type="password" id="password1" name="password1" placeholder="Password">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="login-mail">
                        <input type="password" id="password2" name="password2" placeholder="Ulangi Password">
                        <i class="fa fa-lock"></i>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="login-mail">
                        <input type="text" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
                        <i class="fa fa-envelope"></i>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="col-md-6 login-do">
                    <label class="hvr-shutter-in-horizontal login-sub">
                        <input type="submit" value="Submit">
                    </label>
            </form>
            <p>Already register</p>
            <a href="<?= base_url('auth/'); ?>" class="hvr-shutter-in-horizontal">Login</a>
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>