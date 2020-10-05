@extends('layouts.admin_master')
@section('admin_section')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">View orphan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">View orphan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <p>First Name : {{ $orphan_single_view -> first_name}}</p>
                    <p>Last Name : {{ $orphan_single_view-> last_name}}</p>
                    <p>Age: {{ $orphan_single_view -> age}}</p>
                    <p>Institute : {{ $orphan_single_view -> institute_name}}</p>
                    <p>Address: {{ $orphan_single_view -> address}}</p>
                    <p>City: {{ $orphan_single_view -> city}}</p>
                    <p>Zip: {{ $orphan_single_view -> zip}}</p>
                    <hr>
                    <img style="border-radius: 6px;" src="{{ URL::to($orphan_single_view -> image) }}" height="150px" width="150px"  alt=""></td>
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