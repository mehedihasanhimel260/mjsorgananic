@extends('admin.layouts.login')
@section('content')

    <body>
        <style>
            body {
                margin-top: 20px;
                background: #f6f9fc;
            }

            .account-block {
                padding: 0;
                background-image: url(https://bootdey.com/img/Content/bg1.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;
                position: relative;
            }

            .account-block .overlay {
                flex: 1;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: rgba(0, 0, 0, 0.4);
            }

            .account-block .account-testimonial {
                text-align: center;
                color: #fff;
                position: absolute;
                margin: 0 auto;
                padding: 0 1.75rem;
                bottom: 3rem;
                left: 0;
                right: 0;
            }

            .text-theme {
                color: #5369f8 !important;
            }

            .btn-theme {
                background-color: #5369f8;
                border-color: #5369f8;
                color: #fff;
            }

            .forgot-link {
                text-decoration: none;
            }

            .forgot-link:hover {
                text-decoration: underline;
            }
        </style>
        <div id="main-wrapper" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="card border-0 shadow">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <!-- Login Form -->
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="mb-5">
                                            <h3 class="h4 fw-bold text-theme">Login</h3>
                                        </div>

                                        <h6 class="h5 mb-0">Welcome back!</h6>
                                        <p class="text-muted mt-2 mb-5">Enter your Phone number and password to access admin
                                            panel.</p>

                                        <form method="POST" action="{{ route('admin.loginSubmit') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="phone" class="form-label">Phone number</label>
                                                <input type="text" name="phone" class="form-control" id="phone"
                                                    placeholder="Phone number">
                                            </div>
                                            <div class="mb-4">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" id="password"
                                                    placeholder="Enter password">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mb-4">
                                                <button type="submit" class="btn btn-theme">Login</button>
                                                <a href="#" class="forgot-link text-primary">Forgot password?</a>
                                            </div>
                                        </form>
                                        @if ($errors->any())
                                            <div class="text-danger">
                                                {{ $errors->first() }}
                                            </div>
                                        @endif

                                    </div>
                                </div>

                                <!-- Testimonial Section -->
                                <div class="col-lg-6 d-none d-lg-block">
                                    <div class="account-block rounded-end">
                                        <div class="overlay rounded-end"></div>
                                        <div class="account-testimonial">
                                            <h4 class="text-white mb-4">This beautiful theme is yours!</h4>
                                            <p class="lead text-white">"Best investment I made for a long time. Can only
                                                recommend it for other users."</p>
                                            <p>- Admin User</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->


                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
    @endsection
