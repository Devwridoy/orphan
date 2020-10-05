@extends('layouts.admin_master')
@section('admin_section')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">View Institute</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">View institute</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                <p>Institute Name : {{ $raw -> institute_name}}</p>
                <p>Contact : {{ $raw-> contact}}</p>
                <p>Establist Year: {{ $raw -> year}}</p>
                <p>Address: {{ $raw -> address}}</p>
                <p>City: {{ $raw -> city}}</p>
                <p>Zip: {{ $raw -> zip}}</p>
                </div>
            </div>
            <div style="height: 100vh;"></div>
        </div>
    </main>

    <!-- <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer> -->
@endsection