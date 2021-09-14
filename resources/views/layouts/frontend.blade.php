<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Welcome || Envotek - IT Solution and Services HTML5 Template</title>

    <!-- Fav Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/icofont.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/spacing.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/leaflet.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/menu.css')}}" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- START Main Header -->
        @include('layouts.partials.menu')
        <!-- END Main Header -->

        <!--Content Page-->
        @yield('content')
        <!--END Content Page-->

        <!-- START Main Footer -->
        @include('layouts.partials.footer')
        <!-- END Main Footer -->
    </div>
    <!--End pagewrapper-->

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html"><i class="icofont-arrow-up"></i></button>

    <!-- jQuery Plugins -->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/leaflet.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>

    <!-- Custom Script -->
    <script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>
