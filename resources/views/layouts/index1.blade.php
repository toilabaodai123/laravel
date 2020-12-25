

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Upvex - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('/images/favicon.ico')}}">

        <!-- plugin css -->
        <link href="{{url('/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{url('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

           

                    </ul>

                    <!-- LOGO -->
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end Topbar -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
								
                                <a href="#">
								
                                    <i class="la la-dashboard"></i>Đạo diễn <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{url('danhsachdaodien')}}">Danh sách đạo diễn</a>
                                    </li>
									
                                    <li>
                                        <a href="{{url('themdaodien')}}">Thêm đạo diễn</a>
                                    </li>
                                </ul>
                            </li>
							
							<li class="has-submenu">
                                <a href="#">
                                    <i class="la la-dashboard"></i>Phim <div class="arrow-down"></div></a>
                                <ul class="submenu">
								<li>
                                        <a href="{{url('danhsachphim')}}">Danh sách phim</a>
                                </li>
								<li>
                                        <a href="{{url('themphim')}}">Thêm phim</a>
                                </li>	
								
								 <li class="has-submenu">
											<a href="#">
												<i class="la la-dashboard"></i>Quản lý loại phim <div class="arrow-down"></div></a>
											<ul class="submenu">
												<li>
													<a href="{{url('danhsachloaiphim')}}">Danh sách loại phim</a>
												</li>
												<li>
													<a href="{{url('themloaiphim')}}">Thêm loại phim</a>
												</li>
											</ul>
								</li>
								
                                    <li>
                                        <a href="{{url('danhsachloaiphim')}}">Danh sách loại phim</a>
                                    </li>
                                    <li>
                                        <a href="{{url('themloaiphim')}}">Thêm loại phim</a>
                                    </li>
                                </ul>
                            </li>
							<li class="has-submenu">
								
                                <a href="#">
								
                                    <i class="la la-dashboard"></i>Khách Hàng <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{url('danhsachkhachhang')}}">Danh sách khách hàng</a>
                                    </li>
									
                                    <li>
                                        <a href="{{url('themkhachhang')}}">Thêm khách hàng</a>
                                    </li>
                                </ul>
                            </li>
							<li class="has-submenu">
								
                                <a href="#">
								
                                    <i class="la la-dashboard"></i>Xuất chiếu <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{url('danhsachxuatchieu')}}">Danh sách xuất chiếu</a>
                                    </li>
									
                                    <li>
                                        <a href="{{url('themxuatchieu')}}">Thêm xuất chiếu</a>
                                    </li>
                                </ul>
                            </li>
							<li class="has-submenu">
								
                                <a href="#">
								
                                    <i class="la la-dashboard"></i>Ghế <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{url('danhsachghe')}}">Danh sách Ghế</a>
                                    </li>
									
									<li>
                                        <a href="{{url('danhsachthoigianghe')}}">Danh sách lịch của Ghế</a>
                                    </li>
									
                                    <li>
                                        <a href="{{url('themghe')}}">Thêm ghế</a>
                                    </li>
									
									<li>
                                        <a href="{{url('danhsachloaighe')}}">Danh sách loại ghế</a>
                                    </li>
									<li>
                                        <a href="{{url('themloaighe')}}">Thêm loại ghế</a>
                                    </li>
                                </ul>
                            </li>
							<li class="has-submenu">
								
                                <a href="#">
								
                                    <i class="la la-dashboard"></i>Rạp <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{url('danhsachrap')}}">Danh sách Rạp</a>
                                    </li>
									
                                    <li>
                                        <a href="{{url('themrap')}}">Thêm Rạp</a>
                                    </li>
                                </ul>
                            </li>
							<li class="has-submenu">
								
                                <a href="#">
								
                                    <i class="la la-dashboard"></i>Vé xem phim <div class="arrow-down"></div></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="{{url('danhsachve')}}">Danh sách Vé xem phim</a>
                                    </li>
									
                                    <li>
                                        <a href="{{url('themve')}}">Thêm Vé</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->

        </header>
        <!-- End Navigation Bar-->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
            <div class="container-fluid">
				@yield('content')	

                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2019 &copy; Upvex theme by <a href="">Coderthemes</a> 
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Marcia J. Melia</a> </h5>
                    <p class="text-muted mb-0"><small>Product Owner</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <div class="row">
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                    <div class="col-6 text-center">
                        <h4 class="mb-1 mt-0">8,504</h4>
                        <p class="m-0">Balance</p>
                    </div>
                </div>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                        <label class="custom-control-label" for="customSwitch1">Notifications</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">API Access</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                        <label class="custom-control-label" for="customSwitch3">Auto Updates</label>
                    </div>
                    <div class="custom-control custom-switch mb-2">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                        <label class="custom-control-label" for="customSwitch4">Online Status</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="~/js/vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="{{url('/libs/peity/jquery.peity.min.js')}}"></script>
        <script src="{{url('/libs/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{url('/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{url('/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js')}}"></script>

        <!-- Dashboard init -->
        <script src="{{url('/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{url('/js/app.min.js')}}"></script>
        
    </body>
</html>