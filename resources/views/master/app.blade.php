<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Monitoring Air dan Suhu Kolam Ikan</title>

    <meta name="description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="OneUI">
    <meta property="og:description"
        content="OneUI - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->


    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css') }}">

    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('css/oneui.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Header -->
            <div class="content-header border-bottom">
                <!-- User Avatar -->
                <a class="img-link me-1" href="javascript:void(0)">
                    <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                </a>
                <!-- END User Avatar -->

                <!-- User Info -->
                <div class="ms-2">
                    <a class="text-dark fw-semibold fs-sm" href="javascript:void(0)">John Smith</a>
                </div>
                <!-- END User Info -->

                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="ms-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout"
                    data-action="side_overlay_close">
                    <i class="fa fa-fw fa-times"></i>
                </a>
                <!-- END Close Side Overlay -->
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="content-side">
                <!-- Side Overlay Tabs -->
                <div class="block block-transparent pull-x pull-t">
                    <ul class="nav nav-tabs nav-tabs-block nav-justified" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" id="so-overview-tab" data-bs-toggle="tab"
                                data-bs-target="#so-overview" role="tab" aria-controls="so-overview"
                                aria-selected="true">
                                <i class="fa fa-fw fa-coffee text-gray opacity-75 me-1"></i> Overview
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" id="so-sales-tab" data-bs-toggle="tab"
                                data-bs-target="#so-sales" role="tab" aria-controls="so-sales"
                                aria-selected="false">
                                <i class="fa fa-fw fa-chart-line text-gray opacity-75 me-1"></i> Sales
                            </button>
                        </li>
                    </ul>
                    <div class="block-content tab-content overflow-hidden">
                        <!-- Overview Tab -->
                        <div class="tab-pane pull-x fade fade-left show active" id="so-overview" role="tabpanel"
                            aria-labelledby="so-overview-tab" tabindex="0">
                            <!-- Activity -->
                            <div class="block block-transparent">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Recent Activity</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Activity List -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale ($15)</div>
                                                    <div>Admin Template</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-pencil-alt text-info"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">You edited the file</div>
                                                    <div>Documentation.doc</div>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-trash text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Project deleted</div>
                                                    <div>Line Icon Set</div>
                                                    <small class="text-muted">4 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Activity List -->
                                </div>
                            </div>
                            <!-- END Activity -->

                            <!-- Online Friends -->
                            <div class="block block-transparent">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Online Friends</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Users Navigation -->
                                    <ul class="nav-items mb-0">
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar5.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Amber Harvey</div>
                                                    <div class="text-muted">Copywriter</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar13.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Jose Mills</div>
                                                    <div class="text-muted">Web Developer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar2.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-success"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Danielle Jones</div>
                                                    <div class="text-muted">Web Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar5.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Lori Grant</div>
                                                    <div class="text-muted">Photographer</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="d-flex py-2" href="javascript:void(0)">
                                                <div class="me-3 ms-2 overlay-container overlay-bottom">
                                                    <img class="img-avatar img-avatar48"
                                                        src="assets/media/avatars/avatar9.jpg" alt="">
                                                    <span
                                                        class="overlay-item item item-tiny item-circle border border-2 border-white bg-warning"></span>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Jack Greene</div>
                                                    <div class="text-muted">Graphic Designer</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- END Users Navigation -->
                                </div>
                            </div>
                            <!-- END Online Friends -->

                            <!-- Quick Settings -->
                            <div class="block block-transparent mb-0">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Quick Settings</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option"
                                            data-action="content_toggle"></button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <!-- Quick Settings Form -->
                                    <form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-2">
                                                Online Status
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check1" name="so-settings-check1" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check1">Show
                                                    your status to all</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-2">
                                                Auto Updates
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check2" name="so-settings-check2" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check2">Keep up
                                                    to date</label>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-1">
                                                Application Alerts
                                            </p>
                                            <div class="space-y-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="so-settings-check3" name="so-settings-check3" checked>
                                                    <label class="form-check-label fs-sm"
                                                        for="so-settings-check3">Email Notifications</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="so-settings-check4" name="so-settings-check4" checked>
                                                    <label class="form-check-label fs-sm" for="so-settings-check4">SMS
                                                        Notifications</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <p class="fs-sm fw-semibold mb-1">
                                                API
                                            </p>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="so-settings-check5" name="so-settings-check5" checked>
                                                <label class="form-check-label fs-sm" for="so-settings-check5">Enable
                                                    access</label>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Quick Settings Form -->
                                </div>
                            </div>
                            <!-- END Quick Settings -->
                        </div>
                        <!-- END Overview Tab -->

                        <!-- Sales Tab -->
                        <div class="tab-pane pull-x fade fade-right" id="so-sales" role="tabpanel"
                            aria-labelledby="so-sales-tab" tabindex="0">
                            <div class="block block-transparent mb-0">
                                <!-- Stats -->
                                <div class="block-content">
                                    <div class="row items-push pull-t">
                                        <div class="col-6">
                                            <div class="fs-sm fw-semibold text-uppercase">Sales</div>
                                            <a class="fs-lg" href="javascript:void(0)">22.030</a>
                                        </div>
                                        <div class="col-6">
                                            <div class="fs-sm fw-semibold text-uppercase">Balance</div>
                                            <a class="fs-lg" href="javascript:void(0)">$4.589,00</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- END Stats -->

                                <!-- Today -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="fs-sm fw-semibold text-uppercase">Today</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="ext-muted">$996</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $249</div>
                                                    <small class="text-muted">3 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $129</div>
                                                    <small class="text-muted">50 min ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">2 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $499</div>
                                                    <small class="text-muted">3 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END Today -->

                                <!-- Yesterday -->
                                <div class="block-content block-content-full block-content-sm bg-body-light">
                                    <div class="row">
                                        <div class="col-6">
                                            <span class="fs-sm fw-semibold text-uppercase">Yesterday</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="text-muted">$765</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <ul class="nav-items push">
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $249</div>
                                                    <small class="text-muted">26 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-minus text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Product Purchase - $50</div>
                                                    <small class="text-muted">28 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">29 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-minus text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">Paypal Withdrawal - $300</div>
                                                    <small class="text-muted">37 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $129</div>
                                                    <small class="text-muted">39 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $119</div>
                                                    <small class="text-muted">45 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                                <div class="flex-shrink-0 me-3 ms-2">
                                                    <i class="fa fa-fw fa-plus text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 fs-sm">
                                                    <div class="fw-semibold">New sale! + $499</div>
                                                    <small class="text-muted">46 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <!-- More -->
                                    <div class="text-center">
                                        <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                            <i class="fa fa-arrow-down opacity-50 me-1"></i> Load More..
                                        </a>
                                    </div>
                                    <!-- END More -->
                                </div>
                                <!-- END Yesterday -->
                            </div>
                        </div>
                        <!-- END Sales Tab -->
                    </div>
                </div>
                <!-- END Side Overlay Tabs -->
            </div>
            <!-- END Side Content -->
        </aside>
        <!-- END Side Overlay -->


        <!-- Sidebar -->
        <!--
          Sidebar Mini Mode - Display Helper classes
      
          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element
      
          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
      -->
        @include('particle.nav')
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            @include('particle.header')
            <!-- END Header Content -->

            <!-- Header Search -->

            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>

        @yield('content')

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Tugas Akhir <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="#"
                            target="_blank">Risky Anugerah</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">Aplikasi
                            Monitoring Kolam Ikan</a>
                        &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        OneUI JS
    
        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{ asset('js/oneui.app.min.js') }}"></script>

    <!-- Page JS Plugins -->


    <!-- Page JS Code -->
    {{-- <script src="{{ asset('js/pages/be_pages_dashboard.min.js') }}"></script> --}}
    <script src="{{ asset('js/plugins/chart.js/chart.min.js') }}"></script>
    {{-- @include('particle.jschart') --}}

    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>

    <script src="{{ asset('js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons-pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables-buttons/buttons.html5.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/be_tables_datatables.min.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($msg = Session::get('success'))
        {{-- <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div> --}}
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Horeee!!!',
                text: '{{ $msg }}',
                timer: 3000,
                showConfirmButton: false
            })
        </script>
    @endif

    <script>
        $('.button').on('click', function() {
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin hapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"
            }).then(result => {
                //jika klik ya maka arahkan ke proses.php
                if (result.isConfirmed) {
                    window.location.href = getLink;
                }
            })
            return false;
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#modal-block-fromright').on('show.bs.modal', function(event) {
                // event.relatedtarget menampilkan elemen mana yang digunakan saat diklik.
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var idd = button.data('idd')
                var suhu = button.data('suhu')
                var ph = button.data('ph')
                var stph = button.data('stph')
                var stsuhu = button.data('stsuhu')
                var modal = $(this)

                console.log("PH : " + stph);
                console.log("Suhu : " + stsuhu);
                var status;
                if (stph == 1 && stsuhu == 1) {
                    status = "Normal"
                    console.log(status)
                } else if (stph == 0 && stsuhu == 1) {
                    status = "Ph Tidak Normal"
                    console.log(status)
                } else if (stph == 1 && stsuhu == 0) {
                    status = "Suhu Tidak Normal"
                    console.log(status)
                } else {
                    status = "Warning"
                    console.log(status)
                }

                modal.find('#idph').val(id)
                modal.find('#idsuhu').val(idd)
                modal.find('#suhu').val(suhu)
                modal.find('#ph').val(ph)
                modal.find('#status').val(status)
            });



            $("#suhu, #ph").keyup(function() {
                var textsuhu = $("#suhu").val()
                var textph = $("#ph").val()
                let stat = $("#status").val()
                if ((textph >= 7 && textph <= 8) && (textsuhu >= 22 && textsuhu <= 33)) {
                    stat = "Normal";
                    $("#status").val(stat);
                    $("#ssh").val("1");
                    $("#sph").val("1");
                    $("#deph").val("PH Normal")
                    $("#desh").val("SUHU Normal")
                    console.log(stat);
                    console.log(textph);
                    console.log(textsuhu);
                } else if ((textph >= 7 && textph <= 8) && (textsuhu < 22 || textsuhu > 33)) {
                    stat = "Suhu Tidak Normal";
                    $("#status").val(stat);
                    $("#ssh").val("0");
                    $("#sph").val("1");
                    $("#deph").val("PH Normal")
                    $("#desh").val("SUHU Tidak Normal")
                    console.log(stat);
                }
                 else if ((textph < 7 || textph > 8) && (textsuhu >= 22 && textsuhu <= 33)) {
                    
                    stat = "PH Tidak Normal";
                    $("#status").val(stat);
                    $("#ssh").val("0");
                    $("#sph").val("1");
                    $("#deph").val("PH Tidak Normal")
                    $("#desh").val("SUHU Normal")
                    console.log(stat);
                }
                else{
                    stat = "Warning";
                    $("#status").val(stat);
                    $("#ssh").val("0");
                    $("#sph").val("0");
                    $("#deph").val("PH Tidak Normal")
                    $("#desh").val("SUHU Tidak Normal")
                    console.log(stat);
                }


            })
        })
    </script>




</body>

</html>
