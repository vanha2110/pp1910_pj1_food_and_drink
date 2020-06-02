<!DOCTYPE html>
<html lang="en">

<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="">
  <meta name="author" content="">
  
  <title>@yield('title')</title>
  
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="{{url('template_admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{url('template_admin/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">
    
    <!-- Sidebar -->
    @include('admin.layout.sidebar')
    <!-- End of Sidebar -->
    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        @include('admin.layout.topbar')
        <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">
          @yield('content')
        </div>
        <!-- /.container-fluid -->
        
      </div>
      <!-- End of Main Content -->
      
      <!-- Footer -->
      @include('admin.layout.footer')
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
    
  </div>
  <!-- End of Page Wrapper -->
  @include("admin.layout.logout_modal")
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
  <!-- Bootstrap core JavaScript-->
  <script src="{{url('template_admin/js/jquery.min.js')}}"></script>
  <script src="{{url('template_admin/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="{{url('template_admin/js/jquery.easing.min.js')}}"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="{{url('template_admin/js/sb-admin-2.min.js')}}"></script>
  
  <!-- Page level plugins -->
  
  <script src="{{url('template_admin/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('template_admin/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{url('template_admin/js/demo/datatables-demo.js')}}"></script>
  @yield('stylesheets')
</body>

</html>
