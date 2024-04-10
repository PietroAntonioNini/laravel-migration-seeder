@extends('layouts/app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col" class="text-start">Compagnia</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">ID treno</th>
                    <th scope="col">Carrozze</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{$train->company}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_date}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->train_code}}</td>
                    <td class="text-center">{{$train->number_of_carriages}}</td>
                    <td class="text-center">{{ $train->on_time ? 'si' : 'no' }}</td>
                    <td class="text-center">{{ $train->cancelled ? 'si' : 'no' }}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        
            
    </div>
@endsection
