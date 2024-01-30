<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>
    @vite('resources/js/app.js')
</head>

<body>
    {{-- main --}}
    <main>
        {{-- titolo --}}
        <h1>Treni in partenza dalla data odierna</h1>
        {{-- /titolo --}}
        {{-- lista treni --}}
        <ul>
            @foreach ($treni as $treno)
                <li class="card">
                    <h2>Company: {{ $treno['company'] }}</h2>
                    <p>Departure Station: {{ $treno['departure_station'] }} </p>
                    <p>Arrival Station: {{ $treno['arrival_station'] }} </p>
                    <p>Departure Time: {{ $treno['departure_time'] }}</p>
                    <p>Arrival Time: {{ $treno['arrival_time'] }}</p>
                    <p>Departure Day: <span>{{ $treno['departure_day'] }}</span></p>
                    <p>Train Code: {{ $treno['train_code'] }}</p>
                    <p>Number of carriages: {{ $treno['num_carriages'] }}</p>
                    @if ($treno['is_in_time'] === 1)
                        <p>Is in time: true</p>
                    @else
                        <p>Is in time: false</p>
                    @endif
                    @if ($treno['is_deleted'] === 1)
                        <p>Is deleted: true</p>
                    @else
                        <p>Is deleted: false</p>
                    @endif
                </li>
            @endforeach
        </ul>
        {{-- /lista treni --}}
    </main>
    {{-- /main --}}
</body>

</html>
