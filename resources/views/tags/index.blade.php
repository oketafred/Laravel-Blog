@extends('main')

@section('title', 'All Tags')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Tags</h1>
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
                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->id }}</td>
                        <td>{{ $tag->name }}</td>
                        <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>

                        <td>
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" id="delete-form">

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
                    <h2>New Tag</h2>
                    <form action="{{ route('tags.store') }}" method="POST" autocomplete="off">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Create New Tag</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
