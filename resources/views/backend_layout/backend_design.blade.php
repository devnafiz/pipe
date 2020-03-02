<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('back_end/css/style.css')}}">
  @yield('extra-css')
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />


</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend_layout.header');
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
        
        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
       @include('backend_layout.sidebar_left')
        <!-- partial -->
        <div class="content-wrapper">
            
          @if(Session::has('flash_message'))
          
          <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{session('flash_message')}}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
          
          <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{session('flash_message_success')}}</strong>
        </div>
        @endif
          @yield('content')
          
          <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
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
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('back_end/js/dashboard.js')}}"></script>

  <!-- custom js fo sweet alert-->
  
 

   @yield('extra-js');
  <!-- End custom js for this page-->
</body>

</html>
