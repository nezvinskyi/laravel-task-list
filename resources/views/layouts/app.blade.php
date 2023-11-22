<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List</title>
    @yield('styles')
  <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .success-message{
            color: green;
            font-size: .85rem;
        }
    </style>
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="mb-4 text-2xl">@yield('title')</h1>

    @if(session()->has('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif
    
    <div class="">@yield('content')</div>
</body>
</html>