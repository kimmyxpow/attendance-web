@extends('auth.layouts.app')

@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Attendance</b>Live</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">    
                <p class="login-box-msg">Please confirm your password before continuing.</p>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" placeholder="Email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Confirm Password</button>
                    </div>
                    <!-- /.col -->
                </form>
    
                @if (Route::has('password.request'))
                <p class="mb-1">
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                </p>
                @endif
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->
@endsection