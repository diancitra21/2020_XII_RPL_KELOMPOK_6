<!DOCTYPE html>
<html lang="en">
   @include ('layouts.user.head')
   @include('layouts.user.header')
   @include('layouts.user.sidebar')
   <div class="content-wrapper">
      @yield('content')
  </div>

@include ('layouts.user.js')
  <!-- end': Javascript -->
  </body>
</html>