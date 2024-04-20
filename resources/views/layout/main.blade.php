<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <title>Document</title>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    @yield('content')
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
