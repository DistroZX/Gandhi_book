@extends('admin.common.app')

@section('content')


<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{session('error')}}
                        </div>
                    @endif
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form method="post" action="{{route('Add_user')}}">
                            @csrf
                            <div class="form-group ">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="User Name" name="username">
                            </div>
                                @if($errors->has('username'))
                                    <span class="text-danger">{{$errors->first('username')}}</span>
                                @endif
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                       placeholder="Email Address" name="email">
                            </div>
                                @if($errors->has('email'))
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                    @if($errors->has('password'))
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    @endif
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user"
                                           id="exampleRepeatPassword" placeholder="Repeat Password" name="c_password">
                                </div>
                                    @if($errors->has('c_password'))
                                        <span class="text-danger">{{$errors->first('c_password')}}</span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="user_type" id="">
                                    <option value=""><--Select a option--></option>
                                    <option value="user">User</option>
                                    <option value="accountant">Accountant</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                                @if($errors->has('c_password'))
                                    <span class="text-danger">{{$errors->first('c_password')}}</span>
                                @endif
                            <button class="btn btn-primary btn-user btn-block" type="submit"> Register Account</button>


                            <hr>
                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="login.html">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
