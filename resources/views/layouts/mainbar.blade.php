<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar theme-horizontal">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="{{ route('dashboard') }}" class="nav-link">
                <div class="b-bg">E</div>
                <span class="b-title">Elite Able</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
            <ul class="nav pcoded-inner-navbar sidenav-inner">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Other</label>
                </li>
                <li data-username="Index Field" class="nav-item">
                    <a href="{{ route('products.index') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Index Field</span>
                    </a>
                </li>
                <li data-username="Record type" class="nav-item pcoded-hasmenu">
                    <a href="{{ route('records.index1') }}" class="nav-link">
                        <span class="pcoded-micon"><i class="feather icon-menu"></i></span>
                        <span class="pcoded-mtext">Record type</span>
                    </a>

                </li>
                <li data-username="Indexing" class="nav-item">
                    <a href="../doc/dashboard" class="nav-link" target="_blank">
                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                        <span class="pcoded-mtext">Indexing</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
