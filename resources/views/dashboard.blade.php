@extends('layouts.master')
@section('title')
    Biodata
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">

                <!-- Header -->
                <div class="header mt-md-5">
                    <div class="header-body">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Pretitle -->
                                <h6 class="header-pretitle">
                                    Overview
                                </h6>

                                <!-- Title -->
                                <h1 class="header-title">
                                    @if (Auth::user()->role == 'admin')
                                        Hallo Ini Menu Admin
                                    @elseif (Auth::user()->role == 'user')
                                        Hallo Ini Menu User
                                    @endif
                                </h1>

                            </div>
                        </div> <!-- / .row -->

                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
