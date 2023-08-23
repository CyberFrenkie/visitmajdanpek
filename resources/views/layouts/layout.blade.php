<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    @vite(['resources/sass/main.scss', 'resources/js/app.js'])

    <title>@yield('title')</title></title>
</head>
<body> 
    <div class="wrapper container-fluid">
        @yield('wrapper')
    </div>
</body>
</html>