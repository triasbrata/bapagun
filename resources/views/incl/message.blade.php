<div class="hidden" id="message">
	@if (Session::has('errors'))
		<ul class="error">
			@foreach ($errors->all() as $e)
				<li>{{$e}}</li>
			@endforeach
		</ul>
	@endif
	@if (Session::has('info'))
		<ul class="info">
			@foreach (Session::get('info') as $e)
				<li>{{$e}}</li>
			@endforeach
		</ul>
	@endif
	@if (Session::has('success'))
		<ul class="success">
			@foreach (Session::get('success') as $e)
				<li>{{$e}}</li>
			@endforeach
		</ul>
	@endif
	@if (Session::has('warning'))
		<ul class="warning">
			@foreach (Session::get('info') as $e)
				<li>{{$e}}</li>
			@endforeach
		</ul>
	@endif
</div>