@extends('admin.common.app')

@section('content')

    <div class="container-fluid">


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="text-center mb-2">
                        <a href="{{ route('add_book_form') }}" class="btn btn-primary">Add Book</a>
                    </div>
                    <div>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session(('success'))}}
                            </div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Author Name</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Action</th>

                                <!-- Add more table headers if needed -->
                            </tr>
                            </thead>
                                <tbody>
                                    @foreach($books as $book)
                                        <tr>
                                            <td>{{ $book->name }}</td>

                                            <td>
                                                <img src="{{ asset('books/'. $userOrder['book']['image']->image ) }}" alt="bookImage"  width="70px" height="110px">
                                            </td>
                                            <td>{{ $book->category->genre }}</td>
                                            <td>{{ $book->author->name }}</td>
                                            <td>{{ $book->stock }}</td>
                                            <td>{{ $book->price }}</td>


                                            <!-- Add more table cells for other user details if needed -->

                                            <td>
                                                <form method="POST" action="{{ url('book/' . $book->id) }} " >
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        @endsection
