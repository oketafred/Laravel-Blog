@extends('main')

@section('title', 'View Post')

@section('content')

	<div class="row mt-4">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<hr>
			<p class="text-justify">{{ $post->body }}</p>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<p><strong>URL:</strong><span><a href="{{ route('blog.single', $post->slug) }}">{{ url('blog/'.$post->slug) }}</a></span></p>
					<p><strong>Category:</strong><span class="float-right"> {{ $post->category->name }}</span></p>
					<p><strong>Created At:</strong> <span class="float-right">{{ $post->created_at->diffForHumans() }}</span></p>
					<p><strong>Last Updated At:</strong> <span class="float-right">{{ $post->updated_at->diffForHumans() }}</span></p>
					<hr>
					<div class="row mt-4">
					  	<div class="col-md-6">
					  		<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-block">Edit</a>
					  	</div>
					  	<div class="col-md-6">
					  		<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
					  			{{ csrf_field() }}

					  			{{ method_field('DELETE') }}
					  			<button class="btn btn-danger btn-block">Delete</button>
					  		</form>
					  	</div>
				  	</div>


					<a href="{{ route('posts.index') }}" class="btn btn-secondary btn-block mt-4"><< See All Posts</a>
				</div>
			</div>


		</div>
	</div>

@endsection