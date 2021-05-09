<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    @yield('stylesheets')
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="pl-4 py-4 mb-10 bg-gray-700 text-white uppercase">
    <img class="inline" src="img/logo.png" width="30px">
    <a class="font-semibold mx-4 hover:underline" href="/">Home page</a>
    <a class="font-semibold mx-4 hover:underline" href="/upload">Upload images</a>
    <a class="font-semibold mx-4 hover:underline" href="/statistics">Banner statistics</a>
</div>

@yield('content')

</body>

@yield('scripts')

</html>