<!DOCTYPE html>
<html lang="zxx">
    <head>
      <title>@yield('title')</title>

      <!-- Favicon -->
      <link href="/template/images/favicon.ico" rel="icon" type="image/x-icon" />
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

        <!-- End: Search Section -->

        <!-- Start: Welcome Section -->
        <div id="content" class="site-content">
          <div id="primary" class="content-area">
              <main id="main" class="site-main">
                  @yield('content')
              </main>
          </div>
        </div>
        <!-- End: Social Network -->

        <!-- Start: Footer -->
        @include('layout.footer')
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        @include('layout.js')
        @yield('js_more')

    </body>
</html>
