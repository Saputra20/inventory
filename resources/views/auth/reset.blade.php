@extends('auth.app')

@section('page-content')
<div class="content-wrapper">
    <div class="content d-flex justify-content-center align-items-center">
        <form class="login-form" action="index.html">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">Password recovery</h5>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-right">
                        <input type="email" class="form-control" placeholder="Your Username">
                        <div class="form-control-feedback">
                            <i class="icon-mail5 text-muted"></i>
                        </div>
                    </div>

                    <button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection