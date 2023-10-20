<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!--Khac nhau giua cac trang-->
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <linl rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/al.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="{{ asset('admin_assets/vendor/datatables/datatables.min.css')}}" rel="stylesheet">
        <!-- Custom styles for this template-->
</head>

<body>
    <!--header giống nhau-->
    <header>

    </header>
    <!--Main content-->
    <div class="container-fluid">
        @yield('main')
    </div>

    <footer>

    </footer>
</body>
<script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts for all pages-->
<!-- Page level plugins -->
<!-- Core plugin JavaScript-->

<!-- Custom scripts for all pages-->
<!-- Page level plugins -->
<!-- Page level custom scripts -->
<script src="{{asset('admin_assets/vendor/datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>

</html>