<!DOCTYPE html>
<html lang="en">
    @include('presta-service.partials.head')
  <body>
    <!--Page loader-->
    <div class="loader-wrapper">
        <div class="loader-circle">
            <div class="loader-wave"></div>
        </div>
    </div>
    <!--Page loader-->

    <!--Page Wrapper-->

    <div class="container-fluid">

        <!--Header-->
        @include('presta-service.partials.header')
        <!--Header-->

        <!--Main Content-->

        <div class="row main-content">

            @include('presta-service.partials.sidebar')

            @yield('prestaService')
        </div>

        <!--Main Content-->

    </div>

    <!--Page Wrapper-->

    @include('presta-service.partials.js')
  </body>
</html>
