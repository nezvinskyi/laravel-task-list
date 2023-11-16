<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List</title>
    @yield('styles')
</head>
<body>
    <h1>@yield('title')</h1>

    @if(session()->has('success'))
        <div class="">{{ session('success') }}</div>
    @endif
    
    <div class="">@yield('content')</div>
</body>
</html>