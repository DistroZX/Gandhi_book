@extends('user.common.app')

@section('content')
    <style>
        body{
            margin-top:20px;
            background-color:#f2f6fc;
            color:#69707a;
        }
        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: 1rem;
        }
        .text-reset {
            --bs-text-opacity: 1;
            color: inherit!important;
        }
        a {
            color: #5465ff;
            text-decoration: none;
        }
        .da {
            width: 50%;
            margin-left: 330px;
            margin-top: 24px;
        }
        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }
        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }
    </style>
<div class="">

    <div class="ml-5">
        <nav class="nav nav-borders">
            <a class="nav-link active ms-0" href="{{ route('user_profile') }}">Profile</a>
            <a class="nav-link" href="{{ route('user_order') }}" >Orders</a>

        </nav>
        <hr class="mt-0 mb-4">
        <!-- Title -->


        <!-- Main content -->
        <div class="row">
            <div class="da">
                <!-- Details -->
                <div class="card mb-4">
                    <div class="card-body">

                        <table class="table table-borderless">
                            <tbody>
                            <div class="d-flex justify-content-between align-items-center py-3">
                                @foreach($orders->take(1) as $order)
                                    <h2 class="h5 mb-0"> Order #{{$order->order_id}}</h2>
                                @endforeach
                            </div>
                            <div class="mb-3 d-flex justify-content-between">
                                <div>
                                    <span class="me-3">{{$order->created_at}}</span>
                                    <span class="me-3">Visa -1234</span>
                                    @if($order->status ==  1)
                                        <span class="badge rounded-pill bg-dark">ORDERED</span>
                                    @elseif($order->status ==  2)
                                        <span class="badge rounded-pill bg-info">SHIPPING</span>
                                    @elseif($order->status ==  3)
                                        <span class="badge rounded-pill bg-warning">OUT FOR DELIVERY</span>
                                    @elseif($order->status ==  4)
                                        <span class="badge rounded-pill bg-success">DELIVERED</span>
                                    @endif
                                </div>

                            </div>
                            @foreach($orders as $key => $order)
                                <tr>
                                    <td style="width: 80px;"> <!-- Adjust the width as needed -->
                                        <div class="d-flex mb-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{ asset('books/' . $orderDetails[$key]->book->image->image) }}" alt="Book Image" width="50px" height="50px"> <!-- Adjust the width and height as needed -->
                                            </div>
                                            <div class="flex-lg-grow-1 ms-3">
                                                <h6 class="small mb-0"><a href="#" class="text-reset">{{ $orderDetails[$key]->book->name }}</a></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="text-align: center">{{ $order->quantity }}*  {{ $orderDetails[$key]->book->price }}</td>

                                    <td class="text-end">₹{{ $orderDetails[$key]->book->price * $order->quantity }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>

                            <tr>
                                <td colspan="2">Subtotal</td>
                                <td colspan="2" class="text-end">₹{{ $subtotal }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Shipping</td>
                                <td class="text-end">₹20</td>
                            </tr>
                            <tr>
                                <td colspan="2">Discount (Code: NEW YEAR)</td>
                                <td class="text-danger text-end">-₹10.00</td>
                            </tr>
                            <tr class="fw-bold">
                                <td colspan="2">TOTAL</td>
                                <td colspan="2" class="text-end">₹{{ $totalOrderPrice+10 }}</td>
                            </tr>

                            </tfoot>
                        </table>
                        <div class="row ml-1">
                            <div class="col-lg-6">
                                <h3 class="h6">Payment Method</h3>
                                <p>Visa -1234 <br>
                                    Total: ₹{{ $totalOrderPrice+10 }} <span class="badge bg-success rounded-pill">PAID</span></p>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="h6">Billing address</h3>
                                <address>
                                    <strong>{{Auth::user()->username}}</strong><br>
                                    1355 Market St, Suite 900<br>
                                    San Francisco, CA 94103<br>

                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Payment -->
                </div>
            </div>

        </div>
    </div>
@endsection
