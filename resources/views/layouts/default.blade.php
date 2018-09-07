<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sample') - Laravel</title>
    <link rel="stylesheet" href="/bootstrap4/css/bootstrap.css">
</head>
<body>
    <div class="container">
        @include('layouts._header')
        @yield('content')
        @include('layouts._footer')
    </div>
</body>
</html>
</html>