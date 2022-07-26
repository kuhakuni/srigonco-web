<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <title>Portal Srigono</title>
    
    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-datatables/style.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
@include('layouts.web.navbar')
@yield('main')    
@include('layouts.web.footer')
 <!-- Vendor JS Files -->
 <script src="{{ asset("vendor/apexcharts/apexcharts.min.js") }}"></script>
 <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
 <script src="{{ asset("vendor/chart.js/chart.min.js") }}"></script>
 <script src="{{ asset("vendor/echarts/echarts.min.js") }}"></script>
 <script src="{{ asset("vendor/quill/quill.min.js") }}"></script>
 <script src="{{ asset("vendor/simple-datatables/simple-datatables.js") }}"></script>
 <script src="{{ asset("vendor/tinymce/tinymce.min.js") }}"></script>
 <script src="{{ asset("vendor/php-email-form/validate.js") }}"></script>

 <!-- Template Main JS File -->
 <script src="{{ asset("js/app.js") }}"></script>

</body>

</html>