<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="{{asset('a_assets/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/fontello/css/fontello.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/animate-css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/nifty-modal/css/component.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" /> 
        <link href="{{asset('a_assets/assets/libs/ios7-switch/ios7-switch.css')}}" rel="stylesheet" /> 
        <link href="{{asset('a_assets/assets/libs/pace/pace.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('a_assets/assets/libs/jquery-icheck/skins/all.css')}}" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="{{asset('a_assets/assets/libs/prettify/github.css')}}" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="{{asset('a_assets/assets/libs/rickshaw/rickshaw.min.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/morrischart/morris.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/jquery-clock/clock.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/bootstrap-calendar/css/bic_calendar.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/sortable/sortable-theme-bootstrap.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/jquery-weather/simpleweather.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/libs/bootstrap-xeditable/css/bootstrap-editable.css')}}" rel="stylesheet" type="text/css" />
                <link href="{{asset('a_assets/assets/css/style.css')}}" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="{{asset('a_assets/assets/css/style-responsive.css')}}" rel="stylesheet" />
        @yield('css')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="{{asset('a_assets/assets/img/favicon.ico')}}">
        <link rel="apple-touch-icon" href="{{asset('a_assets/assets/img/apple-touch-icon.png')}}" />
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('a_assets/assets/img/apple-touch-icon-57x57.png')}}" />
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('a_assets/assets/img/apple-touch-icon-72x72.png')}}" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('a_assets/assets/img/apple-touch-icon-76x76.png')}}" />
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('a_assets/assets/img/apple-touch-icon-114x114.png')}}" />
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('a_assets/assets/img/apple-touch-icon-120x120.png')}}" />
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('a_assets/assets/img/apple-touch-icon-144x144.png')}}" />
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('a_assets/assets/img/apple-touch-icon-152x152.png')}}" />
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
            <!-- Modal Task Progress -->    
    <div class="md-modal md-3d-flip-vertical" id="task-progress">
        <div class="md-content">
            <h3><strong>Task Progress</strong> Information</h3>
            <div>
                <p>CLEANING BUGS</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80&#37; Complete</span>
                  </div>
                </div>
                <p>POSTING SOME STUFF</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                    <span class="sr-only">65&#37; Complete</span>
                  </div>
                </div>
                <p>BACKUP DATA FROM SERVER</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                    <span class="sr-only">95&#37; Complete</span>
                  </div>
                </div>
                <p>RE-DESIGNING WEB APPLICATION</p>
                <div class="progress progress-xs for-modal">
                  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100&#37; Complete</span>
                  </div>
                </div>
                <p class="text-center">
                <button class="btn btn-danger btn-sm md-close">Close</button>
                </p>
            </div>
        </div>
    </div>
        
    <!-- Modal Logout -->
    <div class="md-modal md-just-me" id="logout-modal">
        <div class="md-content">
            <h3><strong>Logout</strong> Confirmation</h3>
            <div>
                <p class="text-center">Are you sure want to logout from this awesome system?</p>
                <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
                </p>
            </div>
        </div>
    </div>        <!-- Modal End -->    
    <!-- Begin page -->
    <div id="wrapper">
        
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href=""><img src="{{asset('c_assets/images/icons/logo2.png')}}" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <!-- <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th"></i></a>
                        <div class="dropdown-menu grid-dropdown">
                            <div class="row stacked">
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="notes-app" data-status="active"><i class="icon-edit"></i>Notes</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calendar-widget2" data-status="active"><i class="icon-calendar"></i>Calendar</a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="javascript:;" data-app="calc" data-status="inactive"><i class="fa fa-calculator"></i>Calculator</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li class="language_bar dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul> -->
                <ul class="nav navbar-nav navbar-right top-navbar">
                    <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><span class="label label-danger absolute"></span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"></a></li>
                            
                            
                        </ul>
                    </li>
                   <!--  <li class="dropdown iconify hide-phone">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">3</span></a>
                        <ul class="dropdown-menu dropdown-message">
                            <li class="dropdown-header notif-header"><i class="icon-mail-2"></i> New Messages</li>
                            
                        </ul>
                    </li> -->
                    <!-- <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li> -->
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">  <strong> Welcome {{ Auth::user()->name }}</strong> <i class="fafa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal">
                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-logout-1"></i> 
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                <!-- </div> -->

                            </a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
            <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        
                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="profile.html" class="rounded-image profile-image"><img src="{{url('storage/app/passport')}}{{'/'}}{{$dat->image}}"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome {{ Auth::user()->name }}<b></b></div>
                        
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                    <li><a href="{{route('home')}}" ><i class='icon-home-3'></i><span>Dashboard</span></a></li>
                    <li><a href="{{route('passport')}}" ><i class='icon-home-3'></i><span>change Your photo</span></a></li>
                    <li><a href="{{route('clogo')}}"><i class='icon-home-3'></i><span>Change Logo</span></a></li>
                    <li><a href="{{route('cbanner')}}"><i class='icon-home-3'></i><span>Edit Slider</span></a></li>
                    <li><a href="{{route('cbanner2')}}"><i class='icon-home-3'></i><span>Edit Second Slider</span></a></li>
                    <li><a href="{{route('cproduct')}}"><i class='icon-home-3'></i><span>Edit Product</span></a></li>
                    <li><a href="{{route('view_product')}}"><i class='icon-home-3'></i><span>view  Product</span></a></li>
                    <li><a href="{{route('feedback')}}"><i class='icon-home-3'></i><span>Feedback Data</span></a></li> 
                    <li><a href="{{route('create_offer')}}"><i class='icon-home-3'></i><span>Add Offers</span></a></li>
                    <li><a href="{{route('offers_view')}}"><i class='icon-home-3'></i><span>View Offers</span></a></li>
                    <li><a href="{{route('view_orders')}}"><i class='icon-home-3'></i><span>View Orders</span></a></li>
                    </ul>       
                </div>
            </div>
            <div class="clearfix"></div><br><br><br>
        </div>
           <!--  <div class="left-footer">
                <div class="progress progress-xs">
                  <div class="progress-bar bg-green-1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="progress-precentage">80%</span>
                  </div>
                  
                  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
                </div>
            </div> -->
        </div>
        <!-- Left Sidebar End -->           
        <!-- Start right content -->
        <div class="content-page">
            <!-- ============================================================== -->
            <!-- Start Content here -->
            <!-- ============================================================== -->
            <div class="content">
                <!-- Start info box -->
                 
                <!-- End of info box -->
                    
                
                 @yield('content')

                <!-- <div class="row">
                    <div class="col-lg-8 col-md-6 portlets">
                          
                    </div>
                </div> -->

                            <!-- Footer Start -->
            <footer >
                {{Auth::user()->name}}&copy; 2020 
                <div class="footer-links pull-right">
                    <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                </div>
            </footer>
            <!-- Footer End -->         
            </div>
            <!-- ============================================================== -->
            <!-- End content here -->
            <!-- ============================================================== -->

        </div>
        <!-- End right content -->

    </div>
    <div id="contextMenu" class="dropdown clearfix">
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu" style="display:block;position:static;margin-bottom:5px;">
                <li><a tabindex="-1" href="javascript:;" data-priority="high"><i class="fa fa-circle-o text-red-1"></i> High Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="medium"><i class="fa fa-circle-o text-orange-3"></i> Medium Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="low"><i class="fa fa-circle-o text-yellow-1"></i> Low Priority</a></li>
                <li><a tabindex="-1" href="javascript:;" data-priority="none"><i class="fa fa-circle-o text-lightblue-1"></i> None</a></li>
            </ul>
        </div>
    <!-- End of page -->
        <!-- the overlay modal element -->
    <div class="md-overlay">
     
    </div>
    <!-- End of eoverlay modal -->
    <script>
        var resizefunc = [];
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('a_assets/assets/libs/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-detectmobile/detect.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/ios7-switch/ios7.switch.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/fastclick/fastclick.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-blockui/jquery.blockUI.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap-bootbox/bootbox.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-sparkline/jquery-sparkline.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/nifty-modal/js/classie.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/nifty-modal/js/modalEffects.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/sortable/sortable.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap-fileinput/bootstrap.file-input.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap-select2/select2.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script> 
    <script src="{{asset('a_assets/assets/libs/pace/pace.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-icheck/icheck.min.js')}}"></script>

    <!-- Demo Specific JS Libraries -->
    <script src="{{asset('a_assets/assets/libs/prettify/prettify.js')}}"></script>

    <script src="{{asset('a_assets/assets/js/init.js')}}"></script>
    <!-- Page Specific JS Libraries -->
    <script src="{{asset('a_assets/assets/libs/d3/d3.v3.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/raphael/raphael-min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/morrischart/morris.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-knob/jquery.knob.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-jvectormap/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-jvectormap/js/jquery-jvectormap-us-aea-en.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-clock/clock.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/jquery-weather/jquery.simpleWeather-2.6.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/libs/bootstrap-calendar/js/bic_calendar.min.js')}}"></script>
    <script src="{{asset('a_assets/assets/js/apps/calculator.js')}}"></script>
    <script src="{{asset('a_assets/assets/js/apps/todo.js')}}"></script>
    <script src="{{asset('a_assets/assets/js/apps/notes.js')}}"></script>
    <script src="{{asset('a_assets/assets/js/pages/index.js')}}"></script>
    @yield('js')
    </body>
</html>