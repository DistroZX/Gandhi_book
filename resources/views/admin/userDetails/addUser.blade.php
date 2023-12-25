<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="100,000+ Free eBooks in the Genres you Love | gandhi Books,ebooks to read,free books online pdf,download books free pdf,pdf book free online,books for free online,free books online,books pdf,free books,free book,gandhibooks,read books online,gandhi books,free who was books,free book download pdf,book for free to read online.">
    <meta name="keywords" content="ebooks to read, free books online pdf, free ebook pdf, download free ebook pdf, download books free pdf, pdf book free online, books for free online, free books online, books pdf, free books, free book,gandhi books,read books online,gandhibooks,free book download pdf,read books online free">
    <meta name="abstract" content="100,000+ Free eBooks in the Genres you Love: book, ebooks, pdfbook, pdf books, books,download books, read books, download free ebook pdf,">
    <title>100,000+ Free eBooks in the Genres you Love | gandhi Books</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/bootstrap.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/animate.css') }}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/meanmenu.min.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/owl.carousel.css') }}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/font-awesome.min.css') }}">
    <!-- flexslider.css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/flexslider.css') }}">
    <!-- chosen.min.css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/chosen.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('user_r/css/croppie.css') }}">

    <link rel="stylesheet" href="{{ asset('user_r/css/gandhibooks.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('user_r/css/responsive.css') }}">
</head>

<!-- header-area-start -->
<header>
    <!-- header-mid-area-start -->
    <div class="header-mid-area ptb-20">
        <div class="container">
            <div class="row">



                <div class="col-md-3 user_name" style="padding: 0px 0px;">
                    @if(Auth::check())
                        Welcome {{Auth::user()->username}}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- header-mid-area-end -->
    <!-- ads -->

    <div class="header-mid-area">
        <div class="container">
            <div class="row" style="text-align: center; display: flex; justify-content: center;">
                <div class="col-lg-6 col-md-6 col-sm-6">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="user-login-area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="login-title text-center mb-30">
                            <h2>Register</h2>
                        </div>
                    </div>
                    <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                        <div class="login-form">
                            <form method="POST" action="{{ route('Add_user') }}">
                                @csrf
                                <div class="single-login">
                                    <label>Full name<span>*</span></label>
                                    <input type="text" name="username" id="username" required/>
                                </div>
                                <div class="single-login">
                                    <label>Email<span>*</span></label>
                                    <input type="email" name="email" id="email" required/>
                                </div>
                                <div class="single-login">
                                    <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
				                <strong>{{ $message }}</strong>
				            </span>
                                    @enderror

                                    <button class="btn btn-info mt-1" type="button" id="generate-password">Generate Strong Password</button>
                                </div>

                                <div class="single-login">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="cpassword" required autocomplete="new-password">
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">User Type</label>
                                    <select class="form-control" name="user_type">
                                        <option value="">--Select User Type--</option>
                                        <option value="admin" >Admin</option>
                                        <option value="accountant">Accountant</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                                <div class="privateinfo">
                                    <input type="hidden" name="agent" id="agent">
                                </div>
                                <div class="privateinfo">
                                    <input type="hidden" name="generated_password" id="generated-password">
                                </div>

                                <div class="privateinfo">
                                    <input type="hidden" name="referral" id="referral">
                                </div>

                                <div class="single-login single-login-2">
                                    <button class="btn btn-warning mainbtn" onclick="registerNow()" id="signupbtn">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <!-- footer-top-start -->

        </script>
        <script src="{{ asset('user_r/js/enot.min.js') }}"></script>
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="user_r/js/jquery-1.12.4.min.js"></script>
        <!-- popper js -->
        <script src="user_r/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="user_r/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="user_r/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="user_r/js/jquery.meanmenu.js"></script>
        <!-- wow js -->
        <script src="user_r/js/wow.min.js"></script>
        <!-- jquery.parallax-1.1.3.js -->
        <script src="user_r/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countdown.min.js -->
        <script src="user_r/js/jquery.countdown.min.js"></script>
        <!-- jquery.flexslider.js -->
        <script src="user_r/js/jquery.flexslider.js"></script>
        <!-- chosen.jquery.min.js -->
        <script src="user_r/js/chosen.jquery.min.js"></script>
        <!-- jquery.counterup.min.js -->
        <script src="user_r/js/jquery.counterup.min.js"></script>
        <!-- waypoints.min.js -->
        <script src="user_r/js/waypoints.min.js"></script>
        <!-- plugins js -->
        <script src="user_r/js/plugins.js"></script>
        <!-- main js -->
        <script src="user_r/js/main.js"></script>
        <script src="user_r/js/sweetalert.min.js"></script>
        <script src="user_r/js/croppie.js"></script>
        <script src="user_r/js/gandhibooks.js"></script>
        <script>
            checkIsLoginMenu();
        </script>
        <script>
            document.getElementById('generate-password').addEventListener('click', function() {
                var strongPassword = generateStrongPassword(12); // Change length as needed
                document.getElementById('password').value = strongPassword;
                document.getElementById('password-confirm').value = strongPassword;

                // Autofill the hidden input field
                document.getElementById('generated-password').value = strongPassword;
            });


            function generateStrongPassword(length) {
                var charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
                var password = "";
                for (var i = 0; i < length; i++) {
                    password += charset.charAt(Math.floor(Math.random() * charset.length));
                }
                return password;
            }
        </script>

