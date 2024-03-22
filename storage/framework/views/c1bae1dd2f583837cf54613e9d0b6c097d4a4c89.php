<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <!-- Elite Able logo -->
        <a href="dashboard" class="b-brand">
            <div class="b-bg">
                C
            </div>
            <span class="b-title">Cloud Indexing</span>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <!-- Main navigation links -->
        <a href="#!" class="mob-toggler"></a>
        <ul class="navbar-nav mr-auto">
            <!-- Search bar -->
            <li class="nav-item">
                <div class="main-search">
                    <div class="input-group">
                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                        <a href="#!" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>
                        <span class="input-group-append search-btn btn btn-primary">
                            <i class="feather icon-search input-group-text"></i>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
        <!-- User profile dropdown -->
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                            <!-- User name and level -->
                            <?php echo e(auth()->user()->name); ?>

                            <br>
                            <small><?php echo e(auth()->user()->level); ?></small>
                        </div>

                        <ul class="pro-body">
                            <!-- Dropdown items -->
                            <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                            <!-- Logout -->
                            <li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<?php /**PATH C:\laragon\www\contoh\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>