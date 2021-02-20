<!DOCTYPE html>
<html lang="en">

@include('layout.quote.partials.head')

<body>
  <!-- Navigation -->
  @include('layout.quote.partials.navbar')

  @if (Route::is('accueil'))
    @include('layout.quote.partials.intro')
  @endif
  @include('layout.quote.partials.breadcrumb')
  <!-- Page Content -->
  <div class="container">

    <div class="row">
        
      <div class="col-lg-8">
        <!-- /.card -->
        <script src="//code.jquery.com/jquery.js"></script>
        @include('flashy::message')
        
        @yield('content')

        @include('pages.inscription')
        
        @include('pages.connexion')
       
      </div>
        <!-- /.col-lg-3 -->

      <div class="col-lg-4">
        @include('layout.quote.partials.sidebar')
      </div>

    </div>
   
    <!-- /.container -->

    <!-- Footer -->

    <!-- Bootstrap core JavaScript -->
    @include('layout.quote.partials.scriptjs')
  </div>
  @if (Route::is('accueil'))
    @include('layout.quote.partials.middle')
  @endif
   
  @include('layout.quote.partials.footer')
</body>

</html>
