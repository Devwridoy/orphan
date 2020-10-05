@extends('layouts.admin_master')

@section('admin_section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" name="name" value="{{ old('name') }}"
                                        placeholder="Enter Your name" />
                                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" name="email" value="{{ old('email') }}"
                                        aria-describedby="emailHelp" placeholder="Enter email address" />
                                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>   
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                    <input class="form-control py-4" id="inputConfirmPassword" name="password_confirmation" type="password" placeholder="Confirm password" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4 mb-0">
                            <button type="submit" class="btn btn-primary btn-block" href="login.html">Create Account</button></div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="{{ route('login')}}">Have an account? Go to login</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</div>

@endsection
