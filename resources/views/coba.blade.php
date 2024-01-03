<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets_admin/images/favicon.png')}}">
    <!-- Daterange picker -->
    <link href="{{asset('assets_admin/vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Clockpicker -->
    <link href="{{asset('assets_admin/vendor/clockpicker/css/bootstrap-clockpicker.min.css')}}" rel="stylesheet">
    <!-- asColorpicker -->
    <link href="{{asset('assets_admin/vendor/jquery-asColorPicker/css/asColorPicker.min.css')}}" rel="stylesheet">
    <!-- Material color picker -->
    <link
        href="{{asset('assets_admin/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}"
        rel="stylesheet">
    <!-- Pick date -->
    <link rel="stylesheet" href="{{asset('assets_admin/vendor/pickadate/themes/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets_admin/vendor/pickadate/themes/default.date.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets_admin/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.htmlclass"="brand-logo">
                <img class="logo-abbr" src="{{asset('assets_admin/images/logo.png')}}" alt="">
                <img class="logo-compact" src="{{asset('assets_admin/images/logo-text.png')}}" alt="">
                <img class="brand-title" src="{{asset('assets_admin/images/logo-text.png')}}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as
                                                        unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong>
                                                        Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{asset('assets_admin/app-profile.html')}}" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="{{asset('assets_admin/email-inbox.html')}}" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="{{asset('assets_admin/page-login.html')}}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <!-- <li><a href="index.html<">i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                    </li> -->
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets_admin/index.html')}}">Dashboard 1</a></li>
                            <li><a href="{{asset('assets_admin/index2.html')}}">Dashboard 2</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Apps</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Apps</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets_admin/app-profile.html')}}">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{asset('assets_admin/email-compose.html')}}">Compose</a></li>
                                    <li><a href="{{asset('assets_admin/email-inbox.html')}}">Inbox</a></li>
                                    <li><a href="{{asset('assets_admin/email-read.html')}}">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('assets_admin/app-calender.html')}}">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-chart-bar-33"></i><span class="nav-text">Charts</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets_admin/chart-flot.html')}}">Flot</a></li>
                            <li><a href="{{asset('assets_admin/chart-morris.html')}}">Morris</a></li>
                            <li><a href="{{asset('assets_admin/chart-chartjs.html')}}">Chartjs</a></li>
                            <li><a href="{{asset('assets_admin/chart-chartist.html')}}">Chartist</a></li>
                            <li><a href="{{asset('assets_admin/chart-sparkline.html')}}">Sparkline</a></li>
                            <li><a href="{{asset('assets_admin/chart-peity.html')}}">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Components</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-world-2"></i><span class="nav-text">Bootstrap</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets_admin/ui-accordion.html')}}">Accordion</a></li>
                            <li><a href="{{asset('assets_admin/ui-alert.html')}}">Alert</a></li>
                            <li><a href="{{asset('assets_admin/ui-badge.html')}}">Badge</a></li>
                            <li><a href="{{asset('assets_admin/ui-button.html')}}">Button</a></li>
                            <li><a href="{{asset('assets_admin/ui-modal.html')}}">Modal</a></li>
                            <li><a href="{{asset('assets_admin/ui-button-group')}}.htmlButton ">Group</a></li>
                            <li><a href="{{asset('assets_admin/ui-list-group')}}.htmlList ">Group</a></li>
                            <li><a href="{{asset('assets_admin/ui-media-object')}}.htmlMedia ">Object</a></li>
                            <li><a href="{{asset('assets_admin/ui-card.html')}}">Cards</a></li>
                            <li><a href="{{asset('assets_admin/ui-carousel.html')}}">Carousel</a></li>
                            <li><a href="{{asset('assets_admin/ui-dropdown.html')}}">Dropdown</a></li>
                            <li><a href="{{asset('assets_admin/ui-popover.html')}}">Popover</a></li>
                            <li><a href="{{asset('assets_admin/ui-progressbar.html')}}">Progressbar</a></li>
                            <li><a href="{{asset('assets_admin/ui-tab.html')}}">Tab</a></li>
                            <li><a href="{{asset('assets_admin/ui-typography.html')}}">Typography</a></li>
                            <li><a href="{{asset('assets_admin/ui-pagination.html')}}">Pagination</a></li>
                            <li><a href="{{asset('assets_admin/ui-grid.html')}}">Grid</a></li>

                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-plug"></i><span class="nav-text">Plugins</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets_admin/uc-select2.html')}}">Select 2</a></li>
                            <li><a href="{{asset('assets_admin/uc-nestable.html')}}">Nestedable</a></li>
                            <li><a href="{{asset('assets_admin/uc-noui-slider')}}.htmlNoui ">Slider</a></li>
                            <li><a href="{{asset('assets_admin/uc-sweetalert.html')}}">Sweet Alert</a></li>
                            <li><a href="{{asset('assets_admin/uc-toastr.html')}}">Toastr</a></li>
                            <li><a href="{{asset('assets_admin/map-jqvmap.html')}}">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li>
                        <aSummernote href="widget-basic.htmlaria-" expanded="false"><i
                                class="icon icon-globe-2"></i><span class="nav-text">Widget</span></a>
                    </li>
                    <li class="nav-label">Forms</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-form"></i><span class="nav-text">Forms</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets_admin/form-element.html')}}">Form Elements</a></li>
                            <li><a href="{{asset('assets_admin/form-wizard.html')}}">Wizard</a></li>
                            <li>
                                <aPickers href="{{asset('assets_admin/form-editor-summernote')}}.html></aSummernote">
                            </li>
                            <li><a href="form-pickers.html></aPickers"></li>
                            <li>
                                <aBootstrap href="form-validation-jquery.htmlJquery ">Validate</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-layout-25"></i><span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li>
                                <aDatatable href="table-bootstrap-basic.html></aBootstrap">
                            </li>
                            <li><a href="table-datatable-basic.html></aDatatable"></li>
                        </ul>
                    </li>

                    <li class="nav-label">Extra</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-copy-06"></i><span class="nav-text">Pages</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{asset('assets_admin/page-register.html')}}">Register</a></li>
                            <li><a href="{{asset('assets_admin/page-login.html')}}">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{asset('assets_admin/page-error-400')}}.htmlError ">400</a></li>
                                    <li><a href="{{asset('assets_admin/page-error-403')}}.htmlError ">403</a></li>
                                    <li><a href="{{asset('assets_admin/page-error-404')}}.htmlError ">404</a></li>
                                    <li><a href="{{asset('assets_admin/page-error-500')}}.htmlError ">500</a></li>
                                    <li><a href="{{asset('assets_admin/page-error-503')}}.htmlError ">503</a></li>
                                </ul>
                            </li>
                            <li><a href="{{asset('assets_admin/page-lock-screen')}}.htmlLock ">Screen</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Pickers</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Pickers</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-9 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Date Picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="example">
                                            <p class="mb-1">Date Range Pick</p>
                                            <input class="form-control input-daterange-datepicker" type="text"
                                                name="daterange" value="01/01/2015 - 01/31/2015">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="example">
                                            <p class="mb-1">Date Range With Time</p>
                                            <input type="text" class="form-control input-daterange-timepicker"
                                                name="daterange" value="01/01/2015 1:30 PM - 01/01/2015 2:00 PM">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="example">
                                            <p class="mb-1">Limit Selectable Dates</p>
                                            <input class="form-control input-limit-datepicker" type="text"
                                                name="daterange" value="06/01/2015 - 06/07/2015">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-12">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pick-Date picker</h4>
                            </div>
                            <div class="card-body">
                                <p class="mb-1">Default picker</p>
                                <input name="datepicker" class="datepicker-default form-control" id="datepicker">
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Date picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xl-3 col-xxl-6">
                                        <label>Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30"> <span
                                                class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 col-xxl-6">
                                        <label>Auto close Clock Picker</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                            data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> <span
                                                class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 col-xxl-6 mt-4 mt-lg-0">
                                        <label>Now time</label>
                                        <div class="input-group">
                                            <input class="form-control" id="single-input" value="" placeholder="Now">
                                            <span class="input-group-btn"><button type="button" id="check-minutes"
                                                    class="btn waves-effect waves-light btn-ft btn-success">Check the
                                                    minutes</button></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-3 col-xxl-6 mt-4 mt-lg-0">
                                        <label>Left Placement</label>
                                        <div class="input-group clockpicker" data-placement="left" data-align="top"
                                            data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14"> <span
                                                class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Material Date picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row form-material">
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label>Default Material Date Picker</label>
                                        <input type="text" class="form-control" placeholder="2017-06-04" id="mdate">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6">
                                        <label>Default Material Date Timepicker</label>
                                        <input type="text" id="date-format" class="form-control"
                                            placeholder="Saturday 24 June 2017 - 21:44">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mt-4 mt-lg-0">
                                        <label>Time Picker</label>
                                        <input class="form-control" id="timepicker" placeholder="Check time">
                                    </div>
                                    <div class="col-xl-3 col-xxl-6 col-md-6 mt-4 mt-lg-0">
                                        <label>Min Date set</label>
                                        <input type="text" class="form-control" placeholder="set min date"
                                            id="min-date">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Color Picker</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 mb-5">
                                        <div class="example">
                                            <p class="mb-1">Simple mode</p>
                                            <input type="text" class="as_colorpicker form-control" value="#7ab2fa">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-5">
                                        <div class="example">
                                            <p class="mb-1">Complex mode</p>
                                            <input type="text" class="complex-colorpicker form-control" value="#fa7a7a">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-5">
                                        <div class="example">
                                            <p class="mb-1">Gradiant mode</p>
                                            <input type="text" class="gradient-colorpicker form-control"
                                                value="#bee0ab">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('assets_admin/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('assets_admin/js/quixnav-init.js')}}"></script>
    <script src="{{asset('assets_admin/js/custom.min.js')}}"></script>



    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{asset('assets_admin/vendor/moment/moment.min.js')}}"></script>
    <script src="{{asset('assets_admin/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- clockpicker -->
    <script src="{{asset('assets_admin/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
    <!-- asColorPicker -->
    <script src="{{asset('assets_admin/vendor/jquery-asColor/jquery-asColor.min.js')}}"></script>
    <script src="{{asset('assets_admin/vendor/jquery-asGradient/jquery-asGradient.min.js')}}"></script>
    <script src="{{asset('assets_admin/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js')}}"></script>
    <!-- Material color picker -->
    <script
        src="{{asset('assets_admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}">
    </script>
    <!-- pickdate -->
    <script src="{{asset('assets_admin/vendor/pickadate/picker.js')}}"></script>
    <script src="{{asset('assets_admin/vendor/pickadate/picker.time.js')}}"></script>
    <script src="{{asset('assets_admin/vendor/pickadate/picker.date.js')}}"></script>



    <!-- Daterangepicker -->
    <script src="{{asset('assets_admin/js/plugins-init/bs-daterange-picker-init.js')}}"></script>
    <!-- Clockpicker init -->
    <script src="{{asset('assets_admin/js/plugins-init/clock-picker-init.js')}}"></script>
    <!-- asColorPicker init -->
    <script src="{{asset('assets_admin/js/plugins-init/jquery-asColorPicker.init.js')}}"></script>
    <!-- Material color picker init -->
    <script src="{{asset('assets_admin/js/plugins-init/material-date-picker-init.js')}}"></script>
    <!-- Pickdate -->
    <script src="{{asset('assets_admin/js/plugins-init/pickadate-init.js')}}"></script>
</body>

</html>