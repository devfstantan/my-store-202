<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Store | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}">
    @yield('head')
</head>

<body>
    {{-- Header --}}
    @include('parts.header')

    {{-- Hero Section --}}
    @hasSection('header')
        <section class="container-fuild text-bg-dark text-center p-5">
            <h1 class="display-1">
                @yield('header')
            </h1>
        </section>
    @endif
    {{-- Content --}}
    <main class="container">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('parts.footer')
    {{-- Scripts --}}
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
