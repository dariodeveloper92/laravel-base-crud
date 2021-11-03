@extends('layouts.app')

@section('content')
    <h1> Sono il dettaglio del fumetto</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h1 class="mt-4 mb-4">Dettaglio fumetto</h1> 
               <ul>
                    <li> Title: {{ $comic['title'] }} </li>
                    <li> <img src="{{ $comic['thumb'] }} " alt=""></li>
                    <li><p> Description: {!! $comic['description'] !!} </p></li>
                    <li><h4>Series: {{ $comic['series'] }}</h4></li>
                    <li><h4> Sale date: {{ $comic['sale_date'] }} </h4></li>
                    <li><h4> Type: {{ $comic['type'] }} </h4></li>
                    <li><h4> Price: {{ $comic['price'] }} </h4></li>
               </ul>
            </div>
        </div>
    </div>
@endsection