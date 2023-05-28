@extends('layouts.auth')
@section('title')
    Register
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">

                <!-- Heading -->
                <h1 class="display-4 text-center mb-3">
                    Register
                </h1>

                <!-- Subheading -->
                <p class="text-muted text-center mb-5">
                    Free access to our dashboard.
                </p>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">

                        <!-- Label -->
                        <label>Name</label>

                        <!-- Input -->
                        <input type="text" class="form-control" name="name" placeholder="Sahrul" required autofocus>

                    </div>

                    <div class="form-group">

                        <!-- Label -->
                        <label>Email</label>

                        <!-- Input -->
                        <input type="email" class="form-control" name="email" placeholder="sahrul@gmail.com" required
                            autofocus>

                    </div>

                    <!-- Password -->
                    <div class="form-group">

                        <div class="row">
                            <div class="col">

                                <!-- Label -->
                                <label>Password</label>

                            </div>

                        </div> <!-- / .row -->

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input type="password" class="form-control form-control-appended" type="password"
                                name="password" placeholder="Enter your password" required>

                            <!-- Icon -->
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fe fe-eye"></i>
                                </span>
                            </div>

                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">

                        <div class="row">
                            <div class="col">

                                <!-- Label -->
                                <label>Confirm Password</label>

                            </div>

                        </div> <!-- / .row -->

                        <!-- Input group -->
                        <div class="input-group input-group-merge">

                            <!-- Input -->
                            <input type="password" class="form-control form-control-appended" type="password"
                                name="password_confirmation" placeholder="Enter your password" required>

                            <!-- Icon -->
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fe fe-eye"></i>
                                </span>
                            </div>

                        </div>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-lg btn-block btn-primary mb-3">
                        Sign in
                    </button>

                    <!-- Link -->
                    <p class="text-center">
                        <small class="text-muted text-center">
                            Don't have an account yet? <a href="{{ url('/register') }}">Sign up</a>.
                        </small>
                    </p>

                </form>

            </div>
            <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

                <!-- Image -->
                <div class="bg-cover vh-100 mt-n1 mr-n3"
                    style="background-image: url({{ asset('template/assets/img/covers/auth-side-cover.jpg') }});"></div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
