<div class="form-group">
	@if(count($errors))
		<div class="alert alert-danger">
			<ul class="error-list">
				@foreach ($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			</ul>
		</div>
	@endif
</div>