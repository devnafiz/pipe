<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin |Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('back_end/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('back_end/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{ asset('back_end/vendors/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{ asset('back_end/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('back_end/vendors/font-awesome/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('back_end/vendors/jquery-bar-rating/fontawesome-stars.css')}}">
  <!-- End plugin css for this page -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('back_end/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{url('/admin/dashbord')}}"><img src="{{asset('/front_end/images/logo2.jpg')}}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/admin/dashbord')}}"><img src="{{asset('/front_end/images/logo2.jpg')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle nav-btn" id="actionDropdown" href="#" data-toggle="dropdown">
              <span class="btn">+ Setting</span>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-left" aria-labelledby="actionDropdown">
              <a class="dropdown-item" href="#">
                <i class="icon-user text-primary"></i>
               {{Session::get('adminSession','username')}}
              </a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('admin/logout')}}">
                <i class="icon-docs text-success"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <!-- <li class="nav-item dropdown d-none d-lg-flex">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
              <i class="flag-icon flag-icon-gb"></i>
              English
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-fr"></i>
                French
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-es"></i>
                Espanol
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-lt"></i>
                Latin
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-medium" href="#">
                <i class="flag-icon flag-icon-ae"></i>
                Arabic
              </a>
            </div>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="icon-info mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="icon-speech mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="icon-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="icon-envelope mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left"> <?php 
                  $unread=DB::table('notifications')->where('admin_seen',0)->count();
                   $notification=DB::table('notifications')->latest()->get()->take(5);

                 
                ?>You have <?php echo $unread;?> unread mails 
                </p>
               
                

               
                <span class="badge badge-info badge-pill float-right"><a href="{{url('/admin/view-contact')}}">View all</a></span>
              </div>
                @foreach($notification as $notfy)

                   @if($notfy->admin_seen==0)

              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item notification" rel1="seen-notification" style="background-color: #96e2e4" rel="{{$notfy->id}}">
                <!-- <div class="preview-thumbnail">
                  <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image" class="profile-pic">
                </div> -->
                <div class="preview-item-content flex-grow">
                  <?php  $contactDetails=DB::table('contactus')->where('id',$notfy->contact_id)->get(); ?>
                  @foreach ($contactDetails as $contact)
                  <?php // $contactDetails;?>
                  <h6 class="preview-subject ellipsis font-weight-medium" style="max-width: 265px;"> {{$contact->name}}
                    <span class="float-right font-weight-light small-text"> {{ \Carbon\Carbon::parse($notfy->created_at)->diffForHumans() }}</span>
                  </h6>
                  <p class="font-weight-light small-text">
                   Mobile:{{$contact->phone}}&nbsp Email:{{$contact->email}}
                  </p>
                  @endforeach
                </div>
              </a>
              <div class="dropdown-divider"></div>
              @else
                   <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" >
                <!-- <div class="preview-thumbnail">
                  <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image" class="profile-pic">
                </div> -->
                <div class="preview-item-content flex-grow">
                  <?php $contactDetails=DB::table('contactus')->where('id',$notfy->contact_id)->first(); ?>
                  <h6 class="preview-subject ellipsis font-weight-medium" style="max-width: 265px;">{{$contactDetails->name}}
                    <span class="float-right font-weight-light small-text"> {{ \Carbon\Carbon::parse($notfy->created_at)->diffForHumans() }}</span>
                  </h6>
                  <p class="font-weight-light small-text">
                   Mobile:{{$contactDetails->phone}}&nbsp Email:{{$contactDetails->email}}
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>

              @endif
               @endforeach

            
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="icon-grid"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles primary"></div>
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles pink"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default"></div>
            </div>
          </div>
        </div>
       <!--  <div id="right-sidebar" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <ul class="nav nav-tabs" id="setting-panel" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
            </li>
          </ul>
          <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
              <div class="add-items d-flex px-3 mb-0">
                <form class="form w-100">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                  </div>
                </form>
              </div>
              <div class="list-wrapper px-3">
                <ul class="d-flex flex-column-reverse todo-list">
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Team review meeting at 3.00 PM
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Prepare for presentation
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox">
                        Resolve all the low priority tickets due today
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Schedule meeting for next week
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked>
                        Project review
                      </label>
                    </div>
                    <i class="remove mdi mdi-close-circle-outline"></i>
                  </li>
                </ul>
              </div>
              <div class="events py-4 border-bottom px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 11 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
                <p class="text-gray mb-0">build a js based app</p>
              </div>
              <div class="events pt-4 px-3">
                <div class="wrapper d-flex mb-2">
                  <i class="mdi mdi-circle-outline text-primary mr-2"></i>
                  <span>Feb 7 2018</span>
                </div>
                <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                <p class="text-gray mb-0 ">Call Sarah Graves</p>
              </div>
            </div>
           
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
              <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
              </div>
              <ul class="chat-list">
                <li class="list active">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Thomas Douglas</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <div class="wrapper d-flex">
                      <p>Catherine</p>
                    </div>
                    <p>Away</p>
                  </div>
                  <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                  <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Daniel Russell</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="offline"></span></div>
                  <div class="info">
                    <p>James Richardson</p>
                    <p>Away</p>
                  </div>
                  <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Madeline Kennedy</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                  <div class="profile"><img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"><span class="online"></span></div>
                  <div class="info">
                    <p>Sarah Graves</p>
                    <p>Available</p>
                  </div>
                  <small class="text-muted my-auto">47 min</small>
                </li>
              </ul>
            </div>
           
          </div>
        </div> -->
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('backend_layout.sidebar_left');
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-basket icon-lg text-success"></i>
                    <div class="ml-3">
                      <p class="mb-0">Daily Order</p>
                      <h6>12569</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-rocket icon-lg text-warning"></i>
                    <div class="ml-3">
                      <p class="mb-0">Tasks Completed</p>
                      <h6>2346</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-diamond icon-lg text-info"></i>
                    <div class="ml-3">
                      <p class="mb-0">Monthly Sales</p>
                      <h6>896546</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-md-center">
                    <i class="mdi mdi-chart-line-stacked icon-lg text-danger"></i>
                    <div class="ml-3">
                      <p class="mb-0">Total Revenue</p>
                      <h6>$ 56000</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-4 d-flex flex-column">
              <div class="row flex-grow">
                <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="card-title">Growth</h6>
                      <div class="row">
                        <div class="col-12 text-center">
                          <div class="row">
                            <div class="col-6 border-right">
                              <h4>63%</h4>
                              <p>Monthly</p>
                            </div>
                            <div class="col-6">
                              <h4>20%</h4>
                              <p>Daily</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-column align-items-center mt-3">
                        <div id="growth-chart">
                            7, 10, 11, 9, 11, 16, 12, 15, 13, 8, 12, 10, 13, 10, 16, 15, 12, 8, 10, 7, 16, 12, 8, 9, 7, 12
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                  <div class="card bg-info">
                    <div class="text-white py-3 px-4">
                      <h6 class="card-title text-white mb-0">Page View</h6>
                      <p>3669.25</p>
                      <div class="chart-container">
                        <canvas class="w-100 h-100" id="dashboard-lineChart-2" height="50"></canvas>
                      </div>
                      <small class="text-white">View Details</small>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-lg-12 grid-margin stretch-card">
                  <div class="card bg-success">
                    <div class="text-white py-3 px-4">
                      <h6 class="card-title text-white mb-0">Donations</h6>
                      <p>$56569</p>
                      <div class="chart-container">
                        <canvas class="w-100 h-100" id="dashboard-lineChart-3" height="50"></canvas>
                      </div>
                      <small class="text-white">View Details</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Daily Sales</h6>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center">
                      <div class="wrapper">
                        <h4>$2256</h4>
                        <small class="text-muted">Totel sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>584</h4>
                        <small class="text-muted">Compaign</small>
                      </div>
                    </div>
                    <div id="dashboard-donut-chart" style="height:250px"></div>
                  </div>
                  <div id="legend" class="donut-legend"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h6 class="card-title">Total Revenue</h6>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center mb-5">
                      <div class="wrapper">
                        <h4>6,256</h4>
                        <small class="text-muted">Totel sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>8569</h4>
                        <small class="text-muted">Open Compaign</small>
                      </div>
                    </div>
                  </div>
                  <div id="morris-line-example" style="height:250px;"></div>
                  <div class="w-75 mx-auto">
                    <div class="d-flex justify-content-between text-center mt-5">
                      <div class="wrapper">
                        <h4>5136</h4>
                        <small class="text-muted">Online Sales</small>
                      </div>
                      <div class="wrapper">
                        <h4>4596</h4>
                        <small class="text-muted">Store Sales</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        

          
       
          <div class="row">
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                    <i class="mdi mdi-facebook icon-lg text-facebook"></i>
                    <div class="wrapper ml-md-3">
                      <p class="text-facebook mb-0 font-weight-medium">15k Likes</p>
                      <small class="text-muted mb-0">You main list growing !</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                    <i class="mdi mdi-twitter icon-lg text-twitter"></i>
                    <div class="wrapper ml-md-3">
                      <p class="text-twitter mb-0 font-weight-medium">18k followers</p>
                      <small class="text-muted mb-0">There you are !</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-md-flex align-items-center justify-content-center text-center text-md-left">
                    <i class="mdi mdi-linkedin icon-lg text-linkedin"></i>
                    <div class="wrapper ml-md-3">
                      <p class="text-linkedin mb-0 font-weight-medium">5k connections</p>
                      <small class="text-muted mb-0">Going good !</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center">
                    <img class="img-md rounded" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                    <div class="wrapper ml-4">
                      <p class="mb-0 font-weight-medium">Tim Cook</p>
                      <small class="text-muted mb-0">timcook@gmail.com</small>
                      <p class="text-success mb-0 font-weight-medium">Designer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center">
                    <img class="img-md rounded" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                    <div class="wrapper ml-4">
                      <p class="mb-0 font-weight-medium">Sarah Graves</p>
                      <small class="text-muted mb-0">Sarahgraves@gmail.com</small>
                      <p class="text-success mb-0 font-weight-medium">Developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="wrapper d-flex align-items-center justify-content-start justify-content-sm-center">
                    <img class="img-md rounded" src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image">
                    <div class="wrapper ml-4">
                      <p class="mb-0 font-weight-medium">David Grey</p>
                      <small class="text-muted mb-0">David@gmail.com</small>
                      <p class="text-success mb-0 font-weight-medium">Support Lead</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="#">Sheikh Tube Mills</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('back_end/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ asset('back_end/vendors/jquery-bar-rating/jquery.barrating.min.js')}}"></script>
  <script src="{{ asset('back_end/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('back_end/vendors/raphael/raphael.min.js')}}"></script>
  <script src="{{ asset('back_end/vendors/morris.js/morris.min.js')}}"></script>
  <script src="{{ asset('back_end/vendors/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('back_end/js/off-canvas.js')}}"></script>
  <script src="{{ asset('back_end/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset('back_end/js/misc.js')}}"></script>
  <script src="{{ asset('back_end/js/settings.js')}}"></script>
  <script src="{{ asset('back_end/js/todolist.js')}}"></script>
  <script src="{{asset('back_end/js/custom.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('back_end/js/dashboard.js')}}"></script>
  <style type="text/css">
    .sidebar{
          width: auto !important;
    }

  </style>
  <!-- End custom js for this page-->
</body>

</html>
