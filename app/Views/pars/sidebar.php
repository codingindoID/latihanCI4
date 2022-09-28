<?php
$menu = ['home', 'input'];
?>

<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <div class="sidebar">

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= site_url('tes') ?>" class="nav-link <?= $active == 'tes' ? 'active' : '' ?>">
                        <i class="nav-icon icofont-home"></i>
                        <p>
                            HOME
                        </p>
                    </a>
                </li>
                <li class="nav-item <?= (in_array($active, $menu, true)) ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= (in_array($active, $menu, true)) ? 'active' : '' ?>">
                        <i class="nav-icon icofont-contrast"></i>
                        <p>
                            MENU
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= site_url() ?>" class="nav-link <?= $active == 'home' ? 'active' : '' ?>">
                                <i class="icofont-attachment"></i>
                                <p>home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('form') ?>" class="nav-link <?= $active == 'input' ? 'active' : '' ?>">
                                <i class="icofont-calendar"></i>
                                <p>input</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('logout') ?>" class="nav-link">
                        <i class="nav-icon icofont-power"></i>
                        <p>
                            LOGOUT
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>