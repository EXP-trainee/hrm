<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->

    <link href="{{ mix('/css/app.css') }}?v=1" rel="stylesheet">
    {{-- <link href="{{ mix('/css/rtl.css') }}" rel="stylesheet"> --}}
    
    <!-- ICON -->
    <script src="https://kit.fontawesome.com/92f747bbb5.js" crossorigin="anonymous"></script>
    @yield('css')

</head>