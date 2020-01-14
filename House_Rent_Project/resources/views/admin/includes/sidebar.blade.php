@php
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
 $user =  User::where('id',Auth::id())->first();
@endphp
<body class="fixed">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<div class="wrapper">
    <!-- Sidebar  -->
    <nav class="sidebar sidebar-bunker">
        <div class="sidebar-header">
            <a href="">
                <h2 class="text-center">Dashboard</h2>
            </a>
            <!--<a href="index.html" class="logo"><span>bd</span>task</a>-->
            <!-- <a href="index-2.html" class="logo"><img src="{{asset('public/backend/assets')}}/dist/img/logo.png" alt=""></a> -->
        </div><!--/.sidebar header-->
        <div class="profile-element d-flex align-items-center flex-shrink-0">
            <div class="avatar online">
                <img src="{{asset('public/backend/assets')}}/dist/img/avatar-1.jpg" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="profile-text">
                <h6 class="m-0">Admin</h6>
                <span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="96f3eef7fbe6faf3d6f1fbf7fffab8f5f9fb">[email&#160;protected]</a></span>
            </div>
        </div><!--/.profile element-->
        <form class="search sidebar-form" action="#" method="get" >
            <div class="search__inner">
                <input type="text" class="search__text" placeholder="Search...">
                <i class="typcn typcn-zoom-outline search__helper" data-sa-action="search-close"></i>
            </div>
        </form><!--/.search-->
        <div class="sidebar-body">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li class="nav-label">Main Menu</li>
                    <li class="mm-active">
                        <a class="has-arrow material-ripple" href="{{url('admin')}}">
                            <i class="typcn typcn-home-outline mr-2"></i>
                            Dashboard
                        </a>
                        {{--<ul class="nav-second-level">--}}
                            {{--<li class="mm-active"><a href="index-2.html">Default</a></li>--}}
                            {{--<li><a href="dashboard_two.html">Dashboard Two</a></li>--}}
                        {{--</ul>--}}
                    </li>

                    @if ($user->role_id ==1)
                    <li><a href="{{url('user/list')}}"><i class="typcn typcn-messages mr-2"></i> User</a></li>
                    @endif
                    <li><a href="{{url('blog')}}"><i class="typcn typcn-messages mr-2"></i> Blog </a></li>
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-chart-pie-outline mr-2"></i>--}}
                            {{--Charts--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="charts_flot.html">Flot Chart</a></li>--}}
                            {{--<li><a href="charts_Js.html">Chart js</a></li>--}}
                            {{--<li><a href="charts_morris.html">Morris Charts</a></li>--}}
                            {{--<li><a href="charts_sparkline.html">Sparkline Charts</a></li>--}}
                            {{--<li><a href="charts_am.html">Am Charts</a></li>--}}
                            {{--<li><a href="charts_apex.html">Chart Apex</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="chat.html"><i class="typcn typcn-messages mr-2"></i> Chat</a></li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-mail mr-2"></i>--}}
                            {{--Mailbox--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="mailbox.html">Mailbox</a></li>--}}
                            {{--<li><a href="mailbox_details.html">Mailbox Details</a></li>--}}
                            {{--<li><a href="compose.html">Compose</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-archive mr-2"></i>--}}
                            {{--Tables--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="tables_bootstrap.html">Bootstrap tables</a></li>--}}
                            {{--<li>--}}
                                {{--<a class="has-arrow" href="#" aria-expanded="false">Data tables</a>--}}
                                {{--<ul class="nav-third-level">--}}
                                    {{--<li><a href="tables_data_basic.html">Basic initialization</a></li>--}}
                                    {{--<li><a href="tables_data_sources.html">Data sources</a></li>--}}
                                    {{--<li><a href="tables_data_api.html">API</a></li>--}}
                                    {{--<li><a href="tables_data_styling.html">Styling</a></li>--}}
                                    {{--<li><a href="tables_data_advanced.html">Advanced initialization</a></li>--}}
                                    {{--<li><a href="tables_data_bootstrap4.html">Bootstrap4</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="tables_foo.html">FooTable</a></li>--}}
                            {{--<li><a href="tables_jsgrid.html">Jsgrid table</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-clipboard mr-2"></i>--}}
                            {{--Forms--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="forms_basic.html">Basic Forms</a></li>--}}
                            {{--<li><a href="forms_input_group.html">Input group</a></li>--}}
                            {{--<li><a href="forms_mask.html">Form Mask</a></li>--}}
                            {{--<li><a href="forms_touchspin.html">Touchspin</a></li>--}}
                            {{--<li><a href="forms_select.html">Select</a></li>--}}
                            {{--<li><a href="forms_cropper.html">Cropper</a></li>--}}
                            {{--<li><a href="forms_file_upload.html">Forms File Upload</a></li>--}}
                            {{--<li><a href="forms_editor_ck.html">CK Editor</a></li>--}}
                            {{--<li><a href="forms_editor_summernote.html">Summernote</a></li>--}}
                            {{--<li><a href="forms_wizard.html">Form Wizaed</a></li>--}}
                            {{--<li><a href="forms_editor_markdown.html">Markdown</a></li>--}}
                            {{--<li><a href="forms_editor_trumbowyg.html">Trumbowyg</a></li>--}}
                            {{--<li><a href="forms_editor_wysihtml5.html">Wysihtml5</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="nav-label">Components</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-coffee mr-2"></i>--}}
                            {{--UI Elements--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="ui_buttons.html">Buttons</a></li>--}}
                            {{--<li><a href="ui_badges.html">Badges</a></li>--}}
                            {{--<li><a href="ui_spinners.html">Spinners</a></li>--}}
                            {{--<li><a href="ui_tabs.html">Tab</a></li>--}}
                            {{--<li><a href="ui_notification.html">Notification</a></li>--}}
                            {{--<li><a href="ui_tree_view.html">Tree View</a></li>--}}
                            {{--<li><a href="ui_progressbars.html">Progressber</a></li>--}}
                            {{--<li><a href="ui_list_view.html">List View</a></li>--}}
                            {{--<li><a href="ui_ratings.html">Ratings</a></li>--}}
                            {{--<li><a href="ui_datetime_picker.html">Date & Time Picker</a></li>--}}
                            {{--<li><a href="ui_typography.html">Typography</a></li>--}}
                            {{--<li><a href="ui_modals.html">Modals</a></li>--}}
                            {{--<li><a href="ui_icheck_toggle_pagination.html">iCheck, Toggle, pagination</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-world-outline mr-2"></i>--}}
                            {{--Maps--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="maps_amcharts.html">Amcharts Map</a></li>--}}
                            {{--<li><a href="maps_gmaps.html">gMaps</a></li>--}}
                            {{--<li><a href="maps_data.html">Data Maps</a></li>--}}
                            {{--<li><a href="maps_jvector.html">Jvector Maps</a></li>--}}
                            {{--<li><a href="maps_google.html">Google map</a></li>--}}
                            {{--<li><a href="maps_snazzy.html">Snazzy Map</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-info-large-outline mr-2"></i>--}}
                            {{--Icons--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="icons_bootstrap.html">Bootstrap Icons</a></li>--}}
                            {{--<li><a href="icons_fontawesome.html">Fontawesome Icon</a></li>--}}
                            {{--<li><a href="icons_flag.html">Flag Icons</a></li>--}}
                            {{--<li><a href="icons_material.html">Material Icons</a></li>--}}
                            {{--<li><a href="icons_weather.html">Weather Icons </a></li>--}}
                            {{--<li><a href="icons_line.html">Line Icons</a></li>--}}
                            {{--<li><a href="icons_pe.html">Pe Icons</a></li>--}}
                            {{--<li><a href="icon_socicon.html">Socicon Icons</a></li>--}}
                            {{--<li><a href="icons_typicons.html">Typicons Icons</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="widgets.html"><i class="typcn typcn-gift mr-2"></i>Widgets</a></li>--}}
                    {{--<li><a href="calender.html"><i class="typcn typcn-calendar-outline mr-2"></i>Calendar</a></li>--}}
                    {{--<li class="nav-label">Extra</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-device-tablet mr-2"></i>--}}
                            {{--App Views--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="invoice.html">Invoice</a></li>--}}
                            {{--<li><a href="invoice2.html">Invoice two</a></li>--}}
                            {{--<li><a href="timeline_horizontal.html">Horizontal timeline</a></li>--}}
                            {{--<li><a href="timeline_vertical.html">Vertical timeline</a></li>--}}
                            {{--<li><a href="pricing.html">Pricing Table</a></li>--}}
                            {{--<li><a href="range_slider.html">Range Slider</a></li>--}}
                            {{--<li><a href="carousel.html">Carousel</a></li>--}}
                            {{--<li><a href="code_editor.html">Code editor</a></li>--}}
                            {{--<li><a href="gridSystem.html">Grid System</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-book mr-2"></i>--}}
                            {{--Authentication--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="login.html">Login</a></li>--}}
                            {{--<li><a href="register.html">Register</a></li>--}}
                            {{--<li><a href="user_profile.html">Profile</a></li>--}}
                            {{--<li><a href="forget_password.html">Forget password</a></li>--}}
                            {{--<li><a href="lockscreen.html">Lockscreen</a></li>--}}
                            {{--<li><a href="404.html">404 Error</a></li>--}}
                            {{--<li><a href="505.html">505 Error</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-flow-merge mr-2"></i>--}}
                            {{--Multi Level Menu--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="#">Menu Item</a></li>--}}
                            {{--<li><a href="#">Menu Item - 2</a></li>--}}
                            {{--<li>--}}
                                {{--<a class="has-arrow" href="#" aria-expanded="false">Level - 2</a>--}}
                                {{--<ul class="nav-third-level">--}}
                                    {{--<li><a href="#">Menu Item</a></li>--}}
                                    {{--<li>--}}
                                        {{--<a class="has-arrow" href="#" aria-expanded="false">Level - 3</a>--}}
                                        {{--<ul class="nav-fourth-level">--}}
                                            {{--<li><a href="#">Level - 4</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="blank-page.html"><i class="typcn typcn-bookmark mr-2"></i>Blank page</a></li>--}}
                    {{--<li>--}}
                        {{--<a class="has-arrow material-ripple" href="#">--}}
                            {{--<i class="typcn typcn-puzzle-outline mr-2"></i>--}}
                            {{--Layouts--}}
                        {{--</a>--}}
                        {{--<ul class="nav-second-level">--}}
                            {{--<li><a href="layouts_layout.html">Layout</a></li>--}}
                            {{--<li><a href="layouts_fixed.html">Fixed layout</a></li>--}}
                            {{--<li><a href="layouts_fixed-without__navbar.html">Fixed layout without navbar</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="changelog.html"><i class="typcn typcn-attachment-outline mr-2"></i>Changelog<span class="badge badge-success ml-auto">v1.1.0</span></a></li>--}}
                    {{--<li><a href="#"><i class="typcn typcn-support mr-2"></i>Documentation</a></li>--}}
                </ul>
            </nav>
        </div><!-- sidebar-body -->
    </nav>
    <!-- Page Content  -->
    <div class="content-wrapper">
        <div class="main-content">
            <nav class="navbar-custom-menu navbar navbar-expand-lg m-0">
                <div class="sidebar-toggle-icon" id="sidebarCollapse">
                    sidebar toggle<span></span>
                </div><!--/.sidebar toggle icon-->
                <div class="d-flex flex-grow-1">
                    <ul class="navbar-nav flex-row align-items-center ml-auto">
                        <li class="nav-item dropdown quick-actions">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="typcn typcn-th-large-outline"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" >
                                <div class="nav-grid-row row">
                                    <a href="#" class="icon-menu-item col-4">
                                        <i class="typcn typcn-cog-outline d-block"></i>
                                        <span>Settings</span>
                                    </a>
                                    <a href="#" class="icon-menu-item col-4">
                                        <i class="typcn typcn-group-outline d-block"></i>
                                        <span>Users</span>
                                    </a>
                                    <a href="#" class="icon-menu-item col-4">
                                        <i class="typcn typcn-puzzle-outline d-block"></i>
                                        <span>Components</span>
                                    </a>
                                    <a href="#" class="icon-menu-item col-4">
                                        <i class="typcn typcn-chart-bar-outline d-block"></i>
                                        <span>Profits</span>
                                    </a>
                                    <a href="#" class="icon-menu-item col-4">
                                        <i class="typcn typcn-time d-block"></i>
                                        <span>New Event</span>
                                    </a>
                                    <a href="#" class="icon-menu-item col-4">
                                        <i class="typcn typcn-edit d-block"></i>
                                        <span>Tasks</span>
                                    </a>
                                </div>
                            </div>
                        </li><!--/.dropdown-->
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="typcn typcn-messages"></i></a>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link dropdown-toggle badge-dot" href="#" data-toggle="dropdown">
                                <i class="typcn typcn-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <h6 class="notification-title">Notifications</h6>
                                <p class="notification-text">You have 2 unread notification</p>
                                <div class="notification-list">
                                    <div class="media new">
                                        <div class="img-user"><img src="{{asset('public/backend/assets')}}/dist/img/avatar.png" alt=""></div>
                                        <div class="media-body">
                                            <h6>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</h6>
                                            <span>Mar 15 12:32pm</span>
                                        </div>
                                    </div><!--/.media -->
                                    <div class="media new">
                                        <div class="img-user online"><img src="{{asset('public/backend/assets')}}/dist/img/avatar2.png" alt=""></div>
                                        <div class="media-body">
                                            <h6><strong>Joyce Chua</strong> just created a new blog post</h6>
                                            <span>Mar 13 04:16am</span>
                                        </div>
                                    </div><!--/.media -->
                                    <div class="media">
                                        <div class="img-user"><img src="{{asset('public/backend/assets')}}/dist/img/avatar3.png" alt=""></div>
                                        <div class="media-body">
                                            <h6><strong>Althea Cabardo</strong> just created a new blog post</h6>
                                            <span>Mar 13 02:56am</span>
                                        </div>
                                    </div><!--/.media -->
                                    <div class="media">
                                        <div class="img-user"><img src="{{asset('public/backend/assets')}}/dist/img/avatar4.png" alt=""></div>
                                        <div class="media-body">
                                            <h6><strong>Adrian Monino</strong> added new comment on your photo</h6>
                                            <span>Mar 12 10:40pm</span>
                                        </div>
                                    </div><!--/.media -->
                                </div><!--/.notification -->
                                <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
                            </div><!--/.dropdown-menu -->
                        </li><!--/.dropdown-->
                        <li class="nav-item dropdown user-menu">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <!--<img src="{{asset('public/backend/assets')}}/dist/img/user2-160x160.png" alt="">-->
                                <i class="typcn typcn-user-add-outline"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" >
                                <div class="dropdown-header d-sm-none">
                                    <a href="#" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                </div>
                                <div class="user-header">
                                    <div class="img-user">
                                        <img src="{{asset('public/backend/assets')}}/dist/img/avatar-1.jpg" alt="">
                                    </div><!-- img-user -->
                                    <h6>Admin</h6>
                                    <span><a href="cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="45203d2428352920052228242c296b262a28">[email&#160;protected]</a></span>
                                </div><!-- user-header -->
                                <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
                                <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
                                <a href="" class="dropdown-item"><i class="typcn typcn-arrow-shuffle"></i> Activity Logs</a>
                                <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">
                                    <i class="typcn typcn-key-outline"></i> Sign Out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div><!--/.dropdown-menu -->
                        </li>
                    </ul><!--/.navbar nav-->
                    <div class="nav-clock">
                        <div class="time">
                            <span class="time-hours"></span>
                            <span class="time-min"></span>
                            <span class="time-sec"></span>
                        </div>
                    </div><!-- nav-clock -->
                </div>
            </nav><!--/.navbar-->
            <!--Content Header (Page header)-->