<?= $this->extend('master') ?>
<?= $this->section('content') ?>

<section>
    <div class="gap gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="page-contents">
                        <div class="col-lg-3">
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
                        <!-- sidebar -->
                        <div class="col-lg-9">
                            <div class="central-meta">
                                <div class="frnds">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">People with similar interest
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fade show">
                                            <ul class="nearby-contct">
                                            <?php if (!empty($similarUsers)): ?>
                                                <?php foreach ($similarUsers as $user) : ?>
                                                    <li>
                                                        <div class="nearly-pepls">
                                                            <figure>
                                                                <a title=""><img src="<?= base_url('assets/images/resources/friend-avatar9.jpg') ?>" alt=""></a>
                                                            </figure>
                                                            <div class="pepl-info">
                                                                <h4><a title=""><?= esc($user['username']) ?></a>
                                                                </h4>
                                                                <span>
                                                                    <ul style="display: flex;">
                                                                        <?php if (!empty($user['interests']) && is_array($user['interests'])) : ?>
                                                                            <?php foreach ($user['interests'] as $interest) : ?>
                                                                                <li><?= esc($interest) ?></li>
                                                                            <?php endforeach; ?>
                                                                        <?php else : ?>
                                                                            <li>No interests specified.</li>
                                                                        <?php endif; ?>
                                                                    </ul>
                                                                </span>
                                                                <a href="#" title="" class="add-butn" data-ripple="">Connect</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endforeach; ?>
<?php else: ?>
    <p>No users with similar interests found.</p>
<?php endif; ?>

                                            </ul>

                                        </div>

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