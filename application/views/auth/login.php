<body>
    <div class="login">
        <h1><a href="index.html">Martin Catering</a></h1>
        <div class="login-bottom">
            <h2>Login</h2>
            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                <div class="col-md-6">

                    <div class="login-mail">
                        <input type="text" value="<?= set_value('email'); ?>" id="email" name="email" placeholder="Email">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

                    <div class="login-mail">
                        <input type="password" value="<?= set_value('nama'); ?>" name="password" id="password" placeholder="Password">
                        <i class="fa fa-lock"></i>
                    </div>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

                </div>
                <div class="col-md-6 login-do">
                    <label class="hvr-shutter-in-horizontal login-sub">
                        <input type="submit" class="btn btn-primary btn-user btn-block" value="login">
                    </label>
                    <p>Do not have an account?</p>
                    <a href="<?= base_url(); ?>auth/registrasi" class="hvr-shutter-in-horizontal">Signup</a>
                </div>
                <div class="clearfix"> </div>
            </form>
        </div>
    </div>