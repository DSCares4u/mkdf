<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    @yield('meta_tags')

    {{-- <title>मानव विकास कन्या जन्मदिन योजना - @yield('title')</title> --}}
    <title>मानव विकास कन्या जन्मदिन योजना</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />



    @include('frontend.includes.link')



</head>

<body>

    <div class="wrapper">
        @include('frontend.includes.header')
        <!-- header end -->
        @yield('content')
        <!--footer-->


        @include('frontend.includes.footer')
        @include('frontend.includes.script')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <!-- Include SweetAlert2 CSS -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>


</html>
