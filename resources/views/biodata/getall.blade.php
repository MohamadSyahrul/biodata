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

                <table class="table table-sm table-nowrap">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Ktp</th>
                            <th scope="col">Tempat Tanggal Lahir</th>
                            {{-- <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Golongan Darah</th>
                            <th scope="col">Status</th>
                            <th scope="col">Alamat KTP</th>
                            <th scope="col">Alamat Tinggal</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telp</th>
                            <th scope="col">Orang terdekat</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bt as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->posisi }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->no_ktp }}</td>
                                <td>{{ $item->ttl }}</td>
                                {{-- <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->gol_darah }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->domisili }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->telp }}</td>
                                <td>{{ $item->c_orang_terdekat }}</td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
