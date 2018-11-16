@extends('main')

@section('title', 'All Categories')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Categories</h1>
            <table class="table table-striped table-hover mt-5">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Edit Action</th>
                    <th>Delete Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                        
                        <td>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" id="delete-form">

                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2>New Category</h2>
                    <form action="{{ route('categories.store') }}" method="POST" autocomplete="off">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Create New Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection