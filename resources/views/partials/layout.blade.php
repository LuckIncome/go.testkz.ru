<!DOCTYPE html>
<html lang="{{session()->get('locale')}}">
@include('partials.head')
<body>   
  <main id="app" ref="infoBox">
      @include('partials.header')
      <div class="dark-wrapper"  :style="`height: ${height}`"></div>
      @yield('content')
      @include('partials.footer')
      @include('partials.modals')
  </main>
  @include('partials.scripts')
  @yield('scripts')
</body>
</html>