    <nav id="sidebar" class="sidebar-wrapper sidebar-dark">
        <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
            <div class="sidebar-brand">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('dashboard') }}/assets/images/logo-dark.png" height="24" class="logo-light-mode"
                        alt="">
                    <img src="{{ asset('dashboard') }}/assets/images/logo-light.png" height="24"
                        class="logo-dark-mode" alt="">
                    <span class="sidebar-colored">
                        <img src="{{ asset('dashboard') }}/assets/images/logo-light.png" height="24" alt="">
                    </span>
                </a>
            </div>

            <ul class="sidebar-menu">
                <li class="@yield('home_active')">
                    <a href="{{ route('dashboard.index') }}"><i class="ti ti-home mx-2"></i>
                        لوحة التحكم</a>
                </li>
                <li class="@yield('prosecutions_active')">
                    <a href="{{ route('dashboard.prosecutions.index') }}"><i class="fa-solid fa-tags mx-2"></i>
                        الجهات</a>
                </li>
            </ul>
            <!-- sidebar-menu  -->
        </div>
        <!-- Sidebar Footer -->
        <ul class="sidebar-footer list-unstyled mb-0">
            <li class="list-inline-item mb-0">
                <a href="https://1.envato.market/landrick" target="_blank" class="btn btn-icon btn-soft-light"><i
                        class="ti ti-shopping-cart"></i></a> <small class="text-muted fw-medium ms-1">Buy
                    Now</small>
            </li>
        </ul>
        <!-- Sidebar Footer -->
    </nav>
