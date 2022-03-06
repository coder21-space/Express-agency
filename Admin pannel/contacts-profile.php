    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/head_start.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/head_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->

            <!-- Topbar Start -->
            <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                                        </div>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>
                            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
            
                                    </div> 
                                </div>
                            </form>
                        </li>
    
                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
            
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>
    
                                <div class="noti-scroll" data-simplebar>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
    
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    Nowak <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="contacts-profile.html" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="auth-logout.html" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="16">
                            </span>
                        </a>
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="16">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                        <li>
                            <button class="button-menu-mobile disable-btn waves-effect">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
    
                        <li>
                            <h4 class="page-title-main">Profile</h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->
     <!--================INCLUDE HEAD START PHP=================-->
      <?php  include_once'assets/components/header.php' ?>
    <!--================END INCLUDE HEAD END PHP=================-->
           
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                <div class="bg-picture card-body">
                                    <div class="d-flex align-items-top">
                                        <img src="assets/images/users/profile.jpg"
                                                class="flex-shrink-0 rounded-circle avatar-xl img-thumbnail float-start me-3" alt="profile-image">

                                        <div class="flex-grow-1 overflow-hidden">
                                            <h4 class="m-0">Alexandra Clarkson</h4>
                                            <p class="text-muted"><i>Web Designer</i></p>
                                            <p class="font-13">Hi I'm Alexandra Clarkson,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature it over 2000 years to popular belief Ipsum is not simplyrandom text.</p>

                                            <ul class="social-list list-inline mt-3 mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i
                                                            class="mdi mdi-facebook"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                            class="mdi mdi-google"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                                            class="mdi mdi-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i
                                                            class="mdi mdi-github"></i></a>
                                                </li>
                                            </ul>
        
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                                <!--/ meta -->


                                <div class="card">
                                <form method="post" class="card-body">
                                    <span class="input-icon icon-end">
                                        <textarea rows="3" class="form-control" placeholder="Post a new message"></textarea>
                                    </span>
                                    <div class="pt-1 float-end">
                                        <a href="" class="btn btn-primary btn-sm waves-effect waves-light">Send</a>
                                    </div>
                                    <ul class="nav nav-pills profile-pills mt-1">
                                        <li>
                                            <a href="#"><i class="fa fa-user"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-location-arrow"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class=" fa fa-camera"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-smile"></i></a>
                                        </li>
                                    </ul>

                                </form>
                                </div>

                                <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-top mb-2">
                                        <img src="assets/images/users/user-1.jpg" alt="" class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0"><a href="#" class="text-dark">Adam Jansen</a><small class="ms-1 text-muted">about 2 minuts ago</small></h5>
                                            <p>Story based around the idea of time lapse, animation to post soon!</p>
                                            <div>
                                                <a href="">
                                                    <img src="assets/images/small/img-1.jpg" class="avatar-md rounded">
                                                </a>
                                                <a href="">
                                                    <img src="assets/images/small/img-2.jpg" class="avatar-md rounded">
                                                </a>
                                                <a href="">
                                                    <img src="assets/images/small/img-3.jpg" class="avatar-md rounded">
                                                </a>
                                            </div>
                                            <div class="comment-footer pt-2 mb-3">
                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                <a href="#">Reply</a>
                                            </div>
                                            
                                            <div class="d-flex align-items-top mb-2">
                                                <img src="assets/images/users/user-3.jpg" alt="" class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0"><a href="#" class="text-dark">John Smith</a><small class="ms-1 text-muted">about 1 hour ago</small></h5>
                                                    <p>Wow impressive!</p>

                                                    <div class="comment-footer">
                                                        <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                        <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-top">
                                                <img src="assets/images/users/user-4.jpg" alt="" class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0"><a href="#" class="text-dark">Matt Cheuvront</a><small class="ms-1 text-muted">about 2 hour ago</small></h5>
                                                    <p>Wow, that is really nice.</p>

                                                    <div class="comment-footer mb-3">
                                                        <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                        <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                        <a href="#">Reply</a>
                                                    </div>

                                                    <div class="d-flex align-items-top mb-2">
                                                        <img src="assets/images/users/user-5.jpg" alt="" class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                                        <div class="flex-grow-1">
                                                            <h5 class="mt-0"><a href="#" class="text-dark">Stephanie Walter</a><small class="ms-1 text-muted">about 3 hour ago</small></h5>
                                                            <p>Nice work, makes me think of The Money Pit.</p>
        
                                                            <div class="comment-footer">
                                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  media -->

                                    <div class="d-flex align-items-top mb-3">
                                        <img src="assets/images/users/user-6.jpg" alt="" class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0"><a href="#" class="text-dark">John Smith</a><small class="ms-1 text-muted">about 4 hour ago</small></h5>
                                            <p>i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>

                                            <div class="comment-footer">
                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-top mb-3">
                                        <img src="assets/images/users/user-7.jpg" alt="" class="flex-shrink-0 comment-avatar avatar-sm rounded me-2">
                                        <div class="flex-grow-1">
                                            <h5 class="mt-0"><a href="#" class="text-dark">Nicolai Larson</a><small class="ms-1 text-muted">about 10 hour ago</small></h5>
                                            <p>The parallax is a little odd but O.o that house build is awesome!!</p>

                                            <div class="comment-footer">
                                                <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <a href="" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3">My Team Members</h4>

                                    <ul class="list-group mb-0 user-list">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-start me-2">
                                                    <img src="assets/images/users/user-2.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">Michael Zenaty</h5>
                                                    <p class="desc text-muted mb-0 font-12">CEO</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-start me-2">
                                                    <img src="assets/images/users/user-3.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">James Neon</h5>
                                                    <p class="desc text-muted mb-0 font-12">Web Designer</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-start me-2">
                                                    <img src="assets/images/users/user-5.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">John Smith</h5>
                                                    <p class="desc text-muted mb-0 font-12">Web Developer</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-start me-2">
                                                    <img src="assets/images/users/user-6.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">Michael Zenaty</h5>
                                                    <p class="desc text-muted mb-0 font-12">Programmer</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user avatar-sm float-start me-2">
                                                    <img src="assets/images/users/user-1.jpg" alt="" class="img-fluid rounded-circle">
                                                </div>
                                                <div class="user-desc">
                                                    <h5 class="name mt-0 mb-1">Mat Helme</h5>
                                                    <p class="desc text-muted mb-0 font-12">Manager</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                                <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>

                                    <h4 class="header-title mt-0 mb-3"><i class="mdi mdi-notification-clear-all me-1"></i> Upcoming Reminders</h4>

                                    <ul class="list-group mb-0 user-list">
                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-start me-3">
                                                    <i class="mdi mdi-circle text-primary"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Meet Manager</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 24, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-start me-3">
                                                    <i class="mdi mdi-circle text-success"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Project Discussion</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 25, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-start me-3">
                                                    <i class="mdi mdi-circle text-pink"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Meet Manager</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 26, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-start me-3">
                                                    <i class="mdi mdi-circle text-muted"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Project Discussion</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 27, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="list-group-item">
                                            <a href="#" class="user-list-item">
                                                <div class="user float-start me-3">
                                                    <i class="mdi mdi-circle text-danger"></i>
                                                </div>
                                                <div class="user-desc overflow-hidden">
                                                    <h5 class="name mt-0 mb-1">Meet Manager</h5>
                                                    <span class="desc text-muted font-12 text-truncate d-block">February 28, 2019 - 10:30am to 12:45pm</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </div>

                            </div>
                        </div>    
                    </div> <!-- container -->

                </div> <!-- content -->

         <!--================INCLUDE FOOTER PHP=================-->
         <?php include_once'assets/components/footer.php'?>  
         <!--================END INCLUDE FOOTER PHP=================--> 
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
       
        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
     <!--================INCLUDE HEAD START PHP=================-->
    <?php  include_once'assets/components/script_end.php' ?>
    <!--================END INCLUDE HEAD END PHP=================->