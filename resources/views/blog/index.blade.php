@extends('main')

@section('title', 'Blog')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <h1>Blog</h1>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-8">
            @foreach($posts as $post)
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <h5>Published Date: {{ $post->created_at->diffForhumans() }}</h5>
                    <p class="text-justify">{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                    <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
                <hr>
            @endforeach

            <div class="row mt-5">
                <div class="col-md-12">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
        <div class="col-md-3 offset-md-1">
            <h2>Sidebar</h2>
        </div>
    </div>

@endsection