<?= $this->extend('master') ?>
<?= $this->section('content') ?>


<section>
    <div>
        <h3 style="margin: 20px;">Update Account Info</h3>
    </div>

</section>

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
                                    <a href="authentication.html" title="">Logout</a>
                                </li>
                            </ul>
                        </div>

                    </aside>
                </div>
                <div class="col-lg-12">
                    <div class="row" id="page-contents">
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-lock"></i>Edit Details</h5>
                                    <?php if (session()->getFlashdata('message')) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('message') ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (session()->getFlashdata('error')) : ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?>
                                    <form action="<?= site_url('user/update_account_settings') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-group half">
                                            <input type="text" required="required" value="<?= esc($user['username']) ?>" name="username"/>
                                            <label class="control-label" for="input">Name</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" required="required" value="<?= esc($user['email']) ?>" name="email"/>
                                            <label class="control-label" for="input"><a href="" class="email">Email</a></label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="required" value="<?= esc($user['phone']) ?>" name="phone"/>
                                            <label class="control-label" for="input">Phone No.</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="submit-btns">
                                            <button type="submit" class="mtr-btn"><span>Update</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="editing-info">
                                    <h5 class="f-title"><i class="ti-lock"></i>Change Password</h5>
  <?php if (session()->getFlashdata('passmessage')) : ?>
                                        <div class="alert alert-success">
                                            <?= session()->getFlashdata('passmessage') ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (session()->getFlashdata('passerror')) : ?>
                                        <div class="alert alert-danger">
                                            <?= session()->getFlashdata('passerror') ?>
                                        </div>
                                    <?php endif; ?>
                                    <form action="<?= site_url('user/update_password_account_settings') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="form-group">
                                            <input type="password" id="input" required="required" name="new_password"/>
                                            <label class="control-label" for="input">New password</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required="required" name="password_confirm"/>
                                            <label class="control-label" for="input">Confirm password</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required="required" name="current_password"/>
                                            <label class="control-label" for="input">Current password</label><i class="mtrl-select"></i>
                                        </div>
                                        <div class="submit-btns">
                                            <button type="submit" class="mtr-btn"><span>Update</span></button>
                                        </div>
                                    </form>
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