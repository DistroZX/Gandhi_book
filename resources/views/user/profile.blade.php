@extends('user.common.app')

@section('content')
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Details</h5>
                            <p class="card-text">Name: <span id="userName"></span></p>
                            <p class="card-text">Address: <span id="userAddress"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h5>Order History</h5>
                    <ul class="list-group" id="orderList"></ul>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            // Sample user data
            const user = {
                name: {{$book->id}},
                address: "123 Main St, Cityville",
                orders: [
                    { id: 1, product: "Product A", quantity: 2 },
                    { id: 2, product: "Product B", quantity: 1 },
                    // Add more orders as needed
                ]
            };

            // Update user details
            document.getElementById('userName').innerText = user.name;
            document.getElementById('userAddress').innerText = user.address;

            // Populate order list
            const orderList = document.getElementById('orderList');
            user.orders.forEach(order => {
                const listItem = document.createElement('li');
                listItem.className = 'list-group-item';
                listItem.innerText = `Order #${order.id}: ${order.quantity} x ${order.product}`;
                orderList.appendChild(listItem);
            });
        </script>
@endsection
