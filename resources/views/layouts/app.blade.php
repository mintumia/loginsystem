<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <link rel="stylesheet" href="{{asset('plugins')}}/tailwindcss/main.css">
    <link rel="stylesheet" href="{{asset('plugins')}}/fontawesome-free-6.4.2-web/css/all.css">
   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">--}}


</head>
<body class="container">
{{--<div class="flex flex-wrap gap-4">
    <i class="fa fa-check-square"></i>
    <i class="fa fa-solid fa-download text-3xl text-blue-900"></i>
    <i class="fa fa-solid fa-address-book text-3xl text-blue-900"></i>
    <i class="fa fa-solid fa-map-location text-3xl text-blue-900"></i>
    <i class="fa fa-solid fa-location-dot text-3xl text-blue-900"></i>
</div>--}}
@include('layouts.navbar')


@yield("main")

</body>
</html>
