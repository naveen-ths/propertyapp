<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Admin') }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
                <!-- jQuery -->
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    </head>
    <!--
    `body` tag options:
    
      Apply one or more of the following classes to to the body tag
      to get the desired effect
    
      * sidebar-collapse
      * sidebar-mini
    -->
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            @include('backend.partials.navigation')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('backend.partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @yield('content')
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            @include('backend.partials.footer')
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->


        <!-- Bootstrap -->
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE -->
        <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>
        <!-- include summernote css/js -->

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>
        <script>
            $('.summernote').summernote({
                placeholder: '',
                tabsize: 2,
                height: 150
            });
        </script>
    </body>
</html>
