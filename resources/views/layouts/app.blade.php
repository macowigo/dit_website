
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- toastr -->
  <script src="{{ asset('admin-lte/plugins/toastr/toastr.min.js') }}"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
    hr { display: block; height: 1px;
        border: 0; border-top: 3px solid #315c72;
        margin: 1em 0; padding: 0; }
    </style>

</head>
<body class="hold-transition">

    @yield('content')

<!-- jQuery -->

<script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>
<!-- toastr -->
<script src="{{ asset('admin-lte/plugins/toastr/toastr.min.js') }}"></script>
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


@stack("script")
@yield("js")

</body>
</html>
