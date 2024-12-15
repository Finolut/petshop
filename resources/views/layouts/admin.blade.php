<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
  <!-- Required meta tags -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />




<!-- Core Css -->
<link rel="stylesheet" href="{{asset('assets/css/styles.css') }}" />
@yield('csspage')
  <title>mastermenu</title>
</head>

<body>
  
  <!-- Preloader -->
  <div class="preloader">
    <img src="{{ asset('assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
      <!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->


<div class="scroll-sidebar" data-simplebar>
  <div class="fixed-profile mx-3 mt-3">
    <div class="card bg-success-subtle mb-0 shadow-none">
      <div class="card-body p-4">
        <div class="d-flex align-items-center justify-content-between gap-3">
          <div class="d-flex align-items-center gap-3">
            <!-- Profile Image -->
            <img src="https://i.pinimg.com/1200x/1d/07/cc/1d07ccdf1eb729cbf74e1312151cdf96.jpg" width="45" height="45" class="img-fluid rounded-circle" alt="" />
  
            <!-- User Info -->

  
          <!-- Dropdown Button -->
          <div class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <iconify-icon icon="solar:menu-dots-horizontal-outline" class="fs-6"></iconify-icon>
            </a>
  
            <!-- Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
          
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              
              <a href="#" class="dropdown-item d-flex align-items-center text-danger" 
                 onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger me-2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                      <polyline points="16 17 21 12 16 7"></polyline>
                      <line x1="21" y1="12" x2="9" y2="12"></line>
                  </svg>
                  Logout
              </a>
              
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sidebar navigation-->
  @include('layouts.sidebar')
  <!-- End Sidebar navigation -->
</div>



<!-- ---------------------------------- -->
<!-- Start Vertical Layout Sidebar -->
<!-- ---------------------------------- -->
    </aside>
    <!--  Sidebar End -->
    <div class="page-wrapper">


      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
{{-- < --}}
      </aside>

      <div class="body-wrapper">
        <div class="container-fluid">

          <!--  Header End -->
          <!-- Welcome Section Start -->
          @yield('content')
          <!-- Educators End -->
        </div>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.documentElement.setAttribute("data-bs-theme", "light");
            document.documentElement.setAttribute("data-color-theme", "Light_Theme");
        });
      </script>
      


  <!-- Import Js Files -->
@yield('jspage')
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/theme/app.dark.init.js') }}"></script>
<script src="{{ asset('assets/js/theme/theme.js') }}"></script>
<script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
<script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>
<script src="{{ asset('assets/js/theme/feather.min.js') }}"></script>

<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/dashboards/dashboard2.js') }}"></script>
</body>

</html>
