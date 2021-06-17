@extends('layouts.app')

@section('main_content')

    <h1>Lista dei viaggi</h1>

    <ul>
        @foreach($travels as $travel)
            <li>

                <div>Destinazione:{{$travel->destination}}</div>
                <div>Stato:{{$travel->state}}</div>
                <div>Nome prenotazione:{{$travel->reservation_name}}</div>
                <div>Prezzo:{{$travel->price}}</div>
                <div>Numero ospiti:{{$travel->guests_number}}</div>
                
            </li>
        @endforeach
    </ul>
@endsection