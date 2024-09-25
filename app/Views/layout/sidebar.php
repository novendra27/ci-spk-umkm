        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url("assets") ?>/img/logo_uin_malang.png" alt="UIN Malang Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
                <span class="brand-text font-weight-light">TI UIN Malang</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Master Usaha
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/jenisusaha" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jenis Usaha</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dataumkm" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data UMKM</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datakriteria" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Kriteria</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/databobot" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Bobot</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>