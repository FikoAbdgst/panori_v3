<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Photobooth App' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <link rel="stylesheet" href="{{ secure_asset('build/assets/app-CyYmZxyG.css') }}">
    <script src="{{ secure_asset('build/assets/app-T1DpEqax.js') }}" defer></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>

<body class="bg-gray-100 overflow-x-hidden">
    @include('components.navbar')

    <main>
        @yield('hero_section')
        @yield('content_section')
        @yield('howitworks_section')
        @yield('testimoni_section')
        @yield('footer_section')
    </main>

    @stack('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.getElementById('navbar');
            const originalClasses = navbar.className;

            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    navbar.className =
                        'fixed top-0 left-0 right-0 bg-[#FEF3E2] shadow-md w-full h-20 z-50 transition-all duration-300';
                } else {
                    navbar.className = originalClasses;
                }
            });
        });
    </script>
</body>

</html>
