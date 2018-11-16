@extends('main')

@section('title', 'All Posts')

@section('content')

<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>
	<div class="col-md-2">
		<a href="{{ route('posts.create') }}" class="btn btn-primary btn-block">Create New Post</a>
	</div>

</div>

<div class="row mt-4">
	<div class="col-md-12">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created_At</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($posts as $post)
					<tr>
						<th>{{ $post->id }}</th>
						<td>{{ $post->title }}</td>
						<td>{{ substr($post->body, 0, 50) }} {{ strlen($post->body) > 50 ? "..." : "" }}</td>
						<td>{{ $post->created_at->diffForHumans() }}</td>
						<td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
						<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-success btn-sm">View</a></td>
					</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>

@endsection