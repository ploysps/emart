<!DOCTYPE html>
<html lang="en">
  <head>
	@include('backend.layouts.head')
  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    @include('backend.layouts.nav')
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      @include('backend.layouts.sidebar')
      <!-- partial -->
      @yield('content')
      <!-- page content ends -->
    </div>
    
	@include('backend.layouts.footer')
  </body>
</html>