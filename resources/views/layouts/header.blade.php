  

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"> --}}
  <link href="{{ asset('lib/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('lib/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('lib/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('lib/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('lib/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" /> 
  <link href="{{ asset('lib/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
        
  <!-- Custom fonts for this template-->
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <style>
   #toast-container > .toast-error { background-color: #BD362F; }
   .toast-success { background-color: #008705; }
  
  </style>
