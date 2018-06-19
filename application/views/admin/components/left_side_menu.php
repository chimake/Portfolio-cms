<aside class="right_menu">

    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="profile.html"><img src="<?=base_url()?>public_html/backendstyling/assets/images/profile_av.jpg" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6><?= $this->session->userdata['name']; ?></h6>
                            <p class="m-b-0"><?= mailto('dev.chimaobi@gmail.com','dev.chimaobi@gmail.com') ?></p>
                            <?= anchor('admin/user/logout','<i class="zmdi zmdi-sign-in zmdi-hc-fw"></i>') ?>

                        </div>
                    </div>
                </li>
                <li class="header">MAIN</li>
                <li>  <?= anchor('admin/page','<i class="zmdi zmdi-collection-text zmdi-hc-fw"></i><span>Pages</span>') ?></li>
                <li>  <?= anchor('admin/user','<i class="zmdi zmdi-account zmdi-hc-fw"><span>Users</span></i>') ?></li>

            </ul>
        </div>
    </div>
</aside>