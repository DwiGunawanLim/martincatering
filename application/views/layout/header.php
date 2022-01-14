<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Martin Catering</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?= base_url('assets/'); ?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="<?= base_url('assets/'); ?>css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?= base_url('assets/'); ?>css/font-awesome.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>js/jquery.min.js"> </script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"> </script>

    <!-- Mainly scripts -->
    <script src="<?= base_url('assets/'); ?>js/jquery.metisMenu.js"></script>
    <script src="<?= base_url('assets/'); ?>js/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>js/custom.js"></script>
    <script src="<?= base_url('assets/'); ?>js/screenfull.js"></script>
    <script>
        $(function() {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function() {
                screenfull.toggle($('#container')[0]);
            });



        });
    </script>
    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>js/gmaps.js"></script>
</head>

<body>
    <div id="wrapper">
        <!--  -->
        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1> <a class="navbar-brand" href="<?= base_url('Dashboard') ?>">Martin Catering</a></h1>
            </div>
            <div class=" border-bottom">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="drop-men">
                    </ul>
                    <ul class="nav_1 navbar-nav navbar-nav-right">
                        <?php if ($user['role'] == 'User') { ?>
                            <!-- keranjang -->
                            <li class="dropdown" style="margin-top: 1rem; margin-right: 1rem;">
                                <a class="nav-link count-indicator" href="<?= base_url('Profil/detail') ?>">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="badge badge-primary"><?= $jlh; ?></span>
                                </a>
                            </li>
                            <!-- //keranjang -->
                            <!-- Status -->
                            <li class="dropdown nav-item no-arrow mx-1" style="margin-top: 1rem; margin-right: 1rem;">
                                <a class="nav-link dropdown-toggle" href="<?= base_url('Profil/pembelian') ?>">
                                    <i class="fa fa-history fa-fw"></i>
                                    <span class="badge badge-danger badge-counter">!</span>
                                </a>
                            </li>
                            <!-- //Status -->
                        <?php } ?>

                        <!-- Profile -->
                        <li class="dropdown" style="margin-top: 0.4rem;">
                            <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown">
                                <span class="name-caret"><?= $user['nama']; ?><i class="caret"></i></span>
                                <img style="height: 3rem; width: 3rem; margin-right: 3rem;" class="profile-user-img img-circle" src="<?= base_url('assets/images/profile/') . $user['gambar']; ?>">
                            </a>
                            <ul class="dropdown-menu " role="menu">
                                <?php if ($user['role'] == 'User') { ?>
                                    <li><a href="<?= base_url('profil/edit/') . $user['id'];  ?>"><i class="fa fa-user"></i>Edit Profile</a></li>
                                    <li><a href="<?= base_url('Profil/detail'); ?>"><i class="fa fa-shopping-cart"></i>Keranjang</a></li>
                                <?php } else { ?>
                                    <li><a href="<?= base_url('user/edit/') . $user['id'];  ?>"><i class="fa fa-user"></i>Edit Profile</a></li>
                                <?php } ?>
                                <li><a href="<?= base_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        <!-- Profile -->
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <div class="clearfix">

                </div>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <?php if ($user['role'] == 'Admin') { ?>
                                <li>
                                    <a href="<?= base_url('Dashboard'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                                </li>

                                <li>
                                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">User</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="<?= base_url('User'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i>Daftar User</a></li>
                                        <li><a href="<?= base_url('User/tambah'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-plus nav_icon"></i>Tambah User</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cutlery nav_icon"></i> <span class="nav-label">Makanan</span><span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="<?= base_url('Makanan') ?>" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i>Daftar Makanan</a></li>
                                        <li><a href="<?= base_url('Makanan/tambah') ?>" class=" hvr-bounce-to-right"><i class="fa fa-plus nav_icon"></i>Tambah Makanan</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="<?= base_url('Penjualan'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-cart-plus nav_icon "></i><span class="nav-label">Penjualan</span> </a>
                                </li>
                            <?php } else { ?>
                                <li>
                                    <a href="<?= base_url('Profil/'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon "></i><span class="nav-label">Profile</span> </a>
                                </li>

                                <li>
                                    <a href="<?= base_url('Profil/makanan'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-cutlery nav_icon "></i><span class="nav-label">Makanan</span> </a>
                                </li>

                                <li>
                                    <a href="<?= base_url('Profil/detail'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-shopping-cart nav_icon "></i><span class="nav-label">Keranjang</span> </a>
                                </li>

                                <li>
                                    <a href="<?= base_url('auth/logout'); ?>" class=" hvr-bounce-to-right"><i class="fa fa-sign-out nav_icon "></i><span class="nav-label">Logout</span> </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashboard-1">
            <div class="content-main">