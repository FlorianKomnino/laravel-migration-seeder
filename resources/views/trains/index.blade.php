<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="container bg-light">
        <div class="row">
            <div class="col-12">
                <h1>
                    Trains
                </h1>
            </div>
            @forelse ($trains as $train)
            <div class="col-3 p-4 card">
                <p>
                    {{$train->agency}}
                </p>
                <p>
                    Stazione di partenza: {{$train->departure_station}}
                </p>
                <p>
                    {{$train->departure_time}}
                </p>
                <p>
                    {{$train->arrival_station}}
                </p>
                <p>
                    {{$train->arrival_time}}
                </p>
            </div>
            @empty
                <div class="col-12">
                    <h2>
                        Non ci sono treni da mostrare.
                    </h2>
                </div>
            @endforelse
        </div>
    </main>

</body>

</html>
