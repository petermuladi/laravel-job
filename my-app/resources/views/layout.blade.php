<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
    <title>Job App</title>
</head>

<body>
    @include('nav')
    @include('success-message')
    <div class="Container p-5">
        @yield('content')
    </div>
    @include('footer')
    <script src="{{ asset('style/js/jquery-3.6.3.js') }}"></script>
    <script src="{{ asset('style/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/js/bootstrap.min.js.map') }}"></script>
    <script src="{{ asset('style/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
