<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="dot" />

    <!-- ** CSS Plugins Needed for the Project ** -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/themify-icons/themify-icons.css') }}">
    <!--Favicon-->
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet" media="screen" />
    <!-- jquiry -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <!-- header -->
    <header class="banner overlay bg-cover" data-background="{{ asset('assets/images/banner.jpg') }}">
        {{-- @include('layout.navbar') --}}
        @include('layout.banner')
    </header>
    <!-- /header -->

    @yield('content')

    @include('layout.footer')

    <!-- ** JS Plugins Needed for the Project ** -->
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- match-height JS -->
    <script src="{{ asset('assets/plugins/match-height/jquery.matchHeight-min.js') }}"></script>
    <!-- Main Script -->
    <script src="{{ asset('assets/script.js') }}"></script>
    <script>
        function cs() {
            var audio = new Audio("{{ asset('audio/cs1.mp3') }}");
            audio.play();
            audio.addEventListener('ended', function() {
                location.href = "/antri_cs/" + {{ antri_cs }} + "/" + {{ antri_teller1 }} + "/" +
                    {{ antri_teller2 }}
            })
        }

        function teller1() {
            var audio = new Audio("{{ asset('audio/t1.mp3') }}");
            audio.play();
            audio.addEventListener('ended', function() {
                location.href = "/antri_teller1/" + {{ antri_cs }} + "/" + {{ antri_teller1 }} + "/" +
                    {{ antri_teller2 }}
            })
        }

        function teller2() {
            var audio = new Audio("{{ asset('audio/t2.mp3') }}");
            audio.play();
            audio.addEventListener('ended', function() {
                location.href = "/antri_teller2/" + {{ antri_cs }} + "/" + {{ antri_teller1 }} + "/" +
                    {{ antri_teller2 }}
            })
        }
    </script>
</body>

</html>
