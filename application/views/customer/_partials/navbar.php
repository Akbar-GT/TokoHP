<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="<?= base_url('customer') ?>" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-inline text-gray-600">Pengaturan</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url('auth') ?>">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>

</nav>