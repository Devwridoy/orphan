@extends('layouts.admin_master')
@section('admin_section')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Add Orpahn</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Orpahn</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ url('add-orphan') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" name="fname" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="inputPassword4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-3">
                                <label for="inputCity">Age</label>
                                <input type="text" class="form-control" name="age" id="inputCity">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputState">Institute</label>
                                <select id="inputState" class="form-control" name="institute_id">
                                    <option>Choose...</option>
                                    @foreach($institute as $row)
                                     <option value="{{ $row->id }}">{{ $row->institute_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" name="city" id="inputCity">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" name="zip" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Input Your Image</label>
                            <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Orpahn</button>
                    </form>
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