<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DB Trains</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            <div class="d-flex justify-content-center my10">
                <h1>Tutti i treni presenti nel mio db</h1>
            </div>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di partenza</th>
                            <th scope="col">Stazione di arrivo</th>
                            <th scope="col">Orario di partenza</th>
                            <th scope="col">Orario di arrivo</th>
                            <th scope="col">Codice Treno</th>
                            <th scope="col">Numero Carrozze</th>
                            <th scope="col">In orario</th>
                            <th scope="col">Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                        <tr>
                            <td>{{$train->id}}</td>
                            <td>{{$train->agency}}</td>
                            <td>{{$train->departure_station}}</td>
                            <td>{{$train->arrival_station}}</td>
                            <td>{{$train->departure_time}}</td>
                            <td>{{$train->arrival_time}}</td>
                            <td>{{$train->train_code}}</td>
                            <td>{{$train->number_of_carriages}}</td>
                            <td>{{$train->in_time}}</td>
                            <td>{{$train->deleted}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>

    </body>
</html>
