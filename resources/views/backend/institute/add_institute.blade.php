@extends('layouts.admin_master')
@section('admin_section')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Add Institute</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Institute</li>
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
                    <form method="POST" action="{{ url('add-institute') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Institute Name</label>
                                <input type="text" class="form-control" name="iname" id="inputEmail4"> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Contact Number</label>
                                <input type="text" class="form-control" name="contact" id="inputPassword4" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress"  placeholder="1234 Main St" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Establist Year</label>
                                <input type="text" class="form-control" name="year" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" name="city" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" name="zip" id="inputZip" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Institute</button>
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