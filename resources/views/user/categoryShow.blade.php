

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('books/' . $book->image->image) }}" alt="Book Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p><strong>Genre:</strong> {{ $book->categories->implode('genre', ', ') }}</p>
                <p><strong>Price:</strong> ₹{{ $book->price }}</p>
                <p><strong>Description:</strong> {{ $book->description }}</p>
                <!-- Add any other book details you want to display -->
            </div>
        </div>
    </div>
@endsection

