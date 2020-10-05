@extends('layouts.admin_master')
@section('admin_section')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">View Institute</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">View Orphan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Institute Name</th>
                                    <th>Contact</th>
                                    <th>Establist Year</th>
                                    <th>Address</th>      
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($institute_view as $row)
                                    <tr>
                                        <td>{{ $row -> id}}</td>
                                        <td>{{ $row -> institute_name}}</td>
                                        <td>{{ $row -> contact}}</td>
                                        <td>{{ $row -> year}}</td>
                                        <td>{{ $row -> address}}</td>
                                        <td>
                                            <a href="{{url('/view-institute/'.$row -> id)}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">View</a>
                                            <a href="{{url('/edit-institute/'.$row -> id)}}" class="btn btn-warning btn-sm" role="button" aria-pressed="true">Edit</a>
                                            <a href="{{url('/delete-institute/'.$row -> id)}}" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach    
                            </tbody>
                        </table>
                    </div>
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