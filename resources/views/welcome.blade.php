<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>

    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="text-center p-4">Treni</h1>
        <div class="row justify-content-center g-4">
            @foreach ($trains as $train)
                <ul class="list-group col-3">
                    <li class="list-group-item"><b>Ageniza:</b> {{ $train['agency'] }}</li>
                    <li class="list-group-item"><b>Numero:</b> {{ $train['train_code'] }}</li>
                    <li class="list-group-item"><b>In partenza da: </b>{{ $train['departure_station'] }} <br><b> alle
                            ore:
                        </b>{{ Carbon\Carbon::parse($train['departure_time'])->format('H:i - d/m/Y') }}</li>
                    <li class="list-group-item"><b>In arrivo a: </b>{{ $train['arrival_station'] }}
                        <br><b> alle ore:
                        </b>{{ Carbon\Carbon::parse($train['arrival_time'])->format('H:i - d/m/Y') }}
                    </li>
                    <li class="list-group-item">{{ $train['on_time'] == 0 ? 'In ritardo' : 'In orario' }}</li>
                    <li class="list-group-item">{{ $train['cancelled'] == 0 ? '-' : 'Cancellato' }}</li>
                </ul>
            @endforeach
        </div>
        <h1 class="text-center p-4">Treni in Partenza oggi</h1>
        <div class="row justify-content-center g-4">
            @foreach ($todayTrains as $train)
                <ul class="list-group col-3">
                    <li class="list-group-item"><b>Ageniza:</b> {{ $train['agency'] }}</li>
                    <li class="list-group-item"><b>Numero:</b> {{ $train['train_code'] }}</li>
                    <li class="list-group-item"><b>In partenza da: </b>{{ $train['departure_station'] }} <br><b> alle
                            ore:
                        </b>{{ Carbon\Carbon::parse($train['departure_time'])->format('H:i - d/m/Y') }}</li>
                    <li class="list-group-item"><b>In arrivo a: </b>{{ $train['arrival_station'] }}
                        <br><b> alle ore:
                        </b>{{ Carbon\Carbon::parse($train['arrival_time'])->format('H:i - d/m/Y') }}
                    </li>
                    <li class="list-group-item">{{ $train['on_time'] == 0 ? 'In ritardo' : 'In orario' }}</li>
                    <li class="list-group-item">{{ $train['cancelled'] == 0 ? '-' : 'Cancellato' }}</li>
                </ul>
            @endforeach
        </div>
    </div>
</body>

</html>
