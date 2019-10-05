 <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <div class="nav-link">
                <div class="profile-image">
                  <img src="http://via.placeholder.com/100x100/f4f4f4/000000" alt="image"/>
                  <span class="online-status online"></span> <!--change class online to offline or busy as needed-->
                </div>
                <div class="profile-name">
                  <p class="name">
                    Marina Michel
                  </p>
                  <p class="designation">
                    Super Admin
                  </p>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/admin/dashbord')}}">
                <i class="icon-rocket menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <span class="badge badge-success">New</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  data-toggle="collapse" href="#slide-layouts" aria-expanded="false" aria-controls="slide-layouts">
                <i class="icon-shield menu-icon"></i>
                <span class="menu-title">Home Slider</span>
              </a>
              <div class="collapse" id="slide-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-slide')}}"> Slide list</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/add-slide')}}">Add slide</a></li>
                  
                </ul>
              </div>
            </li>

            @if(Session::get('adminDetails')['page_access']==1)
            <li class="nav-item">
              <a class="nav-link" href="#page-layouts" data-toggle="collapse" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-shield menu-icon"></i>
                <span class="menu-title">Pages</span>
              </a>
               <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-page')}}"> Page list</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/pages')}}">Add Page</a></li>
                  
                </ul>
              </div>
            </li>
            @endif
            @if(Session::get('adminDetails')['products_access']==1)
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#product-layouts" aria-expanded="false" aria-controls="product-layouts">
                <i class="icon-shield menu-icon"></i>
                <span class="menu-title">Products</span>
              </a>

              <div class="collapse" id="product-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/product-list')}}"> Product list</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/add-product')}}">Add Product</a></li>
                  
                </ul>
              </div>
            </li>
            @endif
            @if(Session::get('adminDetails')['gallery_access']==1)
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">Gallery</span>
                <span class="badge badge-danger">3</span>
              </a>
              <div class="collapse" id="gallery">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('/admin/add-gallery')}}">Add Gallery</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/gallery-list')}}">Gallery List</a></li>
                 
                </ul>
              </div>
            </li>

            @endif
            @if(Session::get('adminDetails')['type']=="Admin")
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#Admin" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-support menu-icon "></i>
                <span class="menu-title">Admin\Sub Admin</span>
                <span class="badge badge-danger">3</span>
              </a>
              <div class="collapse" id="Admin">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="{{url('/admin/add-admin')}}">Add Admin</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-admin')}}">Admin List</a></li>
                 
                </ul>
              </div>
            </li>
            @endif

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#Other" aria-expanded="false" aria-controls="page-layouts">
                <i class="icon-support menu-icon "></i>
                <span class="menu-title">Other</span>
                <span class="badge badge-danger">2</span>
              </a>
              <div class="collapse" id="Other">
                <ul class="nav flex-column sub-menu">
                 
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-subscriber')}}"> Subscriber email</a></li>
                   <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-consultation')}}"> Consultation</a></li>
                   <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-truck-rent')}}"> Truck Rent</a></li>
                 
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link"  data-toggle="collapse" href="#career-layouts" aria-expanded="false" aria-controls="slide-layouts">
                <i class="icon-shield menu-icon"></i>
                <span class="menu-title">Careers</span>
              </a>
              <div class="collapse" id="career-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/add-jobs')}}">Add jobs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/job-list')}}">Jobs list</a></li>
                  
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link"  data-toggle="collapse" href="#tracking-layouts" aria-expanded="false" aria-controls="tracking-layouts">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">Tracking</span>
              </a>
              <div class="collapse" id="tracking-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/add-delivery-tracking')}}">Add Tracking</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-delivery-tracking')}}">Tracking list</a></li>
                  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link"  data-toggle="collapse" href="#pdf-layouts" aria-expanded="false" aria-controls="tracking-layouts">
                <i class="icon-check menu-icon"></i>
                <span class="menu-title">PDF</span>
              </a>
              <div class="collapse" id="pdf-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/add-pdf')}}">Add Pdf</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{url('/admin/view-pdf')}}">PDF list</a></li>
                  
                </ul>
              </div>
            </li>
            <!--<li class="nav-item d-none d-lg-block">
              <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
                <i class="icon-layers menu-icon"></i>
                <span class="menu-title">Sidebar Layouts</span>
                <span class="badge badge-warning">5</span>
              </a>
              <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/compact-menu.html">Compact menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-collapsed.html">Icon menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden.html">Sidebar Hidden</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/layout/sidebar-fixed.html">Sidebar Fixed</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-target menu-icon"></i>
                <span class="menu-title">Basic UI Elements</span>
                <span class="badge badge-success">10</span>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/accordions.html">Accordions</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/badges.html">Badges</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/modals.html">Modals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/progress.html">Progress bar</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/pagination.html">Pagination</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tooltips.html">Tooltips</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="icon-cup menu-icon"></i>
                <span class="menu-title">Advanced Elements</span>
                <span class="badge badge-primary">8</span>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dragula.html">Dragula</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/clipboard.html">Clipboard</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/context-menu.html">Context menu</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/slider.html">Sliders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/carousel.html">Carousel</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/colcade.html">Colcade</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/loaders.html">Loaders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tour.html">Tour</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-flag menu-icon"></i>
                <span class="menu-title">Form elements</span>
                <span class="badge badge-danger">3</span>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>                
                  <li class="nav-item"><a class="nav-link" href="pages/forms/advanced_elements.html">Advanced Elements</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/validation.html">Validation</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
                <i class="icon-anchor menu-icon"></i>
                <span class="menu-title">Editors</span>
                <span class="badge badge-info">3</span>
              </a>
              <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/text_editor.html">Text editors</a></li>
                  <li class="nav-item"><a class="nav-link" href="pages/forms/code_editor.html">Code editors</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="icon-pie-chart menu-icon"></i>
                <span class="menu-title">Charts</span>
                <span class="badge badge-warning">8</span>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
                </ul>
                </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Tables</span>
                <span class="badge badge-info">4</span>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/data-table.html">Data table</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/js-grid.html">Js-grid</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/sortable-table.html">Sortable table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/popups.html">
                <i class="icon-diamond menu-icon"></i>
                <span class="menu-title">Popups</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/ui-features/notifications.html">
                <i class="icon-bell menu-icon"></i>
                <span class="menu-title">Notifications</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="icon-globe menu-icon"></i>
                <span class="menu-title">Icons</span>
                <span class="badge badge-info">4</span>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/flag-icons.html">Flag icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/simple-line-icon.html">Simple line icons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/themify.html">Themify icons</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <i class="icon-location-pin menu-icon"></i>
                <span class="menu-title">Maps</span>
                <span class="badge badge-success">2</span>
              </a>
              <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/maps/mapeal.html">Mapeal</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector Map</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google Map</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-bubbles menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <span class="badge badge-danger">5</span>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="icon-support menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <span class="badge badge-primary">2</span>
              </a>
              <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <i class="icon-user menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <span class="badge badge-warning">6</span>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/landing-page.html"> Landing Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
                <i class="icon-briefcase menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <span class="badge badge-info">3</span>
              </a>
              <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/email.html">
                <i class="icon-cursor menu-icon"></i>
                <span class="menu-title">E-mail</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/calendar.html">
                <i class="icon-calendar menu-icon"></i>
                <span class="menu-title">Calendar</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/todo.html">
                <i class="icon-clock menu-icon"></i>
                <span class="menu-title">Todo List</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/apps/gallery.html">
                <i class="icon-picture menu-icon"></i>
                <span class="menu-title">Gallery</span>
              </a>
            </li>
            <li class="nav-item nav-doc">
              <a class="nav-link bg-primary" href="pages/documentation.html">
                <i class="icon-magnet menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
            <li class="mt-4 nav-item nav-progress">
              <h6 class="nav-progress-heading mt-4 font-weight-normal">
                Today's Sales
                <span class="nav-progress-sub-heading">
                  50 sold
                </span>
              </h6>
              <div class="progress progress-sm">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <h6 class="nav-progress-heading mt-4 font-weight-normal">
                Customer target
                <span class="nav-progress-sub-heading">
                  500
                </span>
              </h6>
              <div class="progress progress-sm">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </li>-->
          </ul>
        </nav>