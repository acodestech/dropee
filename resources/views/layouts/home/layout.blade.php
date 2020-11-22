<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="icon" href="../assets/img/favicon.png">

        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>@yield('title')</title>
        @include('layouts.home.style')
        @yield('styles')
    </head>
    <body class="@yield('body')">
        <div>
            @yield('header')
            @yield('slider')
        </div>
        @yield('content')
        @include('layouts.home.footer')
        @yield('modal')
        @include('layouts.home.script')
        @yield('script')
        @stack('scripts')
        <script type="text/javascript">
        </script>
    </body>
</html>
