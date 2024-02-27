<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-semi-dark" data-assets-path="/back/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('pageTitle')</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/back/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="/back/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/back/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/back/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/back/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/back/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/back/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/back/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/back/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="/back/assets/vendor/css/pages/card-analytics.css" />

    <!-- Helpers -->
    <script src="/back/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="/back/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/back/assets/js/config.js"></script>

    <style>
        .swal2-popup {
            font-size: .87em;
        }

        #template-customizer .template-customizer-open-btn {
            display: none !important;
        }

        .span-error {
            width: 100%;
            margin-top: 0.3rem;
            font-size: 85%;
            color: var(--bs-form-invalid-color);
        }

        .menu-inner .bx {
            flex-grow: 0;
            flex-shrink: 0;
            margin-right: 0.5rem;
            font-size: 1.25rem;
        }
    </style>

    @stack('stylesheets')

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('backend.layout.includes.menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('backend.layout.includes.navbar')
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    @yield('content')
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('backend.layout.includes.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="/back/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/back/assets/vendor/libs/popper/popper.js"></script>
    <script src="/back/assets/vendor/js/bootstrap.js"></script>
    <script src="/back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/back/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="/back/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="/back/assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="/back/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/back/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="/back/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/back/assets/js/app-ecommerce-dashboard.js"></script>

    @stack('scripts')

</body>

</html>
