<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Reader | Hugo Personal Blog Template</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Hugo 0.74.3" />

    <!-- theme meta -->
    <meta name="theme-name" content="reader" />

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('assets/clients') }}/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/clients') }}/plugins/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/clients') }}/plugins/slick/slick.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/clients') }}/css/style.css" media="screen">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('assets/clients') }}/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/clients') }}/images/favicon.png" type="image/x-icon">

    <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
    <meta property="og:description" content="This is meta description" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>

    {{-- header --}}
    <header class="navigation fixed-top">
        @include('clients.blocks.header')
    </header>
    {{-- header --}}


    {{-- content --}}
    <div class="containers">
        @yield('content')
        {{-- content --}}
    </div>
    {{-- footer --}}
    <footer class="footer">
        @include('clients.blocks.footer')
    </footer>
    {{-- Footer --}}



    <!-- JS Plugins -->
    <script src="{{ asset('assets/clients') }}/plugins/jQuery/jquery.min.js"></script>

    <script src="{{ asset('assets/clients') }}/plugins/bootstrap/bootstrap.min.js"></script>

    <script src="{{ asset('assets/clients') }}/plugins/slick/slick.min.js"></script>

    <script src="{{ asset('assets/clients') }}/plugins/instafeed/instafeed.min.js"></script>


    <!-- Main Script -->
    <script src="{{ asset('assets/clients') }}/js/script.js"></script>
</body>

</html>
