<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
    @include('partials._javascripts')
    
    @yield('scripts')
  </head>
  
  <body>

    @include('partials._nav')    

    <div class="container">
        
      @yield('content')
      @include('partials._footer')

    </div> <!-- end of container -->
    
  </body>
</html>