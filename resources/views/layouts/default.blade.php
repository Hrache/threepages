<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/gradients-animations.css" />

    <style>
        body,
        body * {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- BOOTSTRAP JAVA SCRIPT -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <script>
        $( document ).ready( function() {
            $( '#heading' ).css( 'height', '75vh' ).delay( 500 ).animate( {
                'height': '20vh'
            } )

            $( '#messages' ).children().each( function( e ) {
                $( this ).click( function( e ) {
                    $( this ).remove();
                } );
            } );
        });
    </script>

    @stack('head')
</head>

<body class="grd-sky-1 min-vh-100">
    <!-- Navbar -->
    <livewire:inline.navbar /> 

    <!-- Messages -->
    <livewire:inline.messages />

    <section>
        <h1 id="heading" class="d-flex justify-content-center align-items-center fw-bold display-1 text-white">
            <div class="rotate-in-2-bck-cw">
                <strong>{{ $title }}</strong>
            </div>
        </h1>

        @yield('content')
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    @stack('body')
</body>

</html>