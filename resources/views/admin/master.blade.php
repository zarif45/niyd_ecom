<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{asset('/')}}admin/assets/" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Materio - Bootstrap Material Design Admin Template</title>


    <meta name="description" content="" />
    <meta name="keywords" content="">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/materio-bootstrap-html-admin-template/">


    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/fonts/remixicon/remixicon.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/fonts/flag-icons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/flatpickr/flatpickr.css" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{asset('/')}}admin/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">

    <!-- Helpers -->
    <script src="{{asset('/')}}admin/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{asset('/')}}admin/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('/')}}admin/assets/js/config.js"></script>

    <!-- include summernote css/js -->
    <link href="{{asset('/')}}admin/assets/vendor/summernote/summernote.min.css" rel="stylesheet"/>
</head>

<body>


<!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">
        <!-- Menu -->
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


            <div class="app-brand demo ">
                <a href="{{route('dashboard')}}" class="app-brand-link">
      <span class="app-brand-logo demo me-1">
<span style="color:var(--bs-primary);">
  <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
    <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor" />
    <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3" />
  </svg>
</span>
</span>
                    <span class="app-brand-text demo menu-text fw-semibold ms-2">NIYD</span>
                </a>

                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                    <i class="menu-toggle-icon d-xl-block align-middle"></i>
                </a>
            </div>

            <div class="menu-inner-shadow"></div>



            <ul class="menu-inner py-1">
                <!-- Dashboards -->
                <li class="menu-item active open">
                    <a href="{{route('dashboard')}}" class="menu-link">
                        <i class="menu-icon tf-icons ri-home-smile-line"></i>
                        <div data-i18n="Dashboards">Dashboards</div>
                    </a>

                </li>

                <!-- Layouts -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ri-layout-2-line"></i>
                        <div>Category Module</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('category.create')}}" class="menu-link">
                                <div>Add Category</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('category.index')}}" class="menu-link">
                                <div>Manage Category</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Front Pages -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons ri-file-copy-line'></i>
                        <div>Sub Category Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('sub-category.create')}}" class="menu-link">
                                <div>Add Sub Category</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('sub-category.index')}}" class="menu-link">
                                <div>Manage Sub Category</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- e-commerce-app menu start -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons ri-shopping-bag-3-line'></i>
                        <div>Brand Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('brand.create')}}" class="menu-link">
                                <div>Add Brand</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('brand.index')}}" class="menu-link">
                                <div>Manage Brand</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- e-commerce-app menu end -->
                <!-- Academy menu start -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons ri-graduation-cap-line'></i>
                        <div>Unit Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('unit.create')}}" class="menu-link">
                                <div>Add Unit</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('unit.index')}}" class="menu-link">
                                <div>Manage Unit</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Academy menu end -->
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons ri-car-line'></i>
                        <div>Product Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{route('product.create')}}" class="menu-link">
                                <div>Add Product</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{route('product.index')}}" class="menu-link">
                                <div>Manage Product</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons ri-bill-line'></i>
                        <div>Order Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-invoice-list.html" class="menu-link">
                                <div>Manage Order</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons ri-user-line"></i>
                        <div>Customer Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-user-list.html" class="menu-link">
                                <div>Add Customer</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-user-list.html" class="menu-link">
                                <div>Manage Customer</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class='menu-icon tf-icons ri-lock-2-line'></i>
                        <div>User Module</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-access-roles.html" class="menu-link">
                                <div>Add User</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-access-permission.html" class="menu-link">
                                <div>Manage User</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </aside>
        <!-- / Menu -->
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0   d-xl-none ">
                    <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                        <i class="ri-menu-fill ri-24px"></i>
                    </a>
                </div>
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <div class="navbar-nav align-items-center">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler fw-normal px-0" href="javascript:void(0);">
                                <i class="ri-search-line ri-22px scaleX-n1-rtl me-1_5"></i>
                                <span class="d-none d-md-inline-block text-muted ms-1_5">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                    <!-- /Search -->





                    <ul class="navbar-nav flex-row align-items-center ms-auto">



                        <!-- Language -->
                        <li class="nav-item dropdown-language dropdown">
                            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class='ri-translate-2 ri-22px'></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-2">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="en" data-text-direction="ltr">
                                        <span class="align-middle">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="fr" data-text-direction="ltr">
                                        <span class="align-middle">French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="ar" data-text-direction="rtl">
                                        <span class="align-middle">Arabic</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-language="de" data-text-direction="ltr">
                                        <span class="align-middle">German</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Language -->

                        <!-- Style Switcher -->
                        <li class="nav-item dropdown-style-switcher dropdown">
                            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <i class='ri-22px'></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                        <span class="align-middle"><i class='ri-sun-line ri-22px me-3'></i>Light</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                        <span class="align-middle"><i class="ri-moon-clear-line ri-22px me-3"></i>Dark</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                        <span class="align-middle"><i class="ri-computer-line ri-22px me-3"></i>System</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- / Style Switcher-->

                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown">
                            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class='ri-star-smile-line ri-22px'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="dropdown-menu-header border-bottom py-50">
                                    <div class="dropdown-header d-flex align-items-center py-2">
                                        <h6 class="mb-0 me-auto">Shortcuts</h6>
                                        <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-shortcuts-add" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="ri-layout-grid-line ri-24px text-heading"></i></a>
                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-calendar-line ri-26px text-heading"></i>
                    </span>
                                            <a href="app-calendar.html" class="stretched-link">Calendar</a>
                                            <small>Appointments</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-file-text-line ri-26px text-heading"></i>
                    </span>
                                            <a href="app-invoice-list.html" class="stretched-link">Invoice App</a>
                                            <small>Manage Accounts</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-user-line ri-26px text-heading"></i>
                    </span>
                                            <a href="app-user-list.html" class="stretched-link">User App</a>
                                            <small>Manage Users</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-computer-line ri-26px text-heading"></i>
                    </span>
                                            <a href="app-access-roles.html" class="stretched-link">Role Management</a>
                                            <small>Permission</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-pie-chart-2-line ri-26px text-heading"></i>
                    </span>
                                            <a href="index.html" class="stretched-link">Dashboard</a>
                                            <small>Analytics</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-settings-4-line ri-26px text-heading"></i>
                    </span>
                                            <a href="pages-account-settings-account.html" class="stretched-link">Setting</a>
                                            <small>Account Settings</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-question-line ri-26px text-heading"></i>
                    </span>
                                            <a href="pages-faq.html" class="stretched-link">FAQs</a>
                                            <small class="text-muted mb-0">FAQs & Articles</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ri-tv-2-line ri-26px text-heading"></i>
                    </span>
                                            <a href="modal-examples.html" class="stretched-link">Modals</a>
                                            <small>Useful Popups</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-4 me-xl-1">
                            <a class="nav-link btn btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="ri-notification-2-line ri-22px"></i>
                                <span class="position-absolute top-0 start-50 translate-middle-y badge badge-dot bg-danger mt-2 border"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h6 class="mb-0 me-auto">Notification</h6>
                                        <div class="d-flex align-items-center">
                                            <span class="badge rounded-pill bg-label-primary me-2">8 New</span>
                                            <a href="javascript:void(0)" class="btn btn-text-secondary rounded-pill btn-icon dropdown-notifications-all" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ri-mail-open-line ri-20px text-body"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="small mb-1">Congratulation Lettie 🎉</h6>
                                                    <small class="mb-1 d-block text-body">Won the monthly best seller gold badge</small>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Charles Franklin</h6>
                                                    <small class="mb-1 d-block text-body">Accepted your connection</small>
                                                    <small class="text-muted">12hr ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}admin/assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">New Message ✉️</h6>
                                                    <small class="mb-1 d-block text-body">You have new message from Natalie</small>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="ri-shopping-cart-2-line"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Whoo! You have new order 🛒 </h6>
                                                    <small class="mb-1 d-block text-body">ACME Inc. made new order $1,154</small>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}admin/assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Application has been approved 🚀 </h6>
                                                    <small class="mb-1 d-block text-body">Your ABC project application has been approved.</small>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="ri-pie-chart-2-line"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Monthly report is generated</h6>
                                                    <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}admin/assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">Send connection request</h6>
                                                    <small class="mb-1 d-block text-body">Peter sent you connection request</small>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{asset('/')}}admin/assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">New message from Jane</h6>
                                                    <small class="mb-1 d-block text-body">Your have new message from Jane</small>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="ri-error-warning-line"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1 small">CPU is running high</h6>
                                                    <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ri-close-line"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="border-top">
                                    <div class="d-grid p-4">
                                        <a class="btn btn-primary btn-sm d-flex" href="javascript:void(0);">
                                            <small class="align-middle">View all notifications</small>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{asset('/')}}admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar avatar-online">
                                                    <img src="{{asset('/')}}admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0 small">John Doe</h6>
                                                <small class="text-muted">Admin</small>

                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-profile-user.html">
                                        <i class="ri-user-3-line ri-22px me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <i class="ri-settings-4-line ri-22px me-2"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                  <span class="d-flex align-items-center align-middle">
                    <i class="flex-shrink-0 ri-file-text-line ri-22px me-2"></i>
                    <span class="flex-grow-1 align-middle">Billing</span>
                    <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger h-px-20 d-flex align-items-center justify-content-center">4</span>
                  </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-pricing.html">
                                        <i class="ri-money-dollar-circle-line ri-22px me-2"></i>
                                        <span class="align-middle">Pricing</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-faq.html">
                                        <i class="ri-question-line ri-22px me-2"></i>
                                        <span class="align-middle">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="d-grid px-4 pt-2 pb-1">
                                        <a class="btn btn-danger d-flex" href="#" target="_blank" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                                            <small class="align-middle">Logout</small>
                                            <i class="ri-logout-box-r-line ms-2 ri-16px"></i>
                                        </a>
                                        <form id="logoutForm" action="{{route('logout')}}" method="POST">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->



                    </ul>
                </div>


                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper  d-none">
                    <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
                    <i class="ri-close-fill search-toggler cursor-pointer"></i>
                </div>



            </nav>
            <!-- / Navbar -->
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('body')
                </div>
                <!-- / Content -->
                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-xxl">
                        <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                            <div class="text-body mb-2 mb-md-0">
                                © <script>
                                    document.write(new Date().getFullYear())

                                </script>, made with <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> by <a href="https://themeselection.com/" target="_blank" class="footer-link">ThemeSelection</a>
                            </div>
                            <div class="d-none d-lg-inline-block">

                                <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                                <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                                <a href="https://demos.themeselection.com/materio-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>


                                <a href="https://themeselection.com/support/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

                            </div>
                        </div>
                    </div>
                </footer>
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
<script src="{{asset('/')}}admin/assets/vendor/libs/jquery/jquery.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/popper/popper.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/js/bootstrap.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/hammer/hammer.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/i18n/i18n.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/js/menu.js"></script>

<!-- endbuild -->



<!-- Vendors JS -->
<!-- Vendors JS -->
<script src="{{asset('/')}}admin/assets/vendor/libs/quill/katex.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/quill/quill.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{asset('/')}}admin/assets/js/main.js"></script>

<script src="{{asset('/')}}admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="{{asset('/')}}admin/assets/js/tables-datatables-basic.js"></script>
<!-- Page JS -->
<script src="{{asset('/')}}admin/assets/js/dashboards-analytics.js"></script>
<script src="{{asset('/')}}admin/assets/vendor/summernote/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 350,
        });
    });
</script>
<script>
    function getSubCategoryByCategory($categoryId) {
       $.ajax({
           type:"GET",
           url:"{{route('get-sub-category')}}",
           data:{'id' : $categoryId},
           DataType:'JSON',
           success:function (response) {
               console.log(response)
               var option = '';
               option +=' <option value=""> -- Select Product Sub Category -- </option>';
               $.each(response,function (key,value) {
                   option +='<option value="'+value.id+'">'+value.name+'</option>';


               });
               $('#subCategory').empty();
               $('#subCategory').append(option);


           }

       });

    }
</script>
</body>
</html>
