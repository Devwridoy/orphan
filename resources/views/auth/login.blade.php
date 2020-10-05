@extends('layouts.admin_master')

@section('admin_section')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                <input class="form-control py-4 @error('email') is-invalid @enderror" id="inputEmailAddress" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="email" placeholder="Enter email address" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input id="password" type="password" placeholder="Enter Your Password" class="form-control py-4 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" id="rememberPasswordCheck"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" />
                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                </div>
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">

                                @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                                <button type="submit" class="btn btn-primary" href="index.html">Login</button>
                            
                            </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</main>


@endsection


    
