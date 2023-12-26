@if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif
<!-- heading -->
<h1>Create a new Book</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <div class="card mt-3 p-3">
                <form method="post" action="{{ route('addBook') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}">

                        <!-- showing error message -->

                        @if($errors->has('name'))
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        @endif

                    </div>
                    <div class="form-group" >
                        <label>Author Name</label>
                        <input type="text" name="authorName" class="form-control" value="{{old('authorName')}}">
                        @if($errors->has('authorName'))
                            <span class="text-danger">{{$errors->first('authorName')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            <option value=""><--Select an option--></option>
                            <option value="Self Help" {{ old('category') == 'Self Help' ? 'selected' : '' }}>Self Help</option>
                            <option value="Fiction" {{ old('category') == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                            <option value="Biography" {{ old('category') == 'Biography' ? 'selected' : '' }}>Biography</option>
                            <option value="Non fiction" {{ old('category') == 'Non fiction' ? 'selected' : '' }}>Non fiction</option>
                        </select>
                        @if($errors->has('category'))
                            <span class="text-danger">{{$errors->first('category')}}</span>
                        @endif

                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        @if($errors->has('image'))
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        @endif
                    </div>
                    <fieldset class="form-group">
                        <legend>Availability</legend>

                        <label>
                            <input type="radio" name="availability" value="Available" {{ old('availability') == 'Available' ? 'checked' : '' }}>
                            Available
                        </label>
                        <label>
                            <input type="radio" name="availability" value="Not Available" {{ old('availability') == 'Not Available' ? 'checked' : '' }}>
                            Not Available
                        </label>

                        @if($errors->has('availability'))
                            <span class="text-danger">{{$errors->first('availability')}}</span>
                        @endif
                    </fieldset>
                    <button type ="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
