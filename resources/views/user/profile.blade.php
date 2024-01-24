@extends('user.common.app')

@section('content')

    <!-- Navigation Bar -->

    <!-- User Profile Section -->
    <div class="container-xl px-4 mt-4">
        <!-- Account page navigation-->

        <nav class="nav nav-borders">
            <a class="nav-link active ms-0"
               href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details"
               target="__blank">Profile</a>
            <a class="nav-link" href="{{ route('user_order') }}">Orders</a>
        </nav>

        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2"
                             src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->

                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Group (username)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Email</label>

                                <input class="form-control" id="inputUsername" type="text"
                                       placeholder="Enter your email" value="{{Auth::user()->email}}" readonly>
                            </div>


                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Username</label>
                                    <input class="form-control" id="inputOrgName" type="text"
                                           placeholder="Enter your username" value="{{Auth::user()->username}} "
                                           readonly>
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">

                                    <label class="small mb-1" for="inputLocation">Location</label>
                                    @foreach($user->addresses as $address)

                                        <input class="form-control" id="inputLocation" type="text"
                                               placeholder="Enter your street" value="{{$address->street}}" readonly>
                                    @endforeach

                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputPhone">Postal Code</label>

                                    <input class="form-control" id="inputPhone" type="tel"
                                           placeholder="Enter your postal code" value="{{$address->postal_code}} "
                                           readonly>

                                </div>
                                <!-- Form Group (birthday)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">City</label>
                                    <input class="form-control" id="inputBirthday" type="text" name="city"
                                           placeholder="City" value="{{$address->city}}" readonly>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
