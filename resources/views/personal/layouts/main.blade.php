<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal</title>


    <!-- Google Font: Source Sans Pro -->

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ @asset('plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ @asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ @asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ @asset('dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ @asset('plugins/summernote/summernote-bs4.min.css') }}">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <div class="col-12 d-flex justify-content-end">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <input class="btn btn-outline-primary" type="submit" value="logout">
                </form>
            </li>
        </ul>
        </div>
        <!-- Right navbar links -->
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
   @include('personal.include.sidebar')

    @yield('content')

    <!-- Main Footer -->
    <footer class="main-footer">

    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{@asset('plugins/jquery/jquery.min.js')}}"></script>

<script src="{{@asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{@asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{@asset('plugins/select2/js/select2.full.min.js')}}"></script>

<script src="{{@asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<!-- Bootstrap -->
<!-- overlayScrollbars -->
<script src="{{@asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{@asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<script src="{{@asset('dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{@asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{@asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{@asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{@asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{@asset('plugins/chart.js/Chart.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                ['style', ['style', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
            ]
        });
    });
    $(function (){
       bsCustomFileInput.init();
    });
    $('.select2').select2()
</script>
<style>
    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "...";
    }
</style>
</body>
</html>




