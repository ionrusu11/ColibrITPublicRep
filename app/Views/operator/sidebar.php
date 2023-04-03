<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="<?= base_url('/operator') ?>" aria-expanded="false" data-target="#submenu-1"
                           aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span
                                    class="badge badge-success">6</span></a>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //= base_url('admin/operators')?><!--" aria-expanded="false" data-target="#submenu-2"-->
<!--                           aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Operators List</a>-->
<!---->
<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('operator/reports')?>" aria-expanded="false" data-target="#submenu-2"
                           aria-controls="submenu-2"><i class="fas fa-fw fa-chart-pie"></i>Posts</a>
                    </li>

                            </ul>
                        </div>
                    </li>

                </ul>
        </nav>
    </div>
</div>
