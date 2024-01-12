@endsection('user.common.app')


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Checkout - Book Title</h5>

                    <!-- Form for User Information and Payment -->
                    <form action="" method="post">
                        @csrf
                        <!-- User Information -->
                        <div class="form-group">
                            <label for="fullName">Full Name:</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <!-- Payment Information (You may need to integrate a payment gateway) -->
                        <div class="form-group">
                            <label for="cardNumber">Card Number:</label>
                            <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                        </div>

                        <div class="form-group">
                            <label for="expiryDate">Expiry Date:</label>
                            <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                        </div>

                        <div class="form-group">
                            <label for="cvv">CVV:</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Complete Purchase</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
