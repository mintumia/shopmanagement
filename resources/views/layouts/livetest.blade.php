<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Page</title>
   {{-- <link rel="stylesheet" href="{{asset('plugins')}}/plugins/bootstrap5/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('plugins')}}/tailwindcss/main.css">
    @livewireStyles
</head>
<body class="container flex items-center justify-center">



@livewire('formtest')





@livewireScripts
{{--<script src="{{asset('plugins')}}/plugins/bootstrap5/bootstrap.min.js"></script>--}}
</body>
</html>
