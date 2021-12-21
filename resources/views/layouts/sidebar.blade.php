<div id="sidebar-left" class="sidebar-left bg-dark text-light pl-0 pr-0">
    <div class="collapse-wrapper">
        <!-- Logo -->
        <div class="logo px-4 pt-5 pb-2">
            <a href="">
                <div class="text-center text-nowrap">
                <img src="assets/custom/1.0.0/images/logo.jpg" class="rounded-circle" height="100px">
                    <h6 class="logo-title text-uppercase mt-3">@yield('sidebartitle')</h6>
                </div>
            </a>
        </div>
        <!-- /Logo -->

        <!-- Logo mobile -->
        <div class="logo-mobile pt-4 pb-4 w-100">
            <a href="index.html">
                <div class="text-center text-nowrap">
                    <i class="fa fa-spin fa-play-circle rounded-circle" aria-hidden="true"></i>
                </div>
            </a>
        </div>
        <!-- /Logo mobile -->

        <nav class="sidebar-nav">
            <!-- Sidebar Menu -->
            <div class="mb-1 text-uppercase d-none d-lg-block text-muted">
                <small>List Menu</small>
            </div>
            <ul id="sidebarNav" class="nav nav-dark flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('katalog.index') }}">
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        <span class="d-none d-lg-inline">Menu Katalog</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('order.index') }}">
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                        <span class="d-none d-lg-inline">Menu Order</span>
                    </a>
                </li>
            </ul>
            <!-- /Sidebar Menu -->
        </nav>
    </div>
    <!-- /Sidebar Widget -->
</div>