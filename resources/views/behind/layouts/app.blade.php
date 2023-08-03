<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }} | Aditya P</title>

    {{ $styles }}

    @include('behind.layouts._styles')

</head>

<body>

    <div class="container-scroller">


        <x-layouts.navbar></x-layouts.navbar>


        @include('behind.layouts._sidebar')

        <!-- partial -->
        <div class="main-panel">

            @include('behind.layouts.content')

            @include('behind.layouts.footer')

        </div>
        <!-- main-panel ends -->

    </div>
    <!-- page-body-wrapper ends -->

    @include('behind.layouts._script')
    {{ $script }}

</body>

</html>
