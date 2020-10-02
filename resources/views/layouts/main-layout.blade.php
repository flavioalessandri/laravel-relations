<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('partials.head')

  <body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')



    <script src="{{ asset('/js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
