<?= $this->extend('master') ?>
<?= $this->section('content') ?>

<section>
    <div class="feature-photo">
        <figure><img src="<?= base_url('assets/images/resources/timeline-1.jpg') ?>" alt=""></figure>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img src="<?= base_url('assets/images/resources/user-avatar.jpg') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5>User</h5>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- top area -->

<section>
    <div class="gap gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <aside class="sidebar static">
                        <div class="widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="naves">
                                <li>
                                    <i class="ti-user"></i>
                                    <a href="<?= url_to('profile') ?>" title="">Profile</a>
                                </li>
                                <li>
                                    <i class="ti-comments-smiley"></i>
                                    <a href="#" title="">Buddies</a>
                                </li>
                                <li>
                                    <i class="ti-share"></i>
                                    <a href="#" title="">Discover</a>
                                </li>
                                <li>
                                    <i class="ti-settings"></i>
                                    <a href="<?= url_to('account_settings') ?>" title="">Settings and Privacy</a>
                                </li>

                                <li>
                                    <i class="ti-power-off"></i>
                                    <a href="<?= site_url('logout') ?>" title="">Logout</a>
                                </li>
                            </ul>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-4">
                    <div class="central-meta">
                        <div class="editing-interest">
                            <h5 class="f-title"><i class="ti-heart"></i>My interests</h5>
                            <?php if (!empty($user['interests']) && is_array($user['interests'])) : ?>
                                <ol class="interest-added">
                                    <?php foreach ($user['interests'] as $interest) : ?>
                                        <li><a href="#" title=""><?= esc($interest) ?></a><span class="remove" title="remove"><i class="fa fa-close"></i></span></li>
                                     
                                    <?php endforeach; ?>
                                </ol>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row" id="page-contents">

                        <div class="col">
                            <div class="central-meta">
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-info-alt"></i> Your Basic Information</h5>

                                    <div class="form-group half">
                                        User name
                                        <input type="text" disabled value="<?= esc($user['username']) ?>" style="color:black"/>
                                       <i class="mtrl-select"></i>
                                    </div>
                                    <div class="form-group">
                                        Email
                                        <input type="text" disabled value="<?= esc($user['email']) ?>" style="color:black"/>
                                         <i class="mtrl-select"></i>
                                    </div>
                                    <div class="form-group">
                                        Phone
                                        <input type="text" disabled value="<?= esc($user['phone']) ?>" style="color:black"/>
                                        <i class="mtrl-select"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>