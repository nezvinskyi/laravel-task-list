<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Task List</title>
    @yield('styles')
  <script src="https://cdn.tailwindcss.com"></script>
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn{
            @apply rounded-md px-2 py-1 text-center dark:bg-yellow-50 text-slate-700 font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
        }

        .link {
            @apply font-medium text-gray-700 dark:text-yellow-50 underline decoration-pink-500
        }
    </style>
    {{-- blade-formatter-enable --}}

    
    <style>
        .success-message{
            color: green;
            font-size: .85rem;
        }
    </style>
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg bg-yellow-50 dark:bg-slate-700">
    <h1 class="mb-4 text-2xl text-gray-700 dark:text-yellow-50">@yield('title')</h1>

    @if(session()->has('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif
    
    <div class="">@yield('content')</div>
</body>
</html>