 @if (Session::has('success'))

 <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{ Session::get('success') }}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

 @endif

 @if (count($errors) > 0)

	@foreach($errors->all() as $error)

	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <strong>Error!</strong> {{ $error }}
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	@endforeach
	
 @endif