<!DOCTYPE html>
<html lang="en">
   @include ('layouts.admin.head')
   @include('layouts.admin.header')
   @include('layouts.admin.sidebar')
   <div class="content-wrapper">
      @yield('content')
  </div>

@include ('layouts.admin.js')
  <!-- end': Javascript -->
  </body>
</html>