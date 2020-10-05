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
                    <form method="POST" action="{{ url('update-institute/'.$edit_data->id) }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Institute Name</label>
                                <input type="text" value="{{ $edit_data -> institute_name }}" class="form-control" name="iname"  id="inputEmail4" required> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Contact Number</label>
                                <input type="text" value="{{ $edit_data -> contact }}"class="form-control" name="contact" id="inputPassword4" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" value="{{ $edit_data -> address }}" class="form-control" name="address" id="inputAddress"  placeholder="1234 Main St" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputCity">Establist Year</label>
                                <input type="text" value="{{ $edit_data -> year }}" class="form-control" name="year" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <input type="text" value="{{ $edit_data -> city }}" class="form-control" name="city" id="inputCity" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Zip</label>
                                <input type="text" value="{{ $edit_data -> zip }}" class="form-control" name="zip" id="inputZip" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Institute</button>
                    </form>
                </div>
            </div>
            <div style="height: 100vh;"></div>
        </div>
    </main>
@endsection