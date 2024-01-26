@extends('admin.common.app')


@section('content')
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="text-center mb-2">
{{--                    <a href="#" class="btn btn-primary">Add Orders</a>--}}
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
                            <th>User Name</th>
                            <th>Order Id</th>
                            <th>Name</th>
                            <th>image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                            <!-- Add more table headers if needed -->
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($userOrders as $userOrder)



                            <tr>
                                <td>{{ $userOrder['userOder']->username }}</td>
                                <td>#{{ $userOrder->order_id }}</td>

                                <td>{{ $userOrder['book']->name }}</td>
                                <td><img src="{{ asset('books/'. $userOrder['book']['image']->image ) }}" alt="bookImage" width="70px" height="110px">
                                </td>
                                <td>{{ $userOrder->quantity }}</td>
                                <td>{{ $userOrder->total_price }}</td>
                                <td class="statusCell" data-order-id="{{$userOrder->order_id}}">{{$userOrder->status}}</td>

                                <input type="hidden" class="main_id" value="{{$userOrder->id}}">


                                <!-- Add more table cells for other user details if needed -->
                                <td>
                                    <button class="btn btn-dark statusUpdateBtn" data-order-id="{{$userOrder->order_id}}">Edit</button>
                                </td>

                            </tr>

                        @endforeach
                        </tbody>

                    </table>



@endsection



