@extends('user.common.app')

@section('content')
    <header>


        <!-- Heading -->
        <div class="bg-primary">
            <div class="container py-4">
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a href="{{route('index')}}" class="text-white-50">Home</a>
                        <span class="text-white-50 mx-2"> > </span>
                        <span class="text-white-50 mx-2"> > </span>
                        <a href="" class="text-white"><u>3. Order info</u></a>
                        <span class="text-white-50 mx-2"> > </span>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
        </div>
        <!-- Heading -->
    </header>

    <section class="bg-light py-5 justify-content-lg-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mb-4">

                    <?php
                    $bookPrice = $book->price ?? 0;
                    $totalPrice = $quantity * $bookPrice - 10 + 15;
                    ?>

                    <form action="{{ route('bookOrder', ['id' => $book->id, 'userId' => $user->id]) }} " method="post"
                          class="form-group">
                        @csrf
                        <input type="hidden" name="order_id">

                        <input type="hidden" name="product_id" value="{{$book->id}}">

                        <input type="hidden" name="userId" value="{{ auth()->check() ? auth()->user()->id : '' }}">

                        <input type="hidden" name="quantity" value="{{$quantity}}">

                        <input type="hidden" name="total_price" value="{{$totalPrice}}">
                        <input type="hidden" name="status" value="1">
                        <!-- Checkout -->
                        <div class="card shadow-0 border">
                            <div class="p-4">

                                <div class="row">
                                    <label for="selected_address">Select Address:</label>
                                    <select name="selected_address" class="form-control mb-1" required>
                                    @foreach($user->addresses as $address)
                                            <option value="{{ $address->id }}">{{ $address->street }}
                                                , {{ $address->city }}
                                                , {{ $address->state }}, {{ $address->postal_code }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <h6 class="text-dark my-4">Items in cart</h6>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="me-3 position-relative">
                                      <span
                                          class="position-absolute top-0 start-100 translate-middle badge rounded-pill badge-secondary">
                                        1
                                      </span>
                                        @foreach($book->images as $image)
                                            <img src="{{ asset('books/' . $image->image) }}"
                                                 class="img-sm rounded border "
                                                 width="98" height="90px" alt="book"/>
                                        @endforeach
                                    </div>
                                    <div class="ml-4">
                                        <h6 class="">Book: {{$book->name}}</h6>
                                        <h6 class="">Author: {{$book->author->name}}</h6>
                                        <h6 class="">Category: {{$book->category->genre}}</h6>

                                        <h5 class="price text-primary">Total:₹{{ $totalPrice}} </h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Checkout -->
                </div>
                <div class="col-xl-2 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                    <div class="ms-lg-6 mt-5 mt-lg-0" style="max-width: 320px;">
                        <h6 class="mb-">Price Details</h6>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Price:</p>

                            <p class="mb-2">₹{{ $book->price }}</p>

                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Quantity:</p>

                            <p class="mb-2">{{ $quantity }}</p>

                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Sub Total:</p>

                            <p class="mb-2">{{ $quantity * $book->price }}</p>

                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Discount:</p>
                            <p class="mb-2 text-danger">- ₹10.00</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2">Shipping cost:</p>
                            <p class="mb-2">+ ₹15.00</p>
                        </div>
                        <hr/>
                        <div class="d-flex justify-content-between">
                            <p class="mb-2 t">Total price:</p>
                            <?php
                            $bookPrice = $book->price ?? 0;
                            $totalPrice = $quantity * $bookPrice - 10 + 15;
                            ?>

                            <p class="mb-2 fw-bold text-">₹{{ $totalPrice}}</p>


                        </div>
                        <div class="mt-2 ">
                            <button type="submit" class="btn btn-success shadow-0 border form-control mb-1"
                                    id="orderData">Place Order
                            </button>
                            <a class="btn btn-light border form-control  " href="{{ route('list') }}">Cancel</a>
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(document).ready(function () {
        $('#orderData').on('click', function (e) {
            e.preventDefault();
            placeOrder();
        });

        function placeOrder() {
            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            var orderData = {
                _token: '{{ csrf_token() }}',
                order_id: getRandomInt(1000000, 9999999),
                product_id: $('input[name=product_id]').val(),
                userId: $('input[name=userId]').val(),
                quantity: $('input[name=quantity]').val(),
                total_price: $('input[name=total_price]').val(),
                status: $('input[name=status]').val()
            };

            $.ajax({
                url: '{{ route("bookOrder", ["id" => $book->id, "userId" => $user->id]) }}',
                method: 'POST',
                data: orderData,
                success: function (response) {

                    console.log('Order placed successfully');
                    $('#successMessage').text(response.message).show().delay(3000).fadeOut();
                    console.log('Order placed successfully. Response:', response);


                    if (response.orderId && response.razorpay_order_id) {
                        initializeRazorpay(response.razorpay_order_id, response.orderId);
                    } else {
                        console.error('Invalid response format. Missing order_id or razorpayOrderId.');
                    }

                },
                error: function (xhr) {
                    console.error('Error placing order:', xhr);
                }
            });
        }

        function initializeRazorpay(razorpay_order_id, orderId) {

            var options = {
                "key": "{{ env('rzr_key') }}",
                "amount": "{{$totalPrice * 100}}",
                "order_id": razorpay_order_id,
                "currency": "INR",
                "name": "Gandhi Book",
                "description": "Test Transaction",
                "image": "{{ asset('/user_r/images/bookimages/logo.png') }}",
                "handler": function (response) {
                    console.log("Razorpay Response:", response);
                    alert("Payment Successful");
                    $.ajax({
                        url: '/handle-payment',
                        method: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            razorpay_payment_id: response.razorpay_payment_id,
                            razorpay_order_id: response.razorpay_order_id,
                            order_id: orderId,
                            status: 2,
                        },

                        success: function (serverResponse) {
                            console.log('Payment details saved successfully');
                            window.location.href = '/orders';
                        },
                        error: function (xhr) {
                            console.error('Error saving payment details:', xhr);
                        }
                    });
                },
                "prefill": {
                    "name": "{{$user->username}}",
                    "email": ""
                },
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "theme": {
                    "color": "#f07c29"
                }
            };

            var rzp1 = new Razorpay(options);

            rzp1.on('payment.failed', function (response) {
                alert("Payment Failed");
                alert("Error Code: " + response.error.code);
                alert("Error Description: " + response.error.description);
                // Additional error information if needed
            });

            rzp1.open();
        }
    });
</script>





