<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar theme-horizontal">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
                <div class="b-bg">C</div>
                <span class="b-title">Cloud Indexing</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
            <ul class="nav pcoded-inner-navbar sidenav-inner">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                    <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Other</label>
                </li>
                <li data-username="Index Field" class="nav-item">
                    <a href="<?php echo e(route('indexfield.index')); ?>" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Index Field</span>
                    </a>
                </li>
                <!-- Record Type -->
                <li data-username="Record Type" class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link">
                      <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                      <span class="pcoded-mtext">Record Type</span>
                    </a>

                <li data-username="List" class="nav-item pcoded-hasmenu">
                    <a href="#" class="nav-link">
                      <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                      <span class="pcoded-mtext">List</span>
                    </a>
                  </li>

                  <li data-username="Register" class="nav-item pcoded-hasmenu">
                    <a href="<?php echo e(route('register1.index')); ?>" class="nav-link">
                      <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                      <span class="pcoded-mtext">Register</span>
                    </a>
                  </li>
                <!-- Indexing -->
                <li data-username="Indexing" class="nav-item">
                    <a href="<?php echo e(route('indexing.index1')); ?>" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-file-minus"></i></span>
                        <span class="pcoded-mtext">Indexing</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\contoh\resources\views/layouts/mainbar.blade.php ENDPATH**/ ?>