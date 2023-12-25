<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />


    <!-- FAVICONS ICON ============================================= -->
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}" />

    <!-- PAGE TITLE HERE ============================================= -->
    <title>Sama Garments - Admin Panel</title>

    <!-- MOBILE SPECIFIC ============================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/calendar/fullcalendar.css')}}">

    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css')}}">

    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css')}}">

    <!-- STYLESHEETS ============================================= -->
    
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dashboard.css')}}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css')}}">

</head>

<body class="ttr-opened-sidebar ttr-pinned-sidebar">

    <!-- header start -->
    <header class="ttr-header">
        <div class="ttr-header-wrapper">
            <!--sidebar menu toggler start -->
            <div class="ttr-toggle-sidebar ttr-material-button">
                <i class="ti-close ttr-open-icon"></i>
                <i class="ti-menu ttr-close-icon"></i>
            </div>
            <!--sidebar menu toggler end -->
            <!--logo start -->
            <div class="ttr-logo-box">
                <div>
                    <a href="/" class="ttr-logo" style="color:white !important;">
                        SAMA GARMENTS
                        <!-- <img alt="" class="ttr-logo-mobile" src="{{ asset('assets/images/logo.png')}}" width="30" height="30">
                        <img alt="" class="ttr-logo-desktop" src="{{ asset('assets/images/logo.png')}}" width="160" height="27"> -->
                    </a>
                </div>
            </div>
            <!--logo end -->
            {{--
            <div class="ttr-header-menu">
                <!-- header left menu start -->
                <!-- <ul class="ttr-header-navigation">
                    <li>
                        <a href="../index.html" class="ttr-material-button ttr-submenu-toggle">HOME</a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle">QUICK MENU <i class="fa fa-angle-down"></i></a>
                        <div class="ttr-header-submenu">
                            <ul>
                                <li><a href="../courses.html">Courses</a></li>
                                <li><a href="../registeration.html">Register</a></li>
                                <li><a href="../ourteam.html">Our Team</a></li>
                                <li><a href="../about.html">About</a></li>
                                <li><a href="../whatsapp.html">Whatsapp</a></li>
                            </ul>
                        </div>
                    </li>
                </ul> -->
                <!-- header left menu end -->
            </div>
            --}}
            <div class="ttr-header-right ttr-with-seperator">
                <!-- header right menu start -->
                <ul class="ttr-header-navigation">
                    <li>
                        <a href="#" class="ttr-material-button ttr-search-toggle"><i class="fa fa-search"></i></a>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button ttr-submenu-toggle"><i class="fa fa-bell"></i></a>
                        <div class="ttr-header-submenu noti-menu">
                            <div class="ttr-notify-header">
                                <span class="ttr-notify-text-top">0 New</span>
                                <span class="ttr-notify-text">User Notifications</span>
                            </div>
                            <div class="noti-box-list">

                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="ttr-material-button"><i class="ti-layout-grid3-alt"></i></a>
                        <div class="ttr-header-submenu">
                            <ul>

                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
                <!-- header right menu end -->
            </div>
            <!--header search panel start -->
            <div class="ttr-search-bar">
                <form class="ttr-search-form">
                    <div class="ttr-search-input-wrapper">
                        <input type="text" name="qq" placeholder="search something..." class="ttr-search-input">
                        <button type="submit" name="search" class="ttr-search-submit"><i class="ti-arrow-right"></i></button>
                    </div>
                    <span class="ttr-search-close ttr-search-toggle">
                        <i class="ti-close"></i>
                    </span>
                </form>
            </div>
            <!--header search panel end -->
        </div>
    </header>
    <!-- header end -->
    <!-- Left sidebar menu start -->
    <div class="ttr-sidebar">
        <div class="ttr-sidebar-wrapper content-scroll">
            <!-- side menu logo start -->
            <div class="ttr-sidebar-logo">
                
                <!-- <a href="#"><img alt="" src="{{ asset('assets/images/logo.png')}}" width="122" height="27"></a> -->
                <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
                <div class="ttr-sidebar-toggle-button">
                    <i class="ti-arrow-left"></i>
                </div>
            </div>
            <!-- side menu logo end -->
            <!-- sidebar menu start -->
            <nav class="ttr-sidebar-navi">
                <ul>
                    <!-- <li>
                        <a href="/admin/dashboard" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-home"></i></span>
                            <span class="ttr-label">Dashborad</span>
                        </a>
                    </li> -->

                    <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-email"></i></span>
                            <span class="ttr-label">Enquiries</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/admin/message" class="ttr-material-button"><span class="ttr-label">Inbox</span></a>
                            </li>

                        </ul>
                    </li>


                    <!-- <li>
                        <a href="#" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-book"></i></span>
                            <span class="ttr-label">Courses</span>
                            <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul>
                            <li>
                                <a href="/admin/courses" class="ttr-material-button"><span class="ttr-label">View Courses</span></a>
                            </li>
                            <li>
                                <a href="/admin/course/add" class="ttr-material-button"><span class="ttr-label">Add Course</span></a>
                            </li>
                        </ul>
                    </li> -->

                    <li>
                        <a href="/admin/project" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-layout-grid3-alt"></i></span>
                            <span class="ttr-label">Products</span>
                        </a>
                    </li>

                    <!-- <li>
                        <a href="/admin/testimonial" class="ttr-material-button">
                            <span class="ttr-icon"><i class="ti-layout-accordion-list"></i></span>
                            <span class="ttr-label">Testimonials</span>
                        </a>
                    </li> -->


                    




                    <li class="ttr-seperate"></li>
                </ul>
                <!-- sidebar menu end -->
            </nav>
            <!-- sidebar menu end -->
        </div>
    </div>
    <!-- Left sidebar menu end -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>
    <div class="ttr-overlay"></div>


    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{ asset('assets/vendors/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{ asset('assets/vendors/counter/waypoints-min.js')}}"></script>
    <script src="{{ asset('assets/vendors/counter/counterup.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.js')}}"></script>
    <script src="{{ asset('assets/vendors/masonry/masonry.js')}}"></script>
    <script src="{{ asset('assets/vendors/masonry/filter.js')}}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{ asset('assets/vendors/scroll/scrollbar.min.js')}}"></script>
    <script src="{{ asset('assets/js/functions.js')}}"></script>
    <script src="{{ asset('assets/vendors/chart/chart.min.js')}}"></script>
    <script src="{{ asset('assets/js/admin.js')}}"></script>
    <script src="{{ asset('assets/vendors/calendar/moment.min.js')}}"></script>
    <script src="{{ asset('assets/vendors/calendar/fullcalendar.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>

    

    <!-- <script src="{{ asset('assets/vendors/switcher/switcher.js')}}"></script> -->
    <script>
        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '2019-03-12',
                navLinks: true, // can click day/week names to navigate views

                weekNumbers: true,
                weekNumbersWithinDays: true,
                weekNumberCalculation: 'ISO',

                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [{
                        title: 'All Day Event',
                        start: '2019-03-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2019-03-07',
                        end: '2019-03-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2019-03-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2019-03-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2019-03-11',
                        end: '2019-03-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2019-03-12T10:30:00',
                        end: '2019-03-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2019-03-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2019-03-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2019-03-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2019-03-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2019-03-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2019-03-28'
                    }
                ]
            });

        });
    </script>

</html>