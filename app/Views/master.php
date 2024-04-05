<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>NETWORKING APP</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/main.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/color.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">

                <span class="mh-text">
                    <a title="" href="<?= site_url('home') ?>">Network App</a>
                </span>

            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>

        </div>
        <!-- responsive header -->
        <div class="responsive-header mobile-menu">
            <div class="mh-head first Sticky">
                <ul class="mobile-ul">
                    <li>
                        <i class="ti-user"></i><br>
                        <a href="<?= url_to('profile') ?>" title="">Profile</a>
                    </li>
                    <li>
                        <i class="ti-comments-smiley"></i><br>
                        <a href="#" title="">Buddies</a>
                    </li>
                    <li>
                        <i class="ti-share"></i><br>
                        <a href="#" title="">Discover</a>
                    </li>
                    <li>
                        <i class="ti-settings"></i><br>
                        <a href="<?= url_to('account_settings') ?>" title="">Settings</a>
                    </li>

                    <li>
                        <i class="ti-power-off"></i><br>
                        <a href="<?= site_url('logout') ?>" title="">Logout</a>
                    </li>
                </ul>
            </div>


        </div>
        <!-- responsive header -->

        <div class="topbar stick">
            <div class="logo">
                <a title="" href="<?= url_to('home') ?>">Network App</a>
            </div>

            <div class="top-area">
                <div class="top-search">
                    <form method="post" class="">
                        <input type="text" placeholder="Search Friend">
                        <button data-ripple><i class="ti-search"></i></button>
                    </form>
                </div>
                <ul class="setting-area">
                    <li>
                        <a href="index.html" title="Home"><i class="ti-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span>4 New Notifications</span>
                        </div>
                    </li>
                    <li>
                        <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                        <div class="dropdowns">
                            <span>5 New Messages</span>
                        </div>
                    </li>
                    <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                        <div class="dropdowns languages">
                            <a href="#" title=""><i class="ti-check"></i>English</a>
                            <a href="#" title="">Arabic</a>
                            <a href="#" title="">Dutch</a>
                            <a href="#" title="">French</a>
                        </div>
                    </li>
                </ul>
                <div class="user-img">
                    <img src="<?= base_url('assets/images/resources/admin.jpg') ?>" alt="">
                </div>

            </div>
        </div>
        <!-- topbar -->
        <?= $this->renderSection('content') ?>

    </div>
    <script data-cfasync="false" src="<?= base_url('assets/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/script.js') ?>"></script>
    <script src="<?= base_url('assets/js/map-init.js') ?>"></script>
</body>


</html>