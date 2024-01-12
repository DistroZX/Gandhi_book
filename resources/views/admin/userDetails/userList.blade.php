@extends('admin.common.app')

@section('content')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="text-center mb-2">
                    <a href="{{ route('Add_user_form') }}" class="btn btn-primary">Add User</a>
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

                <!-- Table -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>User Type</th>
                                        <th>Action</th>

                                <!-- Add more table headers if needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->user_type }}</td>
                                            <td>
                                                <form method="POST" action="{{ url('user/' . $user->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        @endsection


