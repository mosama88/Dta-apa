<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>النيابة الادارية - 419</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="website" content="https://shreethemes.in" />
    <meta name="Version" content="v4.8.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard') }}/assets/images/favicon.ico" />
    <!-- Css -->
    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard') }}/assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboard') }}/assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('dashboard') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard') }}/assets/libs/@iconscout/unicons/css/line.css" type="text/css"
        rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('dashboard') }}/assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />

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

    <!-- ERROR PAGE -->
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 text-center">
                    <img src="{{ asset('dashboard') }}/assets/images/404.svg" style="max-width: 500px;" alt="">
                    <div class="text-uppercase mt-4 display-5 fw-semibold">لم يتم العثور على الصفحة</div>
                    <div class="text-capitalize text-dark mb-4 error-page"></div>
                    <p class="text-muted para-desc mx-auto">
                        عذرًا! الصفحة التي تبحث عنها غير موجودة أو قد تم نقلها. من فضلك ارجع للصفحة الرئيسية أو جرّب
                        البحث مرة أخرى.
                    </p>

                </div><!--end row-->

                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="{{ url('/') }}" class="btn btn-primary mt-4">الصفحة الرئيسية</a>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
    </section><!--end section-->
    <!-- ERROR PAGE -->

    <!-- javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboard') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/libs/feather-icons/feather.min.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('dashboard') }}/assets/js/plugins.init.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/app.js"></script>

</body>

</html>
