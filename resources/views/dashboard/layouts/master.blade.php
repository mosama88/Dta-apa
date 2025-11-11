<!doctype html>
<html lang="en" dir="rtl">

<head>
    @include('dashboard.layouts.head')
</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <div class="page-wrapper toggled">
        <!-- sidebar-wrapper -->
        @include('dashboard.layouts.sidebar')
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <!-- Top Header -->
     @include('dashboard.layouts.navbar')
            <!-- Top Header -->

            <div class="container-fluid">
                <div class="layout-specing">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h6 class="text-muted mb-1">Welcome back, Cristina!</h6>
                            <h5 class="mb-0">Dashboard</h5>
                        </div>
                    </div>

        @yield('content')
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
            @include('dashboard.layouts.footer')
            <!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- Offcanvas Start -->

    
    <!-- Offcanvas End -->

    @include('dashboard.layouts.scripts')

</body>

</html>
