<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @include('layouts.partials.style')

    </head>

    <body>

        



        <!-- Navbar -->
        @include('layouts.partials.navbar')

        @yield('content')

        @include('layouts.partials.footer')



        <script src="frontend/scripts/main.js"></script>
        <!-- Bootstrap CSS -->

        <!-- jQuery (optional, if using Bootstrap 5 with native JS, this is not needed) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS (including Popper.js) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <script src="frontend/libraries/jquery/jquery-3.7.1.min.js"></script>
        <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    </body>

</html>