@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    

                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('auth.layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Attendance</b>Live</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p class="login-box-msg">Verify Your Email Address</p>

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},

            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.register-box -->
@endsection

