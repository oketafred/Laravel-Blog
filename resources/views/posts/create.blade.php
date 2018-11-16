@extends('main')

@section('title', 'Create Post')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Create New Post</h1>
            <hr>
            <form method="POST" action="/posts" autocomplete="off">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="body">Post Body</label>
                    <textarea name="body" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Create Post</button>
                </div>
            </form>
        </div>
    </div>

@endsection
