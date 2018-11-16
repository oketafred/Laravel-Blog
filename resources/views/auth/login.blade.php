@extends('main')

@section('title', 'Login')

@section('content')
    <div class="row pb-4">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Login</h3>
                </div>
                <div class="card-body">
                    <form action="/login" method="POST" autocomplete="off">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <span><input type="checkbox" name="remember"> Remember Me</span> <span class="float-right"><a href="{{ route('password.request') }}">Forgot My Password?</a></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection