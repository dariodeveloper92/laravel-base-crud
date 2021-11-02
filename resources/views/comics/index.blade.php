@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>indice fumetti</h1>
        @dump($comics);
    </div>
@endsection