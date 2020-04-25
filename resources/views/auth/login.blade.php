@extends('auth.app')

@section('page-content')
<div class="content-wrapper">
    <div class="content d-flex justify-content-center align-items-center">
        <form class="login-form" action="{{ url('/login') }}" method="POST">
            @csrf
            @if (session('message'))
            <div class="alert alert-danger border-0 alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                <span class="font-weight-semibold">{{ session('message') }}</a>.
            </div>
            @endif
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i
                            class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Login to your account</h5>
                        <span class="d-block text-muted">Enter your credentials below</span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="text" class="form-control @error('username') border-danger @enderror"
                            placeholder="Username" name="username">
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                        @error('username')
                        <span class="form-text text-danger">Masukan Username</span>
                        @enderror
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input type="password" class="form-control @error('password') border-danger @enderror"
                            placeholder="Password" name="password">
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                        @error('password')
                        <span class="form-text text-danger">Masukan Password</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign in <i
                                class="icon-circle-right2 ml-2"></i></button>
                    </div>

                    <div class="text-center">
                        <a href="{{ url('/forgot-password') }}">Forgot password?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
