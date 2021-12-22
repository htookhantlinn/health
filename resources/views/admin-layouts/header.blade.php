<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->

    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->

    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->

    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->

    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->

    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->

    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">


    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}} ">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}} ">


    {{-- custom css --}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.7.3/tailwind.min.css'>


    {{-- toaster css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    {{-- Sweet Alert  --}}
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <script src="https://kit.fontawesome.com/ba7f482478.js" crossorigin="anonymous"></script>

    {{-- quill css --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">

            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{route('admin.dashboard_one')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src=" {{asset('dist/img/user1-128x128.jpg')}} " alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('admin.dashboard_three')}}" class="brand-link">
                <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>




                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item   {{  request()->routeIs('admin.dashboard_one') || request()->routeIs('admin.dashboard_two') ||request()->routeIs('admin.dashboard_three') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{  request()->routeIs('admin.dashboard_one') || request()->routeIs('admin.dashboard_two') ||request()->routeIs('admin.dashboard_three') ? 'active' : '' }} ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.dashboard_one')}}" class="nav-link {{  request()->routeIs('admin.dashboard_one') ? 'active' : '' }} ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.dashboard_two')}}" class="nav-link  {{  request()->routeIs('admin.dashboard_two') ? 'active' : '' }} ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.dashboard_three')}}" class="nav-link  {{  request()->routeIs('admin.dashboard_three') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.widgets')}}" class="nav-link  {{  request()->routeIs('admin.widgets') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Widgets
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>



                        <li class="nav-item   {{  request()->routeIs('doctors.index') || request()->routeIs('doctors.create') ? 'menu-open ' : '' }}">
                            <a href="#" class="nav-link {{  request()->routeIs('doctors.index') || request()->routeIs('doctors.create') ? 'active ' : '' }}">
                                <i class="fa fa-user-md" aria-hidden="true"></i>
                                <p>
                                    Doctors
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{route('doctors.index')}}" class="nav-link  {{  request()->routeIs('doctors.index') ? 'active' : '' }}">
                                        <i class="fa fa-indent" aria-hidden="true"></i>
                                        <p>Index</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('doctors.create')}}" class="nav-link  {{  request()->routeIs('doctors.create') ? 'active' : '' }}">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <p>Insert</p>
                                    </a>
                                </li>




                            </ul>
                        </li>


                        <li class="nav-item  {{ Request::is('admin/blogs') ||  Request::is('admin/blogs/*') ? 'menu-open ' : '' }} ">
                            <a href="#" class="nav-link {{  request()->routeIs('blogs.index') || request()->routeIs('blogs.create') ? 'active ' : '' }} ">
                                <i class="fas fa-blog"></i>
                                <p>
                                    Blogs <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item   ">
                                    <a href="{{route('blogs.index')}}" class="nav-link  {{  request()->routeIs('blogs.index') ? 'active' : '' }} ">
                                        <i class="fa fa-indent" aria-hidden="true"></i>
                                        <p>Index</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{route('blogs.create')}}" class="nav-link  {{  request()->routeIs('blogs.create') ? 'active' : '' }}">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        <p>Insert</p>
                                    </a>
                                </li>




                            </ul>
                        </li>

                        <li class="nav-item  {{ Request::is('admin/items') ||  Request::is('admin/items/*') ? 'menu-open ' : '' }} ">
                            <a href="#" class="nav-link {{  request()->routeIs('items.index') ? 'active ' : '' }} ">
                                <i class="fa fa-product-hunt"></i>
                                <p>
                                    Item <i class=" right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item   ">
                                    <a href="{{route('items.index')}}" class="nav-link  {{  request()->routeIs('items.index') ? 'active' : '' }} ">
                                        <i class="fa fa-indent"></i>
                                        <p>Index</p>
                                    </a>
                                </li>






                            </ul>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
