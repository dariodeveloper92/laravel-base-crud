@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutte i miei Fumetti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                            <th scope="col">Series</th>
                            <th scope="col">Sale_date</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($comics as $comic)
                            <tr>
                                <th scope="row">{{ $comic['id'] }}</th>
                                <td>{{ $comic['title'] }}</td>
                                <td>{!! $comic['price'] !!}</td>
                                <td>{{ $comic['series'] }}</td>
                                <td>{!! $comic['sale_date'] !!}</td>
                                <td>{{ $comic['type'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection