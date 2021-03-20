<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('')}}/cms/images/favicon.ico">

    <!-- App css -->
    <link href="{{url('')}}/cms/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{url('')}}/cms/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{url('')}}/cms/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />
    @yield('styles')

    <style>
        .admin-pagination .pagination {
            padding: 10px;
        }

        .admin-pagination .pagination li {
            padding: 10px;
        }

    </style>
</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper" id="app">
        <div class="left-side-menu">
            <!-- LOGO -->
            <a href="{{route('admin.dashboard')}}" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="{{url('')}}/cms/images/logo.jpg" alt="" height="60" />
                </span>
                <span class="logo-sm">
                    <img src="{{url('')}}/cms/images/logo.jpg" alt="" height="60" />
                </span>
            </a>

            <!-- LOGO -->
            <a href="{{route('admin.dashboard')}}" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="{{url('')}}/cms/images/logo.jpg" alt="" />
                </span>
                <span class="logo-sm">
                    <img src="{{url('')}}/cms/images/logo.jpg" alt="" />
                </span>
            </a>

            <div class="h-100" id="left-side-menu-container" data-simplebar>
                <!--- Sidemenu -->
                <ul class="metismenu side-nav">
                    <li class="side-nav-title side-nav-item">Dashboard Navigation</li>
                    <li class="side-nav-item {{(request()->routeIs('admin.slider*')) ? 'mm-active' : ''}}">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Homepage </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul
                            class="side-nav-second-level mm-collapse {{(request()->routeIs('admin.slider*')) ? 'mm-show' : ''}}">
                            <li class="{{(request()->routeIs('admin.slider*')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.slider.index')}}">Sliders</a>
                            </li>
                            <li class="{{(request()->routeIs('admin.testimonial*')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.testimonial.index')}}">Testimonials</a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav-item {{(request()->routeIs('admin.service.*')) ? 'mm-active' : ''}}">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> Services </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="side-nav-second-level" aria-expanded="false">
                            <li class="{{(request()->routeIs('admin.service.index') || request()->routeIs('admin.service.create') || request()->routeIs('admin.service.edit')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.service.index')}}">All Services</a>
                            </li>
                            <li class="{{(request()->routeIs('admin.service.network.index')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.service.network.index')}}">IT Services Page</a>
                            </li>
                            <li class="{{(request()->routeIs('admin.service.development.index')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.service.development.index')}}">Software Development Page</a>
                            </li>
                            <li class="{{(request()->routeIs('admin.service.server.index')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.service.server.index')}}">Server (Hosting) Page</a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{route('admin.client.index')}}"
                            class="side-nav-link {{(request()->routeIs('admin.client.*')) ? 'active' : ''}}">
                            <i class="uil-pen"></i>
                            <span> Clients </span>
                        </a>
                    </li>
                    <li class="side-nav-item {{(request()->routeIs('admin.about*')) ? 'mm-active' : ''}}">
                        <a href="javascript: void(0);" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> About</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul
                            class="side-nav-second-level mm-collapse {{(request()->routeIs('admin.about.index')) ? 'mm-show' : ''}}">
                            <li class="{{(request()->routeIs('admin.slider*')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.about.index')}}">Main - About</a>
                            </li>
                            <li class="{{(request()->routeIs('admin.about.organization*')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.about.organization')}}">Organization</a>
                            </li>
                            <li class="{{(request()->routeIs('admin.about.collaboration*')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.about.collaboration')}}">Collaboration</a>
                            </li>
                            <li class="{{(request()->routeIs('admin.about.aim*')) ? 'mm-active' : ''}}">
                                <a href="{{route('admin.about.aim')}}">Our Aim</a>
                            </li>
                        </ul>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{route('admin.contact.index')}}"
                            class="side-nav-link {{(request()->routeIs('admin.contact.*')) ? 'active' : ''}}">
                            <i class="uil-pen"></i>
                            <span> Contacts </span>
                        </a>
                    </li>
                    <li class="side-nav-item">
                        <a href="{{route('admin.info.index')}}"
                            class="side-nav-link {{(request()->routeIs('admin.info.*')) ? 'active' : ''}}">
                            <i class="uil-pen"></i>
                            <span> Info </span>
                        </a>
                    </li>

                </ul>

                <!-- End Sidebar -->

                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -left -->
        </div>
        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="{{url('')}}/cms/images/admin.png" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Nooriwave Admin</span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                <!-- item-->
                                <a href="{{route('admin.password.change')}}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout mr-1"></i>
                                    <span>Change Password</span>
                                </a>
                                <!-- item-->
                                <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout mr-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container -->
            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            © Nooriwave ICT
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
    </div>
    <!-- END wrapper -->

    <!-- bundle -->
    <script src="{{url('')}}/cms/js/vendor.min.js"></script>

    <!-- third party js ends -->
    <script src="{{url('')}}/cms/js/app.min.js"></script>

    <!-- TINYMCE -->
    <script src="https://cdn.tiny.cloud/1/mnutthw8cmqzoshv2ow3yr3jx5wxr2ix5t9237iecoirckm9/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.tiny'
        });

    </script>

    @yield('scripts')

</body>

</html>
