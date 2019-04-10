<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Concert</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- adminpro icon CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="assets/css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- charts CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/c3.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Tambahan css
        =============================================== -->
    <link rel="stylesheet" href="{{ asset ('/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ ('/css/jquery.dataTables.min.css') }}">
    <link rel ="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/css/dataTables.bootstrap.min.css" />
    <link rel = "stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
    <!-- modernizr JS
        ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            @include('partial.side')

        </div>
        <!-- Header top area start-->
        <div class="content-inner-all">

          
             
          @include('partial.nav')


            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard 2</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
   @yield('content')

             <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="dashboard.html">Dashboard v.1</a>
                                                </li>
                                                <li><a href="dashboard-2.html">Dashboard v.2</a>
                                                </li>
                                                <li><a href="analytics.html">Analytics</a>
                                                </li>
                                                <li><a href="widgets.html">Widgets</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="inbox.html">Inbox</a>
                                                </li>
                                                <li><a href="view-mail.html">View Mail</a>
                                                </li>
                                                <li><a href="compose-mail.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Miscellaneous <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="profile.html">Profile</a>
                                                </li>
                                                <li><a href="contact-client.html">Contact Client</a>
                                                </li>
                                                <li><a href="contact-client-v.1.html">Contact Client v.1</a>
                                                </li>
                                                <li><a href="project-list.html">Project List</a>
                                                </li>
                                                <li><a href="project-details.html">Project Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="captcha.html">Captcha</a>
                                                </li>
                                                <li><a href="checkout.html">Checkout</a>
                                                </li>
                                                <li><a href="contact.html">Contacts</a>
                                                </li>
                                                <li><a href="review.html">Review</a>
                                                </li>
                                                <li><a href="order.html">Order</a>
                                                </li>
                                                <li><a href="comment.html">Comment</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area des-none mg-b-30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Dashboard</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- income order visit user Start -->
         <!--    <div class="income-order-visit-user-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Income</h2>
                                        <div class="main-income-phara">
                                            <p>Monthly</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span>$</span><span class="counter">60888200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    <div class="income-range">
                                        <p>Total income</p>
                                        <span class="income-percentange">98% <i class="fa fa-bolt"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Orders</h2>
                                        <div class="main-income-phara order-cl">
                                            <p>Annual</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">72320</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline6"></span>
                                        </div>
                                    </div>
                                    <div class="income-range order-cl">
                                        <p>New Orders</p>
                                        <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>Visitor</h2>
                                        <div class="main-income-phara visitor-cl">
                                            <p>Today</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">7888200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline2"></span>
                                        </div>
                                    </div>
                                    <div class="income-range visitor-cl">
                                        <p>New Visitor</p>
                                        <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                                <div class="income-title">
                                    <div class="main-income-head">
                                        <h2>User activity</h2>
                                        <div class="main-income-phara low-value-cl">
                                            <p>Low Value</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><span class="counter">88200</span></h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline5"></span>
                                        </div>
                                    </div>
                                    <div class="income-range low-value-cl">
                                        <p>In first month</p>
                                        <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- income order visit user End -->
           <!--  <div class="dashtwo-order-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashtwo-order-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-9">
                                       <div class="wrapper">
                                            <canvas id="myChartsrs" width="400" height="100"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="skill-content-3">
                                            <div class="skill">
                                                <div class="progress">
                                                    <div class="lead-content">
                                                        <h3>2,346</h3>
                                                        <p>Total orders in period</p>
                                                    </div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                                    </div>
                                                </div>
                                                <div class="progress">
                                                    <div class="lead-content">
                                                        <h3>9,346</h3>
                                                        <p>Orders in last month</p>
                                                    </div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                                </div>
                                                <div class="progress progress-bt">
                                                    <div class="lead-content">
                                                        <h3>2,34,600</h3>
                                                        <p>Monthly income from order</p>
                                                    </div>
                                                    <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 93%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>93%</span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
          <!--   <div class="feed-mesage-project-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="sparkline11-list shadow-reset mg-tb-30">
                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Your daily feed</h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph dashone-comment dashtwo-comment comment-scrollbar">
                                    <div class="daily-feed-list">
                                        <div class="daily-feed-img">
                                            <a href="#"><img src="img/notification/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="daily-feed-content">
                                            <h4><span class="feed-author">Monica Smith</span> posted blog on <span class="feed-author">John Smith</span>.</h4>
                                            <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                            <span class="feed-ago">1m ago</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="daily-feed-list">
                                        <div class="daily-feed-img">
                                            <a href="#"><img src="img/notification/2.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="daily-feed-content">
                                            <h4><span class="feed-author">Joy Khan</span> posted message on <span class="feed-author">Joli Ray</span>.</h4>
                                            <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                            <span class="feed-ago">5m ago</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="daily-feed-list">
                                        <div class="daily-feed-img">
                                            <a href="#"><img src="img/notification/3.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="daily-feed-content">
                                            <h4><span class="feed-author">Mamun</span> share 1 photo on <span class="feed-author">Sohag</span>. </h4>
                                            <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                            <span class="feed-ago">5m ago</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="daily-feed-list">
                                        <div class="daily-feed-img">
                                            <a href="#"><img src="img/notification/4.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="daily-feed-content">
                                            <h4><span class="feed-author">Saliya</span> started following on <span class="feed-author">Jay</span>.</h4>
                                            <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                            <span class="feed-ago">5m ago</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="daily-feed-list">
                                        <div class="daily-feed-img">
                                            <a href="#"><img src="img/notification/5.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="daily-feed-content">
                                            <h4><span class="feed-author">Holika</span> posted message on <span class="feed-author">Smith</span>.</h4>
                                            <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                            <p class="message-feed-single">If you earn a BS in Justice of the Studies at GCU, you may be on able to pursue a career in an exciting field! Check out some future career options by reading our blog.</p>
                                            <div class="feed-like-bt">
                                                <a class="btn btn-xs btn-white-like"><i class="fa fa-thumbs-up"></i> Like </a>
                                                <a class="btn btn-xs btn-white-like"><i class="fa fa-heart"></i> Love </a>
                                            </div>
                                            <span class="feed-ago">5m ago</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="daily-feed-list">
                                        <div class="daily-feed-img">
                                            <a href="#"><img src="img/notification/6.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="daily-feed-content">
                                            <h4><span class="feed-author">Monica Smith</span> posted a new blog. </h4>
                                            <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                            <span class="feed-ago">5m ago</span>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="daily-feed-list daily-feed-bbm">
                                        <div class="daily-feed-img">
                                            <a href="#"><img src="img/notification/1.jpg" alt="" />
                                            </a>
                                        </div>
                                        <div class="daily-feed-content daily-feed-cbbm">
                                            <h4><span class="feed-author">Monica Smith</span> posted a new blog. </h4>
                                            <p class="res-ds-n-t">Today 5:60 pm - 12.06.2014</p>
                                            <span class="feed-ago">5m ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sparkline9-list shadow-reset mg-tb-30">
                                <div class="sparkline9-hd">
                                    <div class="main-sparkline9-hd">
                                        <h1>User project list</h1>
                                        <div class="sparkline9-outline-icon">
                                            <span class="sparkline9-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline9-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline9-graph dashone-comment">
                                    <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                        <div id="toolbar1">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table1" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true"></th>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="status" data-editable="true">Status</th>
                                                    <th data-field="date" data-editable="true">Date</th>
                                                    <th data-field="phone" data-editable="true">User</th>
                                                    <th data-field="company" data-editable="true">Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td>1</td>
                                                    <td>Pending</td>
                                                    <td>1:20pm</td>
                                                    <td>John</td>
                                                    <td>20%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>2</td>
                                                    <td class="complete-project-dashtwo">Complete</td>
                                                    <td>2:30pm</td>
                                                    <td>khan</td>
                                                    <td>25%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>3</td>
                                                    <td>Complete</td>
                                                    <td>4:50pm</td>
                                                    <td>hok</td>
                                                    <td>50%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>4</td>
                                                    <td class="canceled-project-dashtwo">Canceled</td>
                                                    <td>5:30pm</td>
                                                    <td>dogi</td>
                                                    <td>80%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>5</td>
                                                    <td>Complete</td>
                                                    <td>6:20pm</td>
                                                    <td>joyi</td>
                                                    <td>30%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>6</td>
                                                    <td>Pending</td>
                                                    <td>7:40pm</td>
                                                    <td>joy</td>
                                                    <td>40%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>7</td>
                                                    <td>Complete</td>
                                                    <td>9:40pm</td>
                                                    <td>ulla</td>
                                                    <td>90%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>8</td>
                                                    <td>Pending</td>
                                                    <td>11:20pm</td>
                                                    <td>don</td>
                                                    <td>95%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>9</td>
                                                    <td>Pending</td>
                                                    <td>5:20am</td>
                                                    <td>dali</td>
                                                    <td>85%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>10</td>
                                                    <td>Complete</td>
                                                    <td>6:20am</td>
                                                    <td>poli</td>
                                                    <td>77%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>11</td>
                                                    <td>Pending</td>
                                                    <td>7:30am</td>
                                                    <td>payel</td>
                                                    <td>55%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>12</td>
                                                    <td>Complete</td>
                                                    <td>8:22am</td>
                                                    <td>flat</td>
                                                    <td>36%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>13</td>
                                                    <td>Pending</td>
                                                    <td>9:25am</td>
                                                    <td>alit</td>
                                                    <td>49%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>14</td>
                                                    <td>Complete</td>
                                                    <td>10:30am</td>
                                                    <td>win</td>
                                                    <td>87%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>15</td>
                                                    <td>Pending</td>
                                                    <td>11:11am</td>
                                                    <td>back</td>
                                                    <td>97%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>16</td>
                                                    <td>Canceled</td>
                                                    <td>11:12am</td>
                                                    <td>koy</td>
                                                    <td>58%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>17</td>
                                                    <td>Complete</td>
                                                    <td>11:20pm</td>
                                                    <td>khy</td>
                                                    <td>22%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>18</td>
                                                    <td>Pending</td>
                                                    <td>12:20pm</td>
                                                    <td>fat</td>
                                                    <td>33%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>19</td>
                                                    <td>Pending</td>
                                                    <td>1:20pm</td>
                                                    <td>pof</td>
                                                    <td>65%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>20</td>
                                                    <td>Complete</td>
                                                    <td>11:20pm</td>
                                                    <td>elit</td>
                                                    <td>46%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>21</td>
                                                    <td>Pending</td>
                                                    <td>5:20pm</td>
                                                    <td>John</td>
                                                    <td>57%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sparkline8-list shadow-reset mg-tb-30">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Messages</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
                                    <div class="comment-phara">
                                        <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">Toman Alva</a>
                                            <p class="comment-content">Start each day with a prayer and end your day with a prayer and thank God for a another day.</p>
                                        </div>
                                        <div class="admin-comment-month">
                                            <p class="comment-clock"><i class="fa fa-clock-o"></i> 1 minuts ago</p>
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo1">...</button>
                                            <ul id="adminpro-demo1" class="comment-action-st collapse">
                                                <li><a href="#">Add</a>
                                                </li>
                                                <li><a href="#">Report</a>
                                                </li>
                                                <li><a href="#">Hide Message</a>
                                                </li>
                                                <li><a href="#">Turn on Message</a>
                                                </li>
                                                <li><a href="#">Turn off Message</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-phara">
                                        <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">William Jon</a>
                                            <p class="comment-content">Simple & easy online tools to increase the website visitors, improve SEO, marketing & sales, automatic blog!</p>
                                        </div>
                                        <div class="admin-comment-month">
                                            <p class="comment-clock"><i class="fa fa-clock-o"></i> 5 minuts ago</p>
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo2">...</button>
                                            <ul id="adminpro-demo2" class="comment-action-st collapse">
                                                <li><a href="#">Add</a>
                                                </li>
                                                <li><a href="#">Report</a>
                                                </li>
                                                <li><a href="#">Hide Message</a>
                                                </li>
                                                <li><a href="#">Turn on Message</a>
                                                </li>
                                                <li><a href="#">Turn off Message</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-phara">
                                        <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">Mexicano</a>
                                            <p class="comment-content">Soy cursi, twitteo frases pedorras y vendo antojitos mexicanos. Santa Rosa, La Pampa, Argentina</p>
                                        </div>
                                        <div class="admin-comment-month">
                                            <p class="comment-clock"><i class="fa fa-clock-o"></i> 15 minuts ago</p>
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo3">...</button>
                                            <ul id="adminpro-demo3" class="comment-action-st collapse">
                                                <li><a href="#">Add</a>
                                                </li>
                                                <li><a href="#">Report</a>
                                                </li>
                                                <li><a href="#">Hide Message</a>
                                                </li>
                                                <li><a href="#">Turn on Message</a>
                                                </li>
                                                <li><a href="#">Turn off Message</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-phara">
                                        <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">Bhadkamkar</a>
                                            <p class="comment-content">News love and follow Jesus and my family and friends l hope God bless you always.</p>
                                        </div>
                                        <div class="admin-comment-month">
                                            <p class="comment-clock"><i class="fa fa-clock-o"></i> 20 minuts ago</p>
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo4">...</button>
                                            <ul id="adminpro-demo4" class="comment-action-st collapse">
                                                <li><a href="#">Add</a>
                                                </li>
                                                <li><a href="#">Report</a>
                                                </li>
                                                <li><a href="#">Hide Message</a>
                                                </li>
                                                <li><a href="#">Turn on Message</a>
                                                </li>
                                                <li><a href="#">Turn off Message</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-phara">
                                        <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">SHAKHAWAT</a>
                                            <p class="comment-content">Make the Best Use of What You Have.You Never Know When & Where You Find Yourself..</p>
                                        </div>
                                        <div class="admin-comment-month">
                                            <p class="comment-clock"><i class="fa fa-clock-o"></i> 25 minuts ago</p>
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo5">...</button>
                                            <ul id="adminpro-demo5" class="comment-action-st collapse">
                                                <li><a href="#">Add</a>
                                                </li>
                                                <li><a href="#">Report</a>
                                                </li>
                                                <li><a href="#">Hide Message</a>
                                                </li>
                                                <li><a href="#">Turn on Message</a>
                                                </li>
                                                <li><a href="#">Turn off Message</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="comment-phara comment-bd-phara">
                                        <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">Sarah</a>
                                            <p class="comment-content">A 'Power Chick' committed to using my superpowers for good. Author, speaker, radio host.</p>
                                        </div>
                                        <div class="admin-comment-month">
                                            <p class="comment-clock"><i class="fa fa-clock-o"></i> 27 minuts ago</p>
                                            <button class="comment-setting" data-toggle="collapse" data-target="#adminpro-demo6">...</button>
                                            <ul id="adminpro-demo6" class="comment-action-st collapse">
                                                <li><a href="#">Add</a>
                                                </li>
                                                <li><a href="#">Report</a>
                                                </li>
                                                <li><a href="#">Hide Message</a>
                                                </li>
                                                <li><a href="#">Turn on Message</a>
                                                </li>
                                                <li><a href="#">Turn off Message</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Transitions Start-->
          <!--   <div class="transition-world-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="transition-world-list shadow-reset">
                                <div class="sparkline7-list">
                                    <div class="sparkline7-hd">
                                        <div class="main-spark7-hd">
                                            <h1>Transitions <span class="res-ds-n">Worldwide</span></h1>
                                            <div class="sparkline7-outline-icon">
                                                <span class="sparkline7-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                <span><i class="fa fa-wrench"></i></span>
                                                <span class="sparkline7-collapse-close"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline7-graph">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="datatable-dashv1-list custom-datatable-overright dashtwo-project-list-data">
                                                    <div id="toolbar">
                                                        <select class="form-control">
                                                            <option value="">Export Basic</option>
                                                            <option value="all">Export All</option>
                                                            <option value="selected">Export Selected</option>
                                                        </select>
                                                    </div>
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-resizable="true" data-cookie="true" data-page-size="5" data-page-list="[5, 10, 15, 20, 25]" data-cookie-id-table="saveId" data-show-export="true">
                                                        <thead>
                                                            <tr>
                                                                <th data-field="state" data-checkbox="true"></th>
                                                                <th data-field="id">No</th>
                                                                <th data-field="method" data-editable="true">Method</th>
                                                                <th data-field="date" data-editable="true">Date</th>
                                                                <th data-field="country" data-editable="true">Country</th>
                                                                <th data-field="amount" data-editable="true">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                                <td>1</td>
                                                                <td>Paypal</td>
                                                                <td>11:20pm</td>
                                                                <td>United State</td>
                                                                <td>$2413</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>2</td>
                                                                <td>Payoneer</td>
                                                                <td>5:20am</td>
                                                                <td>Canada</td>
                                                                <td>$4565</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>3</td>
                                                                <td>Skill</td>
                                                                <td>1 day Ago</td>
                                                                <td>China</td>
                                                                <td>$6888</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>4</td>
                                                                <td>Credit Card</td>
                                                                <td>2 day Ago</td>
                                                                <td>France</td>
                                                                <td>$8789</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>5</td>
                                                                <td>Master Card</td>
                                                                <td>5 days ago</td>
                                                                <td>Brazil</td>
                                                                <td>$4565</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>6</td>
                                                                <td>Visa</td>
                                                                <td>10 days ago</td>
                                                                <td>United Kingdom</td>
                                                                <td>$4554</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>7</td>
                                                                <td>Pizza</td>
                                                                <td>15 days ago</td>
                                                                <td>Germany</td>
                                                                <td>$8789</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>8</td>
                                                                <td>Master Card</td>
                                                                <td>20 days ago</td>
                                                                <td>Brazil</td>
                                                                <td>$1232</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>9</td>
                                                                <td>Skill</td>
                                                                <td>22 days ago</td>
                                                                <td>India</td>
                                                                <td>$5465</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>10</td>
                                                                <td>Payoneer</td>
                                                                <td>29 days ago</td>
                                                                <td>Australia</td>
                                                                <td>$7887</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>11</td>
                                                                <td>Credit Card</td>
                                                                <td>31 days ago</td>
                                                                <td>Saudi</td>
                                                                <td>$8782</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>12</td>
                                                                <td>Master Card</td>
                                                                <td>40 days ago</td>
                                                                <td>Netherlands</td>
                                                                <td>$1569</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>13</td>
                                                                <td>Pizza</td>
                                                                <td>50 days ago</td>
                                                                <td>Brazil</td>
                                                                <td>$8456</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>14</td>
                                                                <td>Skill</td>
                                                                <td>60 days ago</td>
                                                                <td>United State</td>
                                                                <td>$3654</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>15</td>
                                                                <td>Master Card</td>
                                                                <td>70 days ago</td>
                                                                <td>India</td>
                                                                <td>$6541</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>16</td>
                                                                <td>Credit Card</td>
                                                                <td>75 days ago</td>
                                                                <td>United Kingdom</td>
                                                                <td>$9865</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>17</td>
                                                                <td>Pizza</td>
                                                                <td>80 days ago</td>
                                                                <td>United State</td>
                                                                <td>$4587</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>18</td>
                                                                <td>Payoneer</td>
                                                                <td>82 days ago</td>
                                                                <td>Netherlands</td>
                                                                <td>$6587</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>19</td>
                                                                <td>Credit Card</td>
                                                                <td>85 days ago</td>
                                                                <td>United Kingdom</td>
                                                                <td>$1478</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>20</td>
                                                                <td>Master Card</td>
                                                                <td>87 days ago</td>
                                                                <td>India</td>
                                                                <td>$568</td>
                                                            </tr>
                                                            <tr>
                                                                <td></td>
                                                                <td>21</td>
                                                                <td>Payoneer</td>
                                                                <td>90 days ago</td>
                                                                <td>United State</td>
                                                                <td>$2547</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="vectorjsmarp" id="world-map"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Transitions End-->
 
    <!-- Footer Start-->
    <div class="footer-copyright-area">
               @include('partial.foota')
    </div>
    <!-- Footer End-->
    <!-- Chat Box Start-->
  <!--   <div class="chat-list-wrap">
        <div class="chat-list-adminpro">
            <div class="chat-button">
                <span data-toggle="collapse" data-target="#chat" class="chat-icon-link"><i class="fa fa-comments"></i></span>
            </div>
            <div id="chat" class="collapse chat-box-wrap shadow-reset animated zoomInLeft">
                <div class="chat-main-list">
                    <div class="chat-heading">
                        <h2>Messanger</h2>
                    </div>
                    <div class="chat-content chat-scrollbar">
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:15 am</span></h3>
                            <p>Hi, what you are doing and where are you gay?</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:10 am</span></h3>
                            <p>Now working in graphic design with coding and you?</p>
                        </div>
                        <div class="author-chat">
                            <h3>Monica <span class="chat-date">10:05 am</span></h3>
                            <p>Practice in programming</p>
                        </div>
                        <div class="client-chat">
                            <h3>Mamun <span class="chat-date">10:02 am</span></h3>
                            <p>That's good man! carry on...</p>
                        </div>
                    </div>
                    <div class="chat-send">
                        <input type="text" placeholder="Type..." />
                        <span><button type="submit">Send</button></span>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Chat Box End-->
    <!-- jquery
        ============================================ -->
    <script src="assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="assets/js/wow/wow.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="assets/js/counterup/waypoints.min.js"></script>
    <script src="assets/js/counterup/counterup-active.js"></script>
    <!-- jvectormap JS
        ============================================ -->
    <script src="assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- peity JS
        ============================================ -->
    <script src="assets/js/peity/jquery.peity.min.js"></script>
    <script src="assets/js/peity/peity-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="assets/js/flot/Chart.min.js"></script>
    <script src="assets/js/flot/dashtwo-flot-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="assets/js/data-table/bootstrap-table.js"></script>
    <script src="assets/js/data-table/tableExport.js"></script>
    <script src="assets/js/data-table/data-table-active.js"></script>
    <script src="assets/js/data-table/bootstrap-table-editable.js"></script>
    <script src="assets/js/data-table/bootstrap-editable.js"></script>
    <script src="assets/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="assets/js/data-table/colResizable-1.5.source.js"></script>
    <script src="assets/js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="assets/js/main.js"></script>
    <!-- Tambahan JS
        ============================================ -->
    <script type="{{ asset ('js/dataTables.bootstrap.min.js') }}"></script>
    <script type="{{ asset ('/js/dataTables.bootstrap4.min.js')}}"></script>
    <script type="{{ asset ('/js/dataTables-jqueryui.min.js') }}"></script>
    <script type="{{ asset ('/js/jquerydataTables.min.js') }}"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/js/jquery.dataTables.js"></script>
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.18/js/dataTables.bootstrap4.min.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
     <!--  Global js show hidden-->
    <script src="{{asset('assets/js/global.js')}}" type="text/javascript"></script>
      <!-- untuk dropify-->
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script src="{{ asset('js/dropzone.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>

      <script>
        var apiUrl = 'http://127.0.0.1:8000/api/';
        var imageUrl = 'http://127.0.0.1:8000/assets/images/'
    </script>
    @yield('scripts')
</body>

</html>