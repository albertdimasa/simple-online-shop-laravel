<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Fresh Shop - Memenuhi Kebutuhan Pertanian Anda</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('theme') }}/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('theme') }}/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('theme') }}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('theme') }}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('theme') }}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('theme') }}/css/custom.css">

</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')


    <!-- ALL JS FILES -->
    <script src="{{ asset('theme') }}/js/jquery-3.2.1.min.js"></script>
    <script src="{{ asset('theme') }}/js/popper.min.js"></script>
    <script src="{{ asset('theme') }}/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('theme') }}/js/jquery.superslides.min.js"></script>
    <script src="{{ asset('theme') }}/js/bootstrap-select.js"></script>
    <script src="{{ asset('theme') }}/js/inewsticker.js"></script>
    <script src="{{ asset('theme') }}/js/bootsnav.js."></script>
    <script src="{{ asset('theme') }}/js/images-loded.min.js"></script>
    <script src="{{ asset('theme') }}/js/isotope.min.js"></script>
    <script src="{{ asset('theme') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('theme') }}/js/baguetteBox.min.js"></script>
    <script src="{{ asset('theme') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('theme') }}/js/contact-form-script.js"></script>
    <script src="{{ asset('theme') }}/js/custom.js"></script>
</body>

</html>
