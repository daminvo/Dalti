<!-- filepath: resources/views/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @routes
    @vite('resources/css/app.css')
</head>
<body>
    @inertia
    @vite('resources/js/app.js')
</body>
</html>
