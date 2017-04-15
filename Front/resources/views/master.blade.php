<!DOCTYPE html>
<html lang="zxx">
    <head>
      <title>@yield('title')</title>

      <!-- Favicon -->
      <link href="template/images/favicon.ico" rel="icon" type="image/x-icon" />
      @include('layout.head')
    </head>

    <body>

        <!-- Start: Header Section -->
          @include('layout.navbar')
        <!-- End: Header Section -->
        <!-- Start: Slider Section -->

          @yield('slider')
        <!-- End: Slider Section -->

        <!-- Start: Search Section -->
          @include('layout.search')
        <!-- End: Search Section -->

        <!-- Start: Welcome Section -->
        <div id="content" class="site-content">
          @yield('content')
        </div>
        <!-- End: Social Network -->

        <!-- Start: Footer -->
        @include('layout.footer')
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        @include('layout.js')

    </body>
</html>
