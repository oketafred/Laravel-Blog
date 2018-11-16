@extends('main')

@section('title', 'Edit Blog Post')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<form action="{{ route('posts.update', $post->id) }}" method="POST" autocomplete="off">

				{{ method_field('PUT') }}

				{{ csrf_field() }}

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" value="{{ $post->title }}" name="title" class="form-control form-control-lg">
				</div>
				<div class="form-group">
					<label for="slug">Slug</label>
					<input type="text" value="{{ $post->slug }}" name="slug" class="form-control form-control-lg">
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
					<textarea name="body" cols="30" rows="7" name="body" class="form-control">{{ $post->body }}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg btn-block">Save Changes</button>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<p><strong>Created At:</strong> <span class="float-right">{{ $post->created_at->diffForHumans() }}</span></p>
					<p><strong>Last Updated At:</strong> <span class="float-right">{{ $post->updated_at->diffForHumans() }}</span></p>
					<hr>
					<div class="row mt-4">
					  	<div class="col-md-12">
					  		<a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Cancel</a>
					  	</div>
				  	</div>
				</div>
			</div>

			
		</div>
	</div>
@endsection