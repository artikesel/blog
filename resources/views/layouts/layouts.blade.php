<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    <!-- UIkit CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/css/uikit.min.css" /> --}}

    <!-- UIkit JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.2/dist/js/uikit-icons.min.js"></script> --}}

    <!-- style-->
    <link rel="stylesheet" href="{{ url('/css/app.css')}}">
    <link rel="stylesheet" href="{{ url('/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">


    <!-- jquery  -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.js"
      integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
      crossorigin="anonymous"></script>

    <!-- js code -->
    <script src="{{ url('/js/main.js')}}" charset="utf-8"></script>






</head>
<body>
    <div id="myWrepper">

        @include('inc.header')

        <div id="myContent">

            @yield('content')


        </div>

        <footer>
        </footer>
    </div>
</body>
</html>
