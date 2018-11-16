@extends('main')

@section('title', 'Register')

@section('content')
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form action="/register" method="POST" autocomplete="off">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection