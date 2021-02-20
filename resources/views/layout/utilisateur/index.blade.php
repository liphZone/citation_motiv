<!DOCTYPE html>
<html lang="fr">

<head>
 @include('layout.utilisateur.partials.head')
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('layout.utilisateur.partials.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          @include('layout.utilisateur.partials.navbar')

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <script src="//code.jquery.com/jquery.js"></script>
            @include('flashy::message')
            
              @yield('content')
            </div>
          </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('layout.utilisateur.partials.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Déconnexion </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Voulez-vous vous déconnecter ?</div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="{{ route('deconnexion') }}">OUI</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">ANNULER</button>
        </div>
      </div>
    </div>
  </div>

 @include('layout.utilisateur.partials.scriptjs')

</body>

</html>
