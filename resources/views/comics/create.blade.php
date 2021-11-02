@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')

            <div class="form-group  mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
            </div>
            <div class="form-group mb-3">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" placeholder="Enter comic description">
            </div>
            <div class="form-group  mb-3">
                <label for="series">Series</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="Enter series comic">
            </div>
            <div class="form-group  mb-3">
                <label for="sale_date">Sale date</label>
                <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale date comic">
            </div>
            <div class="form-group  mb-3">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="Enter price comic">
            </div>
            <div class="form-group  mb-3">
                <label for="price">Price</label>
                <input type="text" name="price" class="form-control" id="price" placeholder="Enter price comic">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
