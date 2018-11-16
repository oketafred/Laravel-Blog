@extends('main')

@section('title', 'Forgot my Password')

@section('content')
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5>Reset Password</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('password.email') }}" method="POST" autocomplete="off">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Send Reset Password Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection