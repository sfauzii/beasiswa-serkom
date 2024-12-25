<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        {{-- Styles --}}
        @include('layouts.partials.style')

        {{-- Livewire --}}
        @livewireStyles

    </head>

    <body>

        <!-- Navbar -->
        @include('layouts.partials.navbar')

        @yield('content')

        {{-- Footer --}}
        @include('layouts.partials.footer')


        {{-- Livewire --}}
        @livewireScripts

        {{-- Scripts --}}
        @include('layouts.partials.scripts')

    </body>

</html>
