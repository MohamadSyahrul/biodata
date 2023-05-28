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
                                    Biodata
                                </h1>


                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> {{ $message }}
                                    </div>
                                @endif

                            </div>
                        </div> <!-- / .row -->
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Nav -->
                                <ul class="nav nav-tabs nav-overflow header-tabs">
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link active">
                                            General
                                        </a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <form class="mb-4" method="POST" action="{{ url('create-biodata') }}">
                    @csrf

                    <div class="row">
                        <div class="col-12">

                            <!-- Posisi yang di lamar -->
                            <div class="form-group">

                                <!-- Label -->
                                <label class="mb-1">
                                    Posisi yang di lamar
                                </label>

                                <!-- Input -->
                                <input type="text" class="form-control" required name="posisi">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Nama -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Nama
                                </label>

                                <!-- Input -->
                                <input type="text" name="nama" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- No Ktp -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    No Ktp
                                </label>

                                <!-- Input -->
                                <input type="number" name="no_ktp" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Tempat Tanggal Lahir -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Tempat Tanggal Lahir
                                </label>

                                <!-- Input -->
                                <input type="text" name="ttl" required class="form-control">

                            </div>

                        </div>

                        <div class="col-12 col-md-6">

                            <!-- Jenis Kelamin -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Jenis Kelamin
                                </label>

                                <!-- Input -->
                                <input type="text" name="jenis_kelamin" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Agama -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Agama
                                </label>

                                <!-- Input -->
                                <input type="text" name="agama" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Golongan Darah -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Golongan Darah
                                </label>

                                <!-- Input -->
                                <input type="text" name="gol_darah" required class="form-control">

                            </div>

                        </div>

                        <div class="col-12 col-md-6">

                            <!-- Status -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Status
                                </label>

                                <!-- Input -->
                                <input type="text" name="status" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Alamat KTP -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Alamat KTP
                                </label>

                                <!-- Input -->
                                <input type="text" name="alamat" required class="form-control">

                            </div>

                        </div>

                        <div class="col-12 col-md-6">

                            <!-- Alamat Tinggal -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Alamat Tinggal
                                </label>

                                <!-- Input -->
                                <input type="text" name="domisili" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Email -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Email
                                </label>

                                <!-- Input -->
                                <input type="email" name="email" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- No Telp -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    No Telp
                                </label>

                                <!-- Input -->
                                <input type="number" name="telp" required class="form-control">

                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <!-- Orang terdekat yang dapat di hubungi -->
                            <div class="form-group">

                                <!-- Label -->
                                <label>
                                    Orang terdekat yang dapat di hubungi
                                </label>

                                <!-- Input -->
                                <input type="number" name="c_orang_terdekat" required class="form-control">

                            </div>

                        </div>
                    </div> <!-- / .row -->
                    <button type="submit" class="btn btn-primary lift">
                        Update Biodata
                    </button>

                </form>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
