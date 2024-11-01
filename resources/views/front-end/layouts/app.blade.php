<!DOCTYPE html>
<html lang="en">


  @include('front-end.partials.head')


<body class="royal_preloader">
    <div id="page" class="site">
       
    
        @include('front-end.partials.header')

        <div id="content" class="site-content">
        @yield('frontContent')
           
        </div>

            @include('front-end.partials.footer')
    <!-- #site-footer -->
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="flaticon-up-arrow"></i></a>
        <!-- jQuery -->
            @include('front-end.partials.js')
</body>
</html>