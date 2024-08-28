<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default"
  data-assets-path="assets/" data-template="vertical-menu-template-starter">

<head>
  <meta charset="utf-8" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <title>@yield('title', 'home')</title>

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />


  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">

  <!-- Font Awsome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="{{asset('assets/vendor/fonts/remixicon/remixicon.css')}}" />
  <link rel="stylesheet" href="">
  <!-- Core CSS -->
  <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{asset('assets/vendor/css/rtl/theme-default.css')}}"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/node-waves/node-waves.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />

  <!-- Helpers -->
  <script src="{{asset('assets/vendor/js/helpers.js')}}"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{asset('assets/vendor/js/template-customizer.js')}}"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{asset('assets/js/config.js')}}"></script>

</head>

<body>

  @yield('content')

  @routes


  <!-- Core JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
  <script src="{{asset('assets/vendor/js/menu.js')}}"></script>
  <!-- endbuild -->

  <!-- Main JS -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('/js/module.js')}}"></script>
  <script src="{{asset('/js/alert.js')}}"></script>
  <script src="{{asset('/js/section.js')}}"></script>


  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- jQuery UI -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <!-- Bootstrap JS Bundle -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>



  <!-- JavaScript to handle back navigation -->
  <script>
    function goBack() {
      history.back();
    }
  </script>


</body>

</html>