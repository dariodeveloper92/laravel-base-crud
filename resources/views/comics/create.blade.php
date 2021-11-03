@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- messaggio di errore --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')
        
                    <div class="form-group  mb-3">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of comic">
                        {{-- messaggio di errore --}}
                        {{-- @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Description</label>
                        {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Enter comic description"> --}}

                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    {{-- <div class="form-group  mb-3">
                        <label for="thumb">thumb</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Enter series comic">
                    </div> --}}
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
                        {{-- <input type="text" name="type" class="form-control" id="type" placeholder="Enter price comic"> --}}
                        <select class="form-control" name="type" id="type">
                            <option value="">-- Seleziona --</option>
                            <option value="comic book"> Comic book </option>
                            <option value="graphic novel"> Graphic novel </option>
                        </select>
                    </div>
                    <div class="form-group  mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter price comic">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
