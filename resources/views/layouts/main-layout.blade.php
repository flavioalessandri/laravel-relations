<!DOCTYPE html>
<html lang="en" dir="ltr">

  @include('partials.head')

  <body>
    <div class="wrapper">


    @include('partials.header')

    <main>

      @yield('content')

    </main>


    @include('partials.footer')


    </div>

    <script src="{{ asset('/js/app.js')}}" charset="utf-8"></script>
  </body>
</html>
