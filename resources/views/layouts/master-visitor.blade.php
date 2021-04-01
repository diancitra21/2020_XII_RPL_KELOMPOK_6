<!DOCTYPE html>
<html lang="en">
   @include ('layouts.visitor.head')
   @include('layouts.visitor.header')
<div class="content-wrapper">
      @yield('content')
  </div>

@include ('layouts.visitor.js')
  <!-- end': Javascript -->
  </body>
</html>