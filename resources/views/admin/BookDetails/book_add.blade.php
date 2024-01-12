@extends('admin.common.app')


@section('content')
    <div>
        @if (session('success'))

                <div class="alert alert-danger">
                   {{session('success')}}
                </div>
        @endif
    </div>

    <!-- heading -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-5">
                <div class="card mt-3 p-3">
                    <form method="post" action="{{ route('add_Book') }}" enctype="multipart/form-data">
                        <h3 class="text-center text-black-50" >Add Book</h3>
                        @csrf
                        <div class="form-group">

                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                            @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>

                        <div class="form-group">

                            <select class="form-control" id="author" name="author">
                                <option value=""><--Select an option--></option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}" {{ old('author') == $author->id ? 'selected' : '' }}>
                                        {{ $author->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('author'))
                                <span class="text-danger">{{$errors->first('author')}}</span>
                            @endif
                        </div>
                        <div class="form-group">

                            <input type="text" name="price" class="form-control" value="{{ old('price') }}" placeholder="Price">
                            @if($errors->has('price'))
                                <span class="text-danger">{{$errors->first('price')}}</span>
                            @endif
                        </div>
                        <div class="form-group">

                            <input type="number" name="stock" class="form-control" value="{{ old('stock') }}" placeholder="Stock">

                            @if($errors->has('stock'))
                                <span class="text-danger">{{$errors->first('stock')}}</span>
                            @endif
                        </div>

                        <div class="form-group">

                            <select class="form-control" id="category" name="category">
                                <option value=""><--Select an option--></option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->genre }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <span class="text-danger">{{$errors->first('category')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control" accept="image/*" >

                            @if($errors->has('image'))
                                <span class="text-danger">{{$errors->first('image')}}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

