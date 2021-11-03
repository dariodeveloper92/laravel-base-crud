@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.update', $comic['id']) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group  mb-3">
                <label for="title">Title</label>
                <input value="{{ $comic['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input value="{{ $comic['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter comic description">
            </div>
            <div class="form-group  mb-3">
                <label for="thumb">thumb</label>
                <input value="{{ $comic['thumb'] }}" type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter series comic">
            </div>
            <div class="form-group  mb-3">
                <label for="series">Series</label>
                <input value="{{ $comic['titseriesle'] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter series comic">
            </div>
            <div class="form-group  mb-3">
                <label for="sale_date">Sale date</label>
                <input value="{{ $comic['sale_date'] }}" type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale date comic">
            </div>
            <div class="form-group  mb-3">
                <label for="type">Type</label>
                <input value="{{ $comic['type'] }}" type="text" name="type" class="form-control" id="type" placeholder="Enter price comic">
            </div>
            <div class="form-group  mb-3">
                <label for="price">Price</label>
                <input value="{{ $comic['price'] }}" type="text" name="price" class="form-control" id="price" placeholder="Enter price comic">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection