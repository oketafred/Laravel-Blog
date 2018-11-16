@extends('main')

@section('title', 'Reset Password')

@section('content')

    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Reset Password</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('password.update') }}" method="POST" autocomplete="off">

                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection