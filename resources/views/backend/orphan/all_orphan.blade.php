@extends('layouts.admin_master')
@section('admin_section')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">All Orpahn</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">ALL Orphan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Age</th>
                                    <th>Institute</th>      
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orphan_view as $row)
                                <tr>
                                    <td>{{$row -> first_name}}</td>
                                    <td>{{$row -> last_name}}</td>
                                    <td>{{$row -> age}}</td>
                                    <td>{{$row -> institute_name}}</td>
                                    <td><img src="{{ URL::to($row -> image) }}" height="50px" width="50px"  alt=""></td>
                                    <td>
                                        <a href="{{url('/view-orphan/'.$row -> id)}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">View</a>
                                        <a href="{{url('/edit-orphan/'.$row -> id)}}" class="btn btn-warning btn-sm" role="button" aria-pressed="true">Edit</a>
                                        <a href="{{url('/delete-orphan/'.$row -> id)}}" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Delete</a>
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