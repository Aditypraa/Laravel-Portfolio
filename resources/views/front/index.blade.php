<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Portfolio | Aditya P</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->

    {{-- DEVICON.DEV --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    @include('front._navigation')

    <!-- Page Content-->
    <div class="container-fluid p-0">

        <!-- About-->
        @include('front._about')

        <hr class="m-0" />
        <!-- Experience-->
        @include('front._experience')

        <hr class="m-0" />
        <!-- Education-->
        @include('front._education')

        <hr class="m-0" />
        <!-- Skills-->
        @include('front._skills')

        <hr class="m-0" />
        <!-- Interests-->
        @include('front._interests')

        <hr class="m-0" />
        <!-- Awards-->
        @include('front._awards')


    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('front/js/scripts.js') }}"></script>
</body>

</html>
