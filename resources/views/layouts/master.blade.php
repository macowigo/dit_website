<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'DIT - ADMIN') }} | {{date("Y")}}</title>
  <!-- Application Css -->

   <link rel="stylesheet" href="{{ asset('admin-lte/plugins/daterangepicker/daterangepicker.css') }}">


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
 <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" integrity="sha512-2e0Kl/wKgOUm/I722SOPMtmphkIjECJFpJrTRRyL8gjJSJIP2VofmEbqyApMaMfFhU727K3voz0e5EgE3Zf2Dg==" crossorigin="anonymous" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous" />

 <!-- Google Font: Source Sans Pro -->



  @yield("css")
</head>
<!-- Template Layout -->
<body class="hold-transition sidebar-mini layout-footer-fixed {{ isset($collapse) ? 'sidebar-collapse':'' }}">
<!-- <body class="hold-transition sidebar-mini layout-boxed">-->
<!-- <body class="hold-transition sidebar-mini sidebar-collapse">-->
<!-- <body class="hold-transition sidebar-collapse layout-top-nav">-->
<!-- <body class="hold-transition layout-top-nav">-->
<!-- <body class="hold-transition sidebar-mini layout-navbar-fixed"> -->
<!-- <body class="hold-transition sidebar-mini"> -->
<div class="wrapper">
     @include("layouts/partials/_admin/_navbar")
     @include("layouts/partials/_admin/_leftsidebar")
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            @yield('breadcrumb')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

          <!-- content to be displayed here -->
           @yield("content")
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
     @include('layouts/partials/_admin/_rightsidebar')
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
     @include('layouts/partials/_admin/_footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- App js -->


<script src="{{ asset('js/app.js') }}"></script>
<!-- jQuery & PAGE PLUGINS -->

<script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- toastr -->
<script src="{{ asset('admin-lte/plugins/toastr/toastr.min.js') }}"></script>
<!-- jQuery Mapael -->
<script src="{{ asset('admin-lte/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>

<script type="text/javascript">
    @if(Session::has('success'))
    toastr.success('{{Session::get('success')}}');
    @endif
    @if(Session::has('error'))
    toastr.error('{{Session::get('error')}}');
    @endif
    @if(Session::has('info'))
    toastr.info('{{Session::get('info')}}');
    @endif
    @if(Session::has('warning'))
    toastr.warning('{{Session::get('warning')}}');
    @endif
</script>
@yield('js')
@stack("script")



<script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>

<script src="{{ asset('admin-lte/plugins/daterangepicker/moment.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous"></script>

</body>
</html>
